<?php
include(__DIR__ . "/../incl/config.php");
$title = "Hantering av strängar | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Hantering av strängar</h1>
    <div id='flash'>
        <p id='element' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
