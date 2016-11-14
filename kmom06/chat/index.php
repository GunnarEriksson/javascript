<?php
include(__DIR__ . "/../incl/config.php");
$title = "Chatt | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Client för webbsocket chatt-server</h1>
    <div id='flash'>
        <form id='client-form'>
            <p>
                <label>Adress: </label><br/><input id='url' value='ws://localhost:1337'/>
                <input id='connect' type='button' value='Anslut'/>
                <input id='disconnect' type='button' value='Stäng ned'/>
            </p>

            <label>Logg: </label><br/><div id='output' class='output'></div>

            <div id='user-wrapper'>
                <label>Användare:</label><br/>
                <input id='user'/>
            </div>
            <div id='message-wrapper'>
                <label>Meddelande:</label><br/>
                <input id='message'/>
                <input id='send' type='button' value='Skicka'/>
            </div>
        </form>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
