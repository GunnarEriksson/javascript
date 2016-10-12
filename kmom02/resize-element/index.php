<?php
include(__DIR__ . "/../incl/config.php");
$title = "Ändra storlek | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Ändra storleken på ett element</h1>
    <div id='flash'>
    <form id="size">
        <p>
            <label>Width: <input id='width' type='number' /></label>
            <label>Height: <input id='height' type='number' /></label>
            <input id='resize' type='button' value='Resize' />
        </p>
    </form>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
