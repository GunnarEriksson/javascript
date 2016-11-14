<?php
include(__DIR__ . "/../incl/config.php");
$title = "Flytta bollen | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Flytta bollen</h1>
    <div id='flash'>
        <p id='text' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>
        <div id='ball'></div>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
