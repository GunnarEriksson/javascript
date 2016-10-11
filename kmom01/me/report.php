<?php
include(__DIR__ . "/../incl/config.php");
$title = "Redovisning | Javascript";
include(__DIR__ . "/../incl/header.php");
?>
<article>
    <h1>Redovisning</h1>
    <h2>Kmom01: Kom igång med JavaScript</h2>
    <h4>Vilken utvecklingsmiljö använder du?</h4>
    <p>Jag fortsätter med de verktyg som jag har använt under de tidigare kurserna
    då dessa har fungerat bra. Operativsystemet är Windows 10 och jag använder
    XAMPP som lokal server och Atom som utvecklingsverktyg. För att se att allt
    ser bra ut, så använder jag Firefox och Chrome.</p>

    <p>Nya verktyg i verktygslådan är förutom Firebug numera JSLint och JSFiddle.</p>

    <p>För att hålla reda på min kod och förhindra att jag förlorar all kod
    om min dator går sönder, så använder jag GIT och GITHub, tillsammans med
    verktyget GitBash.</p>

    <h4>Hur väl känner du till JavaScript?</h4>
    <p>Inte särskilt mycket. Jag har kodat lite i JavaScript och använt det på
    någon webbsida, men jag känner mig helt klart som en nybörjare. Jag kan nog
    lösa en hel del uppgifter i JavaScript, men det går alldeles för långsamt.
    Det känns som man får leta upp allting.</p>

    <h4>Vilken uppfattning har du av JavaScript så här långt?</h4>
    <p>Jag har lång erfarenhet att koda Java, så får mig känns JavaScript som
    ett ”vilt” språk. Fördelen är att det är kraftfullt, men som de flesta
    skriptspråk så är det lätt att skriva svårläst kod som är svår att följa.
    Fast jag kan hålla med författaren att JavaScript är lite missförstått som
    språk. Mycket av det dåliga ryktet beror på gränssnittet mot DOM som inte
    är alldeles självklart.</p>

    <h4>Berätta vilka exempelprogram du gjorde och länka till dem.</h4>
    <p>Jag gjorde de exempelprogrammen som fanns i övningen utan att modifiera
    något i övningarna. Jag lade tiden på att gå igenom koden för att förstå hur
    man fick fram resultatet. Jag lekte visserligen med bitar av koden, men det
    var inget som jag sparade. Det jag gjorde extra var att min baddie gör en
    volt framåt.</p>

    <p>Länkarna till exempelprogrammen finner man under ”Lekplats” på me-sidan.
    Länken till min JSFiddle-sida finns i me-sidans footer (fiddles/guer).</p>

    <h4>Beskriv hur du gjort din baddie och vilka konster den kan.</h4>
    <p>Jag letade fram en ”geek” baddie på Open Clipart. Jag tyckte det passade
    med en nörd-baddie då nördar för mig är en person som ägnar mycket tid åt
    ett intresse, vilket jag gör när jag går den här kursen. Namnet på baddien
    fick helt enkelt bli Guer the Geek. Nu fanns dock baddien bara i versionen
    där den tittade till höger, så jag behövde uppdatera baddien för att passa
    i ett av exempelprogrammen där man flyttar omkring sin baddie. Detta var
    inte så svårt att göra i programmet Inkscape. Det var bara att duplicera
    baddien tre gånger och sedan flytta ögonen och reflexerna för att få en
    sprite med fyra baddies.</p>

    <p>Min baddie gör alla konsterna som fanns i exempelprogrammen och kan
    dessutom göra en volt framåt.</p>

    <h4>Gjorde du extrauppgiften och utbildade din baddie med något extra?</h4>
    <p>Ja, jag gjorde extrauppgiften så nu kan min baddie göra en volt framåt
    också. Det var lite knepigt att komma fram till resultatet. Jag insåg ganska
    tidigt att rörelserna lades ovanpå varandra, så två rörelser kan ta ut
    varandra. Jag lärde mig också att man inte heller kan lägga klasser efter
    varandra, för då är det endast den sista klassen som gäller.</p>

    <p>För att komma fram till resultatet så fick det bli rotate + translate +
    rotate, där jag fick experimentera med värdena för att få baddien att göra
    en volt framåt. Jag kunde dock inte se någon logik i värdena.</p>

    <h4>Allmänt om kursmomentet</h4>
    <p>Det var ett kul moment även om det var mycket att lära. Jag känner dock
    att man bara har skrapat på ytan och det gäller att nöta på om man ska få
    upp hastigheten. Svårast är nog att kunna arbeta mot DOM gränssnittet, det
    är nog det som kommer ta längst tid att få in.</p>


    <h2>Kmom02</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom03</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom04</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom05</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom06</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom07 - 10</h2>
    <p>Är ännu inte redovisad.</p>

    <?php include(__DIR__ . "/../incl/byline.php"); ?>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
