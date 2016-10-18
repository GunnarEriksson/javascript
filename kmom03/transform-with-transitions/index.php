<?php
include(__DIR__ . "/../incl/config.php");
$title = "Transform | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="transform-with-transitions">
    <h1>CSS3 Transitions och 2D Transforms</h1>
    <div id='flash'>
        <p>
            Klicka på Guer the Geek för att börja använda CSS3 2D transforms (ändra form)
            och CSS3 transitions (animera).
        </p>
        <table>
            <tr>
                <td>Rotate x 0.5:</td>
                <td>Rotate x 1.5:</td>
                <td>Half size:</td>
                <td>Double size:</td>
                <td>Skew horisontal:</td>
                <td>Skew vertical:</td>
                <td>Move:</td>
                <td>Move & Rotate:</td>
            </tr>
            <tr>

                <td><div id='b1' class='baddie'></div></td>
                <td><div id='b2' class='baddie'></div></td>
                <td><div id='b3' class='baddie'></div></td>
                <td><div id='b4' class='baddie'></div></td>
                <td><div id='b5' class='baddie'></div></td>
                <td><div id='b6' class='baddie'></div></td>
                <td><div id='b7' class='baddie'></div></td>
                <td><div id='b8' class='baddie'></div></td>
            </tr>
        </table>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
