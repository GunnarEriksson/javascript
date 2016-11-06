<?php
include(__DIR__ . "/../incl/config.php");
$title = "Redovisning | JavaScript";
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
    <p>Jag har lång erfarenhet att koda Java, så får mig känns JavaScript som ett
    ”vilt” språk. Fördelen är att det är kraftfullt, men som de flesta skriptspråk så
    är det lätt att skriva svårläst kod som är svår att följa. I JavaScript kan det
    mesta vara ett objekt, vilket t ex gör att man kan spara en hel funktion i en variabel.
    Det blir med andra ord svårare att skilja en variabel som innehåller ett värde
    från en variabel som innehåller en funktion vid första anblicken.</p>

    <p>I Java använder man klasser för att bestämma ett objekts egenskaper. Råkar jag
    skriva fel när jag tilldelar en variabel som tillhör ett objekt i Java, så får jag
    ett fel när jag kompilerar koden. I JavaScript så skapar jag istället en ny variabel,
    vilket gör det svårare när man felsöker.</p>

    <p>En annan sak är att det mesta är globalt, vilket gör det lätt att skriva över
    variabler av misstag. För att gömma synligheten för olika typer av data, får man
    ta till lite tricks i JavaScript. Koden blir inte så enkel som den kunde bli.</p>

    <p>För min egen del känns det som stegen mellan Java och PHP var betydligt kortare
    än steget mellan Java och JavaScript kommer att vara. Även om det kommer ta lite
    längre tid, så känner jag att det kommer gå bra att lära sig JavaScript. Det
    gäller bara att ha ett annat tänk än i Java.</p>

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
    <h4>Vilka funktioner har du lagt till i din variant av mos.js?</h4>
    <p>Jag lade till funktionen som genererar slumptal mellan min och max.
    Anledningen är att den redan har återkommit två gånger. Att generera slumptal
    är ganska vanligt i spel, så den funktionen kan vara bra att ha i framtiden.
    Jag har redan en offset-funktion sedan tidigare. Jag lade in den funktionen
    från mos.js mest för att få testa att ha en allmän js-funktion och få den
    integrerad med resten av koden.</p>

    <h4>Gjorde du något extra arbete på spelplanen med Boulder Dash, eller gjorde
    du kanske en egen spelvariant?</h4>
    <p>Det tog ganska lång tid att få färdigt spelet, även om jag tittade en hel
    del på Mos kod. Jag lade extra tid att förstå hur det fungerade vilket för mig
    innebar en hel del konsollutskrifter under utvecklingsarbetet.</p>

    <p>Jag gjorde dock tre extra saker. Den första saken var att ändra utseendet
    av spelplanen. När jag arbetade med uppgiften, kom jag att tänka på den tiden
    när Pacman var populärt. Ett av de första spelen jag själv spelade. Banans
    utseende fick därför påminna om spelplanen för Pacman. Tiden räckte dock inte
    till för att hitta på något extra som figuren kan göra, utan jag nöjde mig med
    att den bara kan gå omkring på spelplanen.</p>

    <p>Den andra saken, var med hjälp av JavaScript, förhindra att man kan skrolla
    sidan med hjälp av piltangenterna. Jag tyckte det var lite irriterande att hela
    sidan rörde sig, när man vandrade omkring med sin figur, om inte fönstret var
    tillräckligt stort för att visa hela sidan.</p>

    <p>Den tredje saken, var att förhindra att figuren flyter omkring om man ändrar
    storleken på sidan. Tidigare kunde figuren hamna både utanför spelplanen eller
    mitt i en mur, om man ändrade storleken på sidan. Jag funderade först att lösa
    det med JavaScript, men jag tyckte det var smidigare att bara lägga till en extra
    div runt spelplanen. Div-taggen fick också positionen absolute precis som figuren,
    vilket gör att den stannar kvar på sin plats om man ändrar sidans storlek.</p>

    <h4>Gjorde du något extra på Roulettespelet?</h4>
    <p>Nej, det räckte tiden inte till. Jag lade den mesta tiden på att själv skriva
    koden för spelet, även om jag tog CSS-reglerna rakt av från Mos. Jag snyggade
    sedan till koden med hjälp av Mos varianter, där jag tyckte jag själv hade gjort
    det onödigt krångligt.</p>

    <h4>Allmänt om kursmomentet.</h4>
    <p>Det här kursmomentet var en rejäl utmaning. De första övningarna, fram till
    bollen, gick bra. Inga större bekymmer utan endast lite mindre saker.</p>

    <P>De tre sista övningar kändes som överkurs. Att med nästan ingen vägledning
    alls, börja hantera grafik, kändes lite övermäktigt. För min egen del blev det
    lite väl mycket tittande i Mos kod. Det jag tyckte var svårt var att komma på
    en struktur. Här hade det underlättat med en liten punktlista som man kunde gå
    igenom. Gärna med lite tips på funktioner under vägen. Ett annat moment som
    jag tyckte var svårt, var samspelet mellan JavaScript och CSS.</p>

    <p>De tre sista övningarna var dock mycket bra. Man lärde sig mycket på vägen när
    man arbetade med koden. Övningen med bollen, fick jag ta mycket hjälp av Mos kod,
    men de två sista övningarna gick bättre och bättre. Det känns som jag har fått
    tre bra exempel på kod, som jag kan använda som bas, när jag skapar min egen
    grafik och spel i framtiden.</p>


    <h2>Kmom03</h2>
    <h4>Vad tycker du om jQuery, hur känns det?</h4>
    <p>Jag har arbetat lite med jQuery innan så det kändes bra. Det är ett kraftfullt
    bibliotek med många bra funktioner som underlättar kodningen. Det är många saker
    som man har kämpat för att få till i PHP, som i jQuery går betydligt lättare.</p>

    <p>Fast jag känner att jag behöver koda mycket för att kunna bli bra i språket.
    Kodstrukturen är kanske inte så svår att förstå sig på, utan mina problem är
    som med JavaScript att få till funktionerna tillsammans med DOM. När man sedan
    behöver blanda in CSS, kan det bli väl knepigt.</p>

    <h4>Vilka är dina erfarenheter av jQuery inför detta kursmoment?</h4>
    <p>Väldigt lite. Jag har gjort några funktioner i samband med att jag har gjort
    några hemsidor. Jag hittade några bra filmer på Youtube, där jag senare modifierade
    koden för att passa till det jag skulle använda den till.</p>

    <h4>Berätta om din plugin</h4>
    <p>Då tiden började rinna i väg, gjorde jag det enkelt för mig. Jag tog den lightbox
    jag gjorde i övningen och gjorde lite ändringar för att jag lättare skulle göra om
    den till en plugin. Jag tyckte det gick smidigt att få den att fungera. Det var
    bara skriva koden för plugin och sedan flytta över CSS-koden i skriptfilen. Lite mer
    avancerade plugins, får vänta tills man har blivit bättre att koda jQuery.</p>

    <h4>Allmänt om kursmomentet</h4>
    <p>Det var ett roligt moment med övningarna nio små exempel i jQuery. Jag tyckte de
    första fem gick rätt hyfsat, men de tre sista var betydligt svårare. Det är lätt att
    man trasslar in sig som jag gjorde i exemplet med slideshow. Här fick jag problem när
    jag skulle lägga till funktionen att man kunde klicka för att nästa bild skulle dyka
    upp. Här fick jag titta på Mos exempel och göra om koden så den liknade mer Mos kod.
    Jag passade då på att göra lite ändringar, så bildspelet börjar med den första bilden
    istället för den sista. Inte för det har någon betydelse då alla bilder rullar, men
    det var mest för att jag skulle få arbeta med z-index. Precis som i övningen med
    JavaScript, känns det som jag har fått nio exempel som jag kan ha nytta av i framtiden.</p>

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
