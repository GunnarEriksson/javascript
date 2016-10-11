<?php
include(__DIR__ . "/../incl/config.php");
$title = "Flytta gubbe | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="move-around-sprite">
    <h1>Flytta en gubbe på skärmen</h1>
    <div id='flash'>
        <p>Hej, jag är en baddie, mitt namn är Guer the Geek. Klicka för att flytta
            mig eller använd piltangenterna, mellanslag, h, b, f, r. Ha skoj!
        </p>
        <div id='b1' class='baddie down'></div>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
