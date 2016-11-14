<?php
include(__DIR__ . "/../incl/config.php");
$title = "Lekplats | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>
<article id="playground">
    <h1>Lekplats</h1>
    <h2>Testprogram i JavaScript</h2>
    <div id="kmom01">
        <h3>Kmom01</h3>
        <ul>
            <li><a href="../hello-world/hello.php?playground">Hello World i JavaScript</a></li>
            <li><a href="../template/index.php?playground">Mall</a></li>
            <li><a href="../resize-element/index.php?playground">Ändra storleken på ett element</a></li>
            <li><a href="../move-around-sprite/index.php?playground">Flytta en gubbe på skärmen</a></li>
            <li><a href="../transform-with-transitions/index.php?playground">CSS3 Transitions och 2D Transforms</a></li>
            <li><a href="../salto/index.php?playground">Stående dubbel saltomortal framåt</a></li>
        </ul>
    </div>
    <div id="kmom02">
        <h3>Kmom02</h3>
        <ul>
            <li><a href="../literals-type-typeof/index.php?playground">Literaler och typer</a></li>
            <li><a href="../datatypes-values-using-numbers/index.php?playground">Nummer, datatyper och värden</a></li>
            <li><a href="../datatypes-and-values-using-strings/index.php?playground">Hantering av strängar</a></li>
            <li><a href="../throwing-dice-using-functions/index.php?playground">Tärning</a></li>
            <li><a href="../pushing-the-ball/index.php?playground">Flytta bollen</a></li>
            <li><a href="../boulder-dash-with-arrays/index.php?playground">Boulder Dash</a></li>
            <li><a href="../gambling-roulette-using-functions/index.php?playground">Roulette</a></li>
        </ul>
    </div>

</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
