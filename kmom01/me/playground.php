<?php
include(__DIR__ . "/../incl/config.php");
$title = "Lekplats | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>
<article id="playground">
    <h1>Lekplats</h1>
    <h2>Testprogram i JavaScript</h2>
    <ul>
        <li><a href="../hello-world/hello.php?playground">Hello World i JavaScript</a></li>
        <li><a href="../template/index.php?playground">Mall</a></li>
        <li><a href="../resize-element/index.php?playground">Ändra storleken på ett element</a></li>
        <li><a href="../move-around-sprite/index.php?playground">Flytta en gubbe på skärmen</a></li>
        <li><a href="../transform-with-transitions/index.php?playground">CSS3 Transitions och 2D Transforms</a></li>
        <li><a href="../salto/index.php?playground">Stående dubbel saltomortal framåt</a></li>
    </ul>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
