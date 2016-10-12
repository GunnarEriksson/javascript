/**
 * Literal and type of
 */
 $(document).ready(function () {
     "use strict";
     var element;
     var e1;
     var i;
     var str;
     var rows = "";
     var literals = [
         42, 4.2, "hello world", 'hello world', true, false, null, undefined,
         /javascript/, {x: 1, y: 2}, ["array-item", "array-item"], function () {}
     ];

     console.log("Literals and their types function starts.");

     element = document.getElementById("element");
     element.innerHTML = "<b>Literals and identifiers</b>";
     element.className = "black";

     e1 = document.createElement("ul");

     for (i = 0; i < literals.length; i += 1) {
         str = typeof literals[i] === "string" ? '"' + literals[i] + '"' : literals[i];
         rows += "<li>" + str + " &mdash; " + typeof(literals[i]) + "</li>";
     }

     e1.innerHTML = rows;
     element.parentElement.appendChild(e1);

   console.log("Literals and their types are ready.");

 });
