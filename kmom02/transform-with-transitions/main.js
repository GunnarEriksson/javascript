/**
 * Place your JS-code here.
 */
$(document).ready(function () {
    "use strict";
    var t1 = document.getElementById("b1");
    var t2 = document.getElementById("b2");
    var t3 = document.getElementById("b3");
    var t4 = document.getElementById("b4");
    var t5 = document.getElementById("b5");
    var t6 = document.getElementById("b6");
    var t7 = document.getElementById("b7");
    var t8 = document.getElementById("b8");

    t1.swap = 1;
    t2.swap = 1;
    t3.swap = 1;
    t4.swap = 1;
    t5.swap = 1;
    t6.swap = 1;
    t7.swap = 1;
    t8.swap = 1;

    t1.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie flip" : "baddie";
    };

    t2.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie flipx2" : "baddie";
    };

    t3.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie size-half" : "baddie";
    };

    t4.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie size-double" : "baddie";
    };

    t5.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie skew-horisontal" : "baddie";
    };

    t6.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie skew-vertical" : "baddie";
    };

    t7.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie move" : "baddie";
    };

    t8.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie move-flip" : "baddie";
    };

    console.log("Everything is ready.");
});
