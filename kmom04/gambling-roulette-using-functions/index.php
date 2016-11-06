<?php
include(__DIR__ . "/../incl/config.php");
$title = "Roulette | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="roulette">
    <h1>Roulette</h1>
    <div id='flash'>
        <p id='text' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>

        <div id='table'></div>
        <div id="status-wrapper">
            <div id='status'>
                <form class="" action="index.html" method="post">
                    <label>Bankroll: <input id='bankroll' type='number' value='100' /></label>
                    <label>Bet: <input id='bet' type='number' value='10' /></label>
                    <label>Color:
                        <select id='color'>
                            <option value='green'>Green</option>
                            <option value='red'>Red</option>
                            <option value='black'>Black</option>
                        </select>
                    </label>
                    <input id='button' type='button' value='Roll' />
                </form>
            </div>
            <div id='log'></div>
        </div>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
