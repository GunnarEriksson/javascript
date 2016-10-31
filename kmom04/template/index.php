<?php
include(__DIR__ . "/../incl/config.php");
$title = "Mall | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Mall</h1>
    <div id='flash'>
        <p id='text' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
