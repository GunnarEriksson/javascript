<?php
include(__DIR__ . "/../incl/config.php");
$title = "Boulder Dash | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="boulder-dash">
    <h1>Boulder Dash</h1>
    <div id='flash'>
        <div id="game-wrapper">
            <div id='baddie1' class='baddie down'></div>
        </div>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
