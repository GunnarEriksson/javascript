/**
 * Pushing the ball
 */
/*global Guer */
$(document).ready(function () {
    "use strict";

    var text = document.getElementById("text");
    var flash = document.getElementById("flash");
    var myBall;
    var pos;

    console.log("Push the ball starts");
    text.className = "black";
    text.innerHTML = "<b>Click the ball to make it move around.</b>";

    myBall = {};
    myBall.image = "../img/ball/black_ball_64_64.png";
    myBall.position = {
        x: 10,
        y: 10
    };

    myBall.dimension = {
        w: 64,
        h: 64
    };

    pos = Guer.getOffset(flash);

    myBall.canvas = {
        x: pos.left,
        y: pos.top,
        x2: pos.left + flash.clientWidth - myBall.dimension.w,
        y2: pos.top + flash.clientHeight - myBall.dimension.h
    };

    myBall.HTMLelement = document.getElementById("ball");

    myBall.center = function () {
        this.position.x = this.canvas.x + (this.canvas.x2 - this.canvas.x) / 2;
        this.position.y = this.canvas.y + (this.canvas.y2 - this.canvas.y) / 2;
        this.draw();
        console.log("Centered ball at: " + this.position.x + " x " + this.position.y);
    };

    myBall.draw = function () {
        this.HTMLelement.style.backgroundImage = "url(" + this.image + ")";
        this.HTMLelement.style.top = this.position.y + "px";
        this.HTMLelement.style.left = this.position.x + "px";
        console.log("Drawing ball.");
    };

    myBall.moveAt = function (x, y) {
        var newX;
        var newY;
        newX = (this.position.x + this.dimension.w / 2 - x) * 5;
        newY = (this.position.y + this.dimension.h / 2 - y) * 5;
        this.move(newX, newY);
    };

    myBall.move = function (x, y) {
        this.position.x = this.keepInsideBorders(this.position.x + x, this.canvas.x, this.canvas.x2);
        this.position.y = this.keepInsideBorders(this.position.y + y, this.canvas.y, this.canvas.y2);
        this.draw();
    };

    myBall.keepInsideBorders = function (pos, min, max) {
        var validPos;
        if (pos >= min) {
            if (pos <= max) {
                validPos = pos;
            } else {
                validPos = max;
            }
        } else {
            validPos = min;
        }

        return validPos;
    };

    myBall.HTMLelement.addEventListener("click", function (event) {
        myBall.moveAt(event.pageX, event.pageY);
    });

    myBall.center();
});
