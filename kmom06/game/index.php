<?php
include(__DIR__ . "/../incl/config.php");
$title = "Spel | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="game">
    <h1>Flytta raketen på månen</h1>
    <div id='flash'>
        <canvas id="canvas1" width="900" height="500"></canvas>
        <p>Du ska flytta raketen från den vänstra plattformen till den högra. Du måste
        hålla dig inom spelplanen och undvika klipporna. För att lyckas att landa
        raketen, får inte raketen luta, hålla dig inom plattformen och hastigheten
        får vara högst 10 km/h.</p>
        <p>Raketen sköter du med piltangenterna. Vänster och höger piltangent lutar
        raketen och pil upp avfyrar raketmotorn. Raketens riktning påverkas av raketens
        lutning och fart samtidigt det finns en graviation som vill dra ned raketen.
        En hastighetsmätare uppe till vänster visar raketens hastighet.</p>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
