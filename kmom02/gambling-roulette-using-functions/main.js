/**
 * Roulette
 */
/*global Guer */

$(document).ready(function () {
    "use strict";

    var element = document.getElementById("text");
    var table = document.getElementById("table");
    var button = document.getElementById("button");
    var color = document.getElementById("color");
    var bankroll = document.getElementById("bankroll");
    var bet = document.getElementById("bet");
    var log = document.getElementById("log");
    var isSpinningTheWheelOngoing = false;

    console.log("Starting");
    element.className = "black";
    element.innerHTML = "<p><b>Roulette - Functions in JavaScript</b></p>";

    /**
     * Spinning the wheel
     */
     function spinnTheWheel(numberOfTimes) {
         var i;
         var numbers = [];
         numberOfTimes = numberOfTimes || 1;

         for (i = 0; i < numberOfTimes; i += 1) {
             numbers[i] = Guer.random(0, 36);
         }

         console.log("Spinning the wheel numbers: " + numbers);
         return numbers;
     }

    /**
     * Returns color depending on number on
     * the roulette table
     */
    function getColor (n) {
        var colors = ["green", "black", "red"];
        var rouletteTable = [0,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2];

        return colors[rouletteTable[n]];
    }

    /**
     * Draw roulette table
     */
    function drawRouletteTable () {
        var i;
        var e;

        for (i = 0; i <= 36; i += 1) {
            e = document.createElement("div");
            e.innerHTML = i;
            e.className = "number " + getColor(i);
            e.id = "n" + i;
            table.appendChild(e);
        }
    }

    /**
     * Resets all marked numbers on the table
     */
    function clearRouletteTable() {
        var i;
        var e;

        for (i = 0; i <= 36; i += 1) {
            e = document.getElementById("n" + i);
            e.className = "number " + getColor(i);
        }
    }

    // Prints text in the log div tag
    var print = function (element, text) {
        var el = document.createElement("p");
        el.innerHTML = text;

        return element.insertBefore(el, element.firstChild);
    };

    // Event listener for the roll button.
    button.addEventListener("click", function () {
        if (!isSpinningTheWheelOngoing) {
            isSpinningTheWheelOngoing = true;

            var current;
            var results;
            var showSpinn;
            var pos = 0;
            var spinns = 10;


            // Prints out text if the betting value was not greater than the bankroll.
            if (parseInt(bet.value, 10) <= parseInt(bankroll.value, 10)) {
                current = print(log, "&ndash; Bet is " + bet.value + " spinning the wheel&hellip;");
            }



            // Show the random numbers on the roulette table. The function is called
            // by it self with 500 ms delay.
            showSpinn = function () {
                var number;
                var bettingValue;
                var actualValue;

                number = document.getElementById("n" + results[pos]);
                number.className += " selected";

                // Erase old indication on the roulette table.
                if (pos > 0) {
                    number = document.getElementById("n" + (results[pos - 1]));
                    number.className = "number " + getColor(results[pos - 1]);
                }

                pos += 1;
                if (pos < spinns) {
                    window.setTimeout(showSpinn, 500);
                } else {
                    bettingValue = color.value;
                    actualValue = getColor(results[pos - 1]);
                    current.innerHTML += " Stopped at: " + results[pos - 1] + " " + actualValue;

                    if (bettingValue.localeCompare(actualValue) === 0) {
                        bankroll.value = parseInt(bankroll.value, 10) + parseInt(bet.value, 10);
                        current.innerHTML += ". You won " + (parseInt(bet.value, 10)) + ".";
                    } else {
                        bankroll.value = parseInt(bankroll.value, 10) - parseInt(bet.value, 10);
                        current.innerHTML += ". You lost " + (parseInt(bet.value, 10)) + ".";
                    }

                    isSpinningTheWheelOngoing = false;
                }
            };

            clearRouletteTable();
            if (parseInt(bet.value, 10) <= parseInt(bankroll.value, 10)) {
                results = spinnTheWheel(10);
                window.setTimeout(showSpinn, 500);
            } else {
                print(log, "&ndash; Betting value to high. Your bankroll is only " + bankroll.value + " and you will bet " + bet.value + " &hellip;");
                isSpinningTheWheelOngoing = false;
            }
        }
    }, false);

    drawRouletteTable();
    print(log, "Welcome to the wheels of fortune!");

    console.log("Gambling roulette is ready");
});
