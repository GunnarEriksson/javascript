/**
 * Datatypes and values using numbers.
 */
$(document).ready(function () {
    "use strict";
    var element;
    var constants;
    var table;
    var rows = "";
    var i;
    var numbers = [42, 4.2, 1.21e4, 1.12e-2, 0xff00ff];

    console.log("Data types and values using number starts");

    element = document.getElementById("element");
    element.innerHTML = "<b>Numbers - Datatypes and values</b>";
    element.className = "black";

    constants = document.createElement("p");
    constants.innerHTML = "Eulers constant E = " + Math.E + "<br />";
    constants.innerHTML += "PI = " + Math.PI + "<br />";
    constants.innerHTML += "Largest value possible = " + Number.MAX_VALUE + "<br />";
    constants.innerHTML += "Positive infinity = " + Number.POSITIVE_INFINITY;

    element.parentElement.appendChild(constants);

    // Table header
    table = document.createElement("table");
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<th>" + numbers[i] + "</th>";
    }
    rows = "<tr><th>Function</th>" + rows + "</tr>";

    // Exponential form
    rows += "<tr><td>Exponentialform</td>";
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<td>" + numbers[i].toExponential() + "</td>";
    }
    rows += "</tr>";

    // Fixed form, three decimals
    rows += "<tr><td>Fixed form, three decimals</td>";
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<td>" + numbers[i].toFixed(3) + "</td>";
    }
    rows += "</tr>";

    // Round to closes integer
    rows += "<tr><td>Round to closes integer</td>";
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<td>" + Math.round(numbers[i]) + "</td>";
    }
    rows += "</tr>";

    // Square root
    rows += "<tr><td>Square root</td>";
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<td>" + Math.sqrt(numbers[i]).toPrecision(5) + "</td>";
    }
    rows += "</tr>";

    // Value for sinus
    rows += "<tr><td>Value for sinus</td>";
    for (i = 0; i < numbers.length; i += 1) {
        rows += "<td>" + Math.sin(numbers[i]).toPrecision(5) + "</td>";
    }
    rows += "</tr>";

    table.innerHTML = rows;
    element.parentElement.appendChild(table);

    console.log("Data types and values using number is ready");
});
