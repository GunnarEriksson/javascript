/**
 * Playing move the space ship on the moon
 */
/*global Key */
/*global Audio */
/*global LunaLander */
/*global requestAnimFrame */

 var groundBlocks = [
     10,10,10,10,10,10,10,10,10,10,10,10,10,10,11,10,10,10,10,10,10,10,10,10,10,10,10,11,
     10,10,10,10,10,10,10,10,10,10,10,10,10,11,11,11,10,10,10,10,10,10,10,10,10,10,11,11,
     11,10,10,10,10,10,10,10,10,10,10,10,10,10,11,11,11,11,10,10,10,10,10,10,10,10,11,11,
     11,11,10,10,10,10,10,10,10,10,10,10,10,10,10,11,11,10,10,10,10,10,10,10,10,10,10,11,
     11,11,10,10,10,10,10,10,10,10,10,10,10,10,10,11,10,10,10,10,10,10,10,10,10,11,11,11,
     11,11,11,10,10,10,10,10,10,10,10,10,10,10,11,11,10,10,10,10,10,10,10,10,10,10,11,11,
     11,11,11,10,10,10,10,10,10,10,10,10,10,11,11,11,10,10,10,10,10,10,10,10,10,10,11,11,
     11,11,10,10,10,10,10,10,10,10,10,10,11,11,11,11,11,10,10,10,10,10,10,10,10,10,10,11,
     11,10,10,10,10,10,10,10,10,10,10,11,11,11,11,11,11,10,10,10,10,10,10,10,10,10,10,11,
     11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11];

var platformBlocks = [10,10,10,10,10,12,12,12,10,10,10,10,10,10,10,10,10,10,10,10,12,12,12,10,10,10,10,10];

// Returns an array with all corners position in the rectangle
function getPixelsByAngle(x, y, halfWidth, halfHeight, angle) {
   var bounds = [
      //upper left
      x + (halfWidth) * Math.cos(angle) - (halfHeight) * Math.sin(angle) + halfWidth,
      y + (halfHeight) * Math.cos(angle) + (halfWidth) * Math.sin(angle) + halfHeight,
      //upper right
      x - (halfWidth) * Math.cos(angle) - (halfHeight) * Math.sin(angle) + halfWidth,
      y + (halfHeight) * Math.cos(angle) - (halfWidth) * Math.sin(angle) + halfHeight,
      //bottom right
      x - (halfWidth) * Math.cos(angle) + (halfHeight) * Math.sin(angle) + halfWidth,
      y - (halfHeight) * Math.cos(angle) - (halfWidth) * Math.sin(angle) + halfHeight,
      //bottom left
      x + (halfWidth) * Math.cos(angle) + (halfHeight) * Math.sin(angle) + halfWidth,
      y - (halfHeight) * Math.cos(angle) + (halfWidth) * Math.sin(angle) + halfHeight
   ];

   return bounds;
}

// Test if the edges intersects.
function edgeTest(p1, p2, p3, r2) {
    var rot = [ -(p2[1] - p1[1]),
                  p2[0] - p1[0] ];

    var ref = (rot[0] * (p3[0] - p1[0]) +
               rot[1] * (p3[1] - p1[1])) >= 0;

    for (var i = 0, il = r2.length; i < il; i+=2) {
        if (((rot[0] * (r2[i]   - p1[0]) +
              rot[1] * (r2[i+1] - p1[1])) >= 0) === ref) return false;
    }

    return true;
}

// both rects must be specified as all four points in plain vector, like:
//   [ x1, y1, x2, y2, x3, y3, x4, y4 ], clockwise from top-left point
// their points must already be rotated and specified in global space before passing to this function
function isIntersect(r1, r2) {
    if (!r1 || !r2) throw new Error('Rects are not accessible');

    var pn, px;
    for (var pi = 0, pl = r1.length; pi < pl; pi += 2) {
        pn = (pi === (pl - 2)) ? 0 : pi + 2; // next point
        px = (pn === (pl - 2)) ? 0 : pn + 2;
        if (edgeTest([r1[pi], r1[pi+1]],
                     [r1[pn], r1[pn+1]],
                     [r1[px], r1[px+1]], r2)) return false;
    }

    for (var pj = 0, pm = r2.length; pj < pm; pj += 2) {
        pn = (pj === (pm - 2)) ? 0 : pj + 2; // next point
        px = (pn === (pm - 2)) ? 0 : pn + 2;
        if (edgeTest([r2[pj], r2[pj+1]],
                     [r2[pn], r2[pn+1]],
                     [r2[px], r2[px+1]], r1)) return false;
    }
    return true;
}

/**
 * Shim layer, polyfill, for requestAnimationFrame with setTimeout fallback.
 * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 */
window.requestAnimFrame = (function() {
    return window.requestAnimationFrame       ||
           window.webkitRequestAnimationFrame ||
           window.mozRequestAnimationFrame    ||
           window.oRequestAnimationFrame      ||
           window.msRequestAnimationFrame     ||
           function( callback ) {
               window.setTimeout(callback, 1000 / 60);
           };
})();



/**
 * Shim layer, polyfill, for cancelAnimationFrame with setTimeout fallback.
 */
window.cancelRequestAnimFrame = (function() {
    return window.cancelRequestAnimationFrame ||
           window.webkitCancelRequestAnimationFrame ||
           window.mozCancelRequestAnimationFrame    ||
           window.oCancelRequestAnimationFrame      ||
           window.msCancelRequestAnimationFrame     ||
           window.clearTimeout;
})();



/**
 * Trace the keys pressed
 * http://nokarma.org/2011/02/27/javascript-game-development-keyboard-input/index.html
 */
window.Key = {
    pressed: {},

    LEFT:   37,
    UP:     38,
    RIGHT:  39,

    isDown: function(keyCode) {
        return this.pressed[keyCode];
    },

    onKeydown: function(event) {
        this.pressed[event.keyCode] = true;
    },

    onKeyup: function(event) {
        delete this.pressed[event.keyCode];
    }
};

window.addEventListener('keyup',   function(event) { Key.onKeyup(event); },   false);
window.addEventListener('keydown', function(event) { Key.onKeydown(event); }, false);



/**
 * All objects are Vectors
 */
function Vector(x, y) {
    this.x = x || 0;
    this.y = y || 0;
}

// The vector prototype
Vector.prototype = {
    muls:  function (scalar) { return new Vector( this.x * scalar, this.y * scalar); }, // Multiply with scalar
    imuls: function (scalar) { this.x *= scalar; this.y *= scalar; return this; },      // Multiply itself with scalar
    adds:  function (scalar) { return new Vector( this.x + scalar, this.y + scalar); }, // Multiply with scalar
    iadd:  function (vector) { this.x += vector.x; this.y += vector.y; return this; }   // Add itself with Vector
};

/**
 * A Ship as an object.
 */
function Ship(width, height, position, grounds, platforms) {
    this.width              = width     || 80;
    this.height             = height    || 50;
    this.position           = position  || new Vector();
    this.grounds            = grounds;
    this.platforms          = platforms;
    this.velocity           = new Vector();
    this.directionX         = "right";
    this.directionY         = "up";
    this.prevX              = 0;
    this.prevY              = 0;
    this.direction          = 1.5 * Math.PI;
    this.gravity            = 1;
    this.damp               = 0.999;
    this.isOnStartPlatform  = true;
    this.hasCrashed         = false;
    this.hasLanded          = false;
    this.hasTriedToLand     = false;
    this.message            = "";
    this.ship               = new window.Image();
    this.ship.src           = "../img/game/space_ship.png";
    this.exhaust            = new window.Image();
    this.exhaust.src        = "../img/game/exhaust.png";
    this.exhaustSound       = new Audio("../sound/exhaust.wav");
}

// The ship prototype
Ship.prototype = {
    draw: function(ct) {
        ct.save();
        ct.translate(this.position.x, this.position.y);
        ct.translate(40, 25);
        ct.rotate(this.direction);
        ct.drawImage(this.ship, -40, -25, this.width, this.height);
        if (Key.isDown(Key.UP)) {
            ct.drawImage(this.exhaust, -64, -16, 32, 32);
        }
        ct.restore();
    },


    speed: function () {
        return Math.sqrt(Math.pow(this.velocity.x, 2) + Math.pow(this.velocity.y, 2));
    },

    move: function (td) {
        // Luftmotstånd
        (this.velocity).imuls(Math.pow(this.damp, this.speed() / 100));

        // Gravitation
        this.velocity.y += 20 * td;
        this.position.x += this.velocity.x * td;
        this.position.y += this.velocity.y * td;
    },

    rotateLeft: function (td) {
        this.direction = (this.direction - td) % (2 * Math.PI);
        if (this.direction < 0) {
            this.direction += 2 * Math.PI;
        }
    },

    rotateRight: function (td) {
        this.direction = (this.direction + td) % (2 * Math.PI);
        if (this.direction < 0) {
            this.direction += 2 * Math.PI;
        }
    },

    throttle: function (td) {
        this.isOnStartPlatform = false;
        var acc = 40 * td;
        var inc = new Vector(acc * Math.cos(this.direction), acc * Math.sin(this.direction));
        (this.velocity).iadd(inc);
        this.exhaustSound.play();
    },

    noThrottle: function() {
        this.exhaustSound.pause();
        this.exhaustSound.currentTime = 0;
    },

    shipHitsGround: function() {
        if (this.grounds.shipHitsGround(this)) {
            this.hasCrashed = true;
        }
    },

    shipHitsStartPlatform: function() {
        if (this.platforms.shipHitsStartPlatform(this)) {
            this.isOnStartPlatform = true;
        }
    },

    shipHitsLandingPlatform: function() {
        if (this.platforms.shipHitsLandingPlatform(this)) {
            if (this.hasCrashed) {
                this.hasTriedToLand = true;
            } else {
                this.hasLanded = true;
            }
        }
    },

    update: function(td) {
        if (Key.isDown(Key.UP)) {
            this.throttle(td);
        } else {
            this.noThrottle();
        }
        if (Key.isDown(Key.LEFT))   this.rotateLeft(td);
        if (Key.isDown(Key.RIGHT))  this.rotateRight(td);
        if (!this.isOnStartPlatform) {
            this.move(td);
        }
        this.shipHitsGround();
        this.shipHitsStartPlatform();
        this.shipHitsLandingPlatform();
        this.stayInArea();
    },

    stayInArea: function() {
        if (this.position.x > 162 && this.position.x < 258 && this.position.y > 410 ) {
            this.position.x = this.position.x;
            this.position.y = 410;
        }
        if (this.position.y < 0) {
            this.message = "Skeppet är utanför spelplanen";
            this.hasCrashed = true;
        }

        if (this.position.x < 0 && this.position.x > this.width) {
            this.message = "Skeppet är utanför spelplanen";
            this.hasCrashed = true;
        }
    }
};

// The ground as an object.
function Ground(position) {
    this.position           = position  || new Vector();
    this.groundWidth        = 32;
    this.groundHeight       = 32;
    this.ground             = new window.Image();
    this.ground.src         = "../img/tiles/rock/rock.png";
}

// The ground prototype
Ground.prototype = {
    draw: function(ct) {
        ct.save();
        ct.translate(this.position.x, this.position.y);
        ct.beginPath();
        ct.drawImage(this.ground, 0, 0, this.groundWidth, this.groundHeight);
        ct.closePath();

        ct.stroke();
        ct.restore();
    },

    shipHitsGround: function(ship) {
        var shipPos = getPixelsByAngle(ship.position.x, ship.position.y, ship.width / 2, ship.height / 2, ship.direction);
        var rockPos = getPixelsByAngle(this.position.x, this.position.y, this.groundWidth / 2, this.groundHeight / 2, Math.PI);

        if (isIntersect(rockPos, shipPos)) {
            ship.message = "Skeppet träffade marken";
            return true;
        } else {
            return false;
        }
    }
};

// Grounds as an object. Controls all ground objects.
function Grounds() {
    this.grounds = [];
    var posY = 178;
    var groundItem = 0;
    var posX = 2;
    var noTilesInRow = 28;

    for (var i = 0; i < groundBlocks.length; i++) {
        if (noTilesInRow < 1) {
            posX = 2;
            posY += 32;
            noTilesInRow = 28;
        }

        if (groundBlocks[i] === 11) {
            this.grounds[groundItem] = new Ground(new Vector(posX, posY));
            groundItem++;
        }
        posX += 32;
        noTilesInRow--;
    }
}

// The grounds prototype
Grounds.prototype = {
    draw: function(ct) {
        for (var i = 0; i < this.grounds.length; i++) {
            this.grounds[i].draw(ct);
        }
    },

    shipHitsGround: function(ship) {
        for (var i = 0; i < this.grounds.length; i++) {
            if (this.grounds[i].shipHitsGround(ship)) {
                return true;
            }
        }

        return false;
    },
};

// The platform as an object.
function Platform(position) {
    this.position           = position  || new Vector();
    this.platformWidth      = 32;
    this.platformHeight     = 32;
    this.platform           = new window.Image();
    this.platform.src       = "../img/tiles/platform/platform.png";
}

// The platform prototype.
Platform.prototype = {
    draw: function(ct) {
        ct.save();
        ct.translate(this.position.x, this.position.y);
        ct.beginPath();
        ct.drawImage(this.platform, 0, 0, this.platformWidth, this.platformHeight);
        ct.closePath();

        ct.stroke();
        ct.restore();
    },

    shipHitsStartPlatform: function(ship) {
        var shipPos = getPixelsByAngle(ship.position.x, ship.position.y, ship.width / 2, ship.height / 2, ship.direction);
        var platformPos = getPixelsByAngle(this.position.x, this.position.y, this.platformWidth / 2, this.platformHeight / 2, Math.PI);

        if (isIntersect(platformPos, shipPos)) {
            ship.hasCrashed = true;
            if (ship.direction > 1.48 * Math.PI && ship.direction < 1.52 * Math.PI) {
                if (ship.position.x > 146 && ship.position.x < 195) {
                    if (parseInt(ship.speed()) < 11) {
                        ship.hasCrashed = false;
                    } else {
                        ship.message = "Skeppet landade på startplattformen i högre hastighet än 10 km/h";
                    }
                } else {
                    ship.message = "Skeppet landade utanför plattformen";
                }
            } else {
                ship.message = "Landade i felaktig vinkel. Skeppet bröt ena landningstället";
            }
            return true;
        } else {
            return false;
        }
    },

    shipHitsLandingPlatform: function(ship) {
        var shipPos = getPixelsByAngle(ship.position.x, ship.position.y, ship.width / 2, ship.height / 2, ship.direction);
        var platformPos = getPixelsByAngle(this.position.x, this.position.y, this.platformWidth / 2, this.platformHeight / 2, Math.PI);

        if (isIntersect(platformPos, shipPos)) {
            ship.hasCrashed = true;
            if (ship.direction > 1.48 * Math.PI && ship.direction < 1.52 * Math.PI) {
                if (ship.position.x > 626 && ship.position.x < 676) {
                    if (parseInt(ship.speed()) < 11) {
                        ship.hasCrashed = false;
                    } else {
                        ship.message = "Skeppet landade på plattformen i högre hastighet än 10 km/h";
                    }
                } else {
                    ship.message = "Skeppet landade utanför plattformen";
                }
            } else {
                ship.message = "Landade i felaktig vinkel. Skeppet bröt ena landningstället";
            }
            return true;
        } else {
            return false;
        }
    },
};

// The platforms as an object. Controls the start platform and landing platform.
function Platforms() {
    this.platforms = [];
    var posY = 434;
    var platformItem = 0;
    var posX = 2;
    var noTilesInRow = 28;

    for (var i = 0; i < platformBlocks.length; i++) {
        if (noTilesInRow < 1) {
            posX = 2;
            posY += 32;
            noTilesInRow = 28;
        }

        if (platformBlocks[i] === 12) {
            this.platforms[platformItem] = new Platform(new Vector(posX, posY));
            platformItem++;
        }
        posX += 32;
        noTilesInRow--;
    }
}

Platforms.prototype = {
    draw: function(ct) {
        for (var i = 0; i < this.platforms.length; i++) {
            this.platforms[i].draw(ct);
        }
    },

    shipHitsStartPlatform: function(ship) {
        for (var i = 0; i < 3; i++) {
            if (this.platforms[i].shipHitsStartPlatform(ship)) {
                return true;
            }
        }

        return false;
    },

    shipHitsLandingPlatform: function(ship) {
        for (var i = 3; i < 6; i++) {
            if (this.platforms[i].shipHitsLandingPlatform(ship)) {
                return true;
            }
        }

        return false;
    },
};


/**
 * LunaLander, the Game
 */
window.LunaLander = (function() {
  var ct, ship, grounds, platforms, lastGameTick, isGameOver, width, height;
  var hasShipCrashed, hasShipLanded, shipExplosionSound, isExplosionPlayed;

  var init = function(canvas) {
    canvas = document.getElementById(canvas);
    ct = canvas.getContext('2d');
    width = canvas.width;
    height = canvas.height;
    ct.lineWidth = 1;
    ct.strokeStyle = 'hsla(0,0%,100%,1)';
    platforms = new Platforms();
    grounds = new Grounds();
    ship = new Ship(80, 50, new Vector(170, 369), grounds, platforms);
    hasShipCrashed = false;
    hasShipLanded = false;
    isGameOver = false;
    shipExplosionSound = new Audio("../sound/spaceship-explosion.wav");
    isExplosionPlayed = false;

    console.log('Init the game');
  };

  var update = function(td) {
      hasShipCrashed = ship.hasCrashed === true ? true : false;
      hasShipLanded = ship.hasLanded === true ? true : false;

      if (!hasShipCrashed && !hasShipLanded) {
          ship.update(td, width, height);
      } else {
          isGameOver = true;
      }
  };

  var render = function() {
    ct.clearRect(0, 0, width, height);
    platforms.draw(ct);
    grounds.draw(ct);
    ship.draw(ct);

    ct.save();
    ct.translate(20, 40);
    ct.fillStyle = 'white';
    ct.font = "36px serif";
    ct.fillText(parseInt(ship.speed()), 0, 0);
    ct.fillText("km/h", 40, 0);
    ct.restore();

    if (isGameOver) {
        ship.exhaustSound.pause();
        ship.exhaustSound.currentTime = 0;

        ct.save();
        ct.translate(250, 60);
        ct.font = "60px impact";
        if (hasShipLanded) {
            ct.fillStyle = '#009900';
            ct.fillText('Grattis!', -80, 0, 300);
            ct.font = "36px impact";
            ct.fillText('Du har landat skeppet!', -80, 50, 300);
        } else {
            if (!isExplosionPlayed) {
                shipExplosionSound.play();
                isExplosionPlayed = true;
            }
            ct.fillStyle = '#FF0000';
            ct.fillText('Tyvärr!', -80, 0, 300);
            ct.font = "36px impact";
            ct.fillText('Du förlorade!', -80, 50, 300);
            ct.fillText(ship.message, -80, 100, 600);
        }

        ct.restore();
    }
  };

  var gameLoop = function() {
    var now = Date.now();
    var td = (now - (lastGameTick || now)) / 1000; // Timediff since last frame / gametick
    lastGameTick = now;
    requestAnimFrame(gameLoop);
    update(td);
    render();
  };

  return {
      'init': init,
      'gameLoop': gameLoop
  };

})();



// On ready
$(function(){
  'use strict';

  LunaLander.init('canvas1');
  LunaLander.gameLoop();

  console.log('Ready to play.');
});
