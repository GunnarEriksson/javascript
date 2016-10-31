<?php
include(__DIR__ . "/../incl/config.php");
$title = "Tärning | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Tärning</h1>
    <div id='flash'>
        <p id='element' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
