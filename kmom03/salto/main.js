/**
 * Place your JS-code here.
 */
$(document).ready(function () {
    "use strict";
    var t1 = document.getElementById("b1");

    t1.swap = 1;

    t1.onclick = function () {
        this.className = (this.swap++ % 2) ? "baddie move-salto" : "baddie";
    };

    console.log("Everything is ready.");
});
