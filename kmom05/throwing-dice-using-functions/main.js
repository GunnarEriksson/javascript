/**
 * Throw dice using functions
 */
/*global Guer */
$(document).ready(function () {
    "use strict";

    var element;
    var str = "";

    var print = function (element, str) {
        element.innerHTML += "<p>" + str + "</p>";
    };

    var rollDice = function (times) {
        var i;
        var number;
        var sum = 0;
        var row = "";
        var average = 0;

        for (i = 0; i < times; i += 1) {
            number = Guer.random(1, 6);
            sum += number;
            row += number + ", ";
        }

        average = sum / times;

        return "Average: " + average.toPrecision(2) + " Serie: " + row;
    };

    console.log("Throwing dice using functions starts");

    element = document.getElementById("element");
    element.innerHTML = "<p><b>Dice - Functions in JavaScript</b></p>";
    element.className = "black";

    str = "Throw a serie of 6 with a dice.<br/>" + rollDice(6);
    print(element, str);

    str = "Throw a serie of 12 with a dice.<br/>" + rollDice(12);
    print(element, str);

    str = "Throw a serie of 100 with a dice.<br/>" + rollDice(100);
    print(element, str);

    console.log("Throwing dice using functions is ready");

});
