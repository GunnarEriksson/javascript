<?php
include(__DIR__ . "/../incl/config.php");
$title = "Spel | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="game">
    <h1>Space Invaders</h1>
    <div id='flash'>
        <canvas id="canvas1" width="900" height="500"></canvas>
        <p>Hindra utomjordingarna från att ta över jorden genom att skjuta ned
        alla utomjordingarna innan de når jorden eller träffar din kanon.</p>
        <p>Du styr kanonen med piltangenterna och skjuter med mellanslag. Du kan
        endast ha ett laserskott i rymden samtidigt. När det förra laserskottet
        har försvunnit, kan du skjuta ett nytt.</p>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
