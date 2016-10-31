<?php
include(__DIR__ . "/../incl/config.php");
$title = "Lekplats | Javascript";
include(__DIR__ . "/../incl/header.php");
?>
<article id="playground">
    <h1>Lekplats</h1>
    <h2>Testprogram i Javascript</h2>
    <div id="kmom01">
        <h3>Kmom01</h3>
        <ul>
            <li><a href="../hello-world/hello.php">Hello World i Javascript</a></li>
            <li><a href="../template/index.php">Mall</a></li>
            <li><a href="../resize-element/index.php">Ändra storleken på ett element</a></li>
            <li><a href="../move-around-sprite/index.php">Flytta en gubbe på skärmen</a></li>
            <li><a href="../transform-with-transitions/index.php">CSS3 Transitions och 2D Transforms</a></li>
            <li><a href="../salto/index.php">Stående dubbel saltomortal framåt</a></li>
        </ul>
    </div>
    <div id="kmom02">
        <h3>Kmom02</h3>
        <ul>
            <li><a href="../literals-type-typeof/index.php">Literaler och typer</a></li>
            <li><a href="../datatypes-values-using-numbers/index.php">Nummer, datatyper och värden</a></li>
            <li><a href="../datatypes-and-values-using-strings/index.php">Hantering av strängar</a></li>
            <li><a href="../throwing-dice-using-functions/index.php">Tärning</a></li>
            <li><a href="../pushing-the-ball/index.php">Flytta bollen</a></li>
            <li><a href="../boulder-dash-with-arrays/index.php">Boulder Dash</a></li>
            <li><a href="../gambling-roulette-using-functions/index.php">Roulette</a></li>
        </ul>
    </div>

</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
