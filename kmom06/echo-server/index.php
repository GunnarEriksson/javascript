<?php
include(__DIR__ . "/../incl/config.php");
$title = "Echo-Server | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article>
    <h1>Client för webbsocket echo-server</h1>
    <div id='flash'>
        <form id='client-form'>
            <p>
                <label>Adress: </label><br/><input id='url' value='ws://nodejs1.student.bth.se:8059'/>
                <input id='connect' type='button' value='Anslut'/>
                <input id='disconnect' type='button' value='Stäng ned'/>
            </p>
            <p>
                <label>Meddelande: </label><br/><input id='message'/>
                <input id='send' type='button' value='Skicka'/>
            </p>
            <label>Logg: </label><br/><div id='output' class='output'></div>
        </form>
    </div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
