<?php
include(__DIR__ . "/../incl/config.php");
$title = "jQuery plugin | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="jquery-plugin">
    <h1>jQuery Lightbox plugin</h1>
    <p>jQuery Lightbox är en plugin för visa små tumnaglar till bilder i ett större
    format.</p>

    <h2>Exempel</h2>
    <p>Klicka på någon av bilderna så visas bilden i sin fulla storlek. Klicka på den
    stora bilden för att stänga ned bilden och återgå till sidan.</p>
    <div class="wrapper-lightbox">
        <img class= 'lightbox' src='../img/plugin/spring.jpg?w=200' alt='Vår i Trollskogen' width='200px' height='200px' />
        <img class= 'lightbox' src='../img/plugin/summer.jpg?w=200' alt='Blåsig sensommar på Uttorp' width='200px' height='200px' />
        <img class= 'lightbox' src='../img/plugin/autumn.jpg?w=200' alt='Höst på Söderåsen' width='200px' height='200px' />
        <img class= 'lightbox' src='../img/plugin/winter.jpg?w=200' alt='Vinter på Söderåsen' width='200px' height='200px' />
    </div>

    <h2>Användning av Lightboxen</h2>
    <h3>Nerladdning av programvara</h3>
    <p>Lightboxen bygger på jQuery, så att få den att fungera måste jQuery finnas inkluderat på sidan. Man kan
    antingen ladda ned den senaste jQuery filen <a href="http://jquery.com/download/">här</a> och sedan länka till den
    plats man väljer att lägga filen på.  Välj gärna den minifierade (min.js) filen.</p>
    <p>Vill man inte ladda ner filen, kan man använda en extern fil. Lägg då till följande rad på er sida. Välj den
    senaste versionen. Den senaste versionen hittar man <a href="http://jquery.com/download/">här</a>.</p>
    <pre><code>&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"&gt;&lt;/script&gt;</code></pre>
    <p>Det är inte svårt att komma igång med jQuery Lightbox. <a href="../js/jquery-lightbox.js">Ladda hem filen</a> och länka
    till den i din HTML-kod:</p>
    <pre><code>&lt;script src='js/jquery-lightbox.js'&gt;&lt;/script&gt;</code></pre>

    <h3>Använda Lightbox</h3>
    <p>Bilderna som ska visas i lightboxen behöver inte ligga på en särskild plats i koden, utan man behöver
    bara lägga till klassen <code>lightbox</code> i bildelementet <code>img</code>.</p>
    <pre><code>&lt;img src='...' alt='' class='lightbox'&gt;</code></pre>

    <p>Man behöver inte göra något utöver vad som är beskrivit ovan för att använda klassen <code>lightbox</code>, men man
    har möjlighet att kalla på funktionen själv med <code>.lightbox()</code>.</p>

    <pre><code>$('img').click(function() {
    $(this).lightbox();
});</code></pre>
</article>

<?php $path=__DIR__; include(__DIR__ . "/footer-plugin.php"); ?>
