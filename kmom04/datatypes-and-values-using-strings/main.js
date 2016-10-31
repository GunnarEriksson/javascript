/**
 * Datatypes and values using strings
 */
$(document).ready(function () {
    "use strict";
    var element;
    var strings = "";
    var str = "Copyright \u00A9 by XXX";

    var print = function(element, str) {
        element.innerHTML += str + " (" + str.length + ")<br />";
    };

    var printStringConvert = function(element, str) {
        element.innerHTML += str + " (typeof=" + typeof(str) + ")<br/>";
    };

    console.log("Data types and values using strings starts");

    element = document.getElementById("element");
    element.innerHTML = "<b>Strings - Datatypes and values</b>";
    element.className = "black";

    strings = document.createElement("p");

    print(strings, str);

    str += " Mumintrollet ";
    print(strings, str);

    str += 1942;
    print(strings, str);

    str += ".";
    print(strings, str);

    str = str.substr(0, 15) + str.substring(19);
    print(strings, str);

    str = "19" + "42";
    printStringConvert(strings, str);

    str = "19" + 42;
    printStringConvert(strings, str);

    str = 19 + 42;
    printStringConvert(strings, str);

    str = 19 + "42";
    printStringConvert(strings, str);

    element.parentElement.appendChild(strings);

    console.log("Data types and values using strings starts");

});
