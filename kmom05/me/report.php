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


    <h2>Kmom02: Programmera med JavaScript</h2>
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


    <h2>Kmom03: Grunderna i jQuery</h2>
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

    <h2>Kmom04: AJAX och JSON med jQuery</h2>
    <h4>Vad tycker du om Ajax, hur känns det att jobba med?</h4>
    <p>Det kändes riktigt bra. Jag blev imponerad hur smidigt det gick att skicka data utan att
    behöva ladda om sidan. Inga besvärliga kommandon, utan det gick snabbt att förstå hur man
    skulle skicka och ta emot data.</p>

    <p>Det kunde dock vara lite klurigt om man gjorde fel. I webbshoppen var det många moment
    som skulle arbeta tillsammans. Jag fick inte formulärets check-funktion att validera som
    den skulle, utan den sa att alla fält var tomma. Efter någon timme insåg jag att jag hade
    gjort ett litet fel när jag skickade formuläret med Ajax. Jag hade råkat skriva id som en
    klass när formuläret skulle serialiseras då det skulle skickas med hjälp av Ajax. Då jag
    var lite osäker om jag hade gjort rätt när jag inkluderade Cform, så började jag leta på
    fel ställe. Jag hittade felet när jag insåg att det inte skickades något i meddelandet
    till checkout.php.</p>

    <h4>Vilka är dina erfarenheter av Ajax inför detta kursmoment?</h4>
    <p>Inga alls. Jag har bara hört talas om Ajax som hastigast så jag visste att man använde
    det till att skicka data, men inte hur.</p>

    <h4>Berätta om din webbshop på din me-sida, hur gjorde du?</h4>
    <p>Jag började direkt med att lösa uppgiften med hjälp av Ajax och Cform.</p>

    <p>Den första biten gick snabbast. I index.php skapade jag möjligheten att köpa tre stycken
    böcker genom att gå igenom en array med bokinformation. I index.php finns också kassan där
    man visar vilka böcker man har valt att köpa. För att välja en bok, kopplade jag ett klick-händelse
    till varje knapp som gör att man skickar iväg ett id med hjälp av Ajax till filen shop.php
    som sparar den i sessionen. Filen shop.php returnerar, med hjälp av Ajax, totala antalet
    böcker, totalsumman och en lista med böcker som finns sparade i sessionen.</p>

    <p>Betalningsdelen tyckte jag var lite knepigare. Mycket beroende på att jag var lite osäker
    hur jag skulle använda formuläret Cform. Det var lite pyssel att få ihop det, men efter tittat
    lite på tidigare studenter så fick jag det att fungera. Jag låter funktionen preventDefault()
    hindra default händelsen och låter istället Ajax ta hand om det hela. Ajax skickar data till
    checkout.php som kontrollerar om formuläret var rätt ifyllt och skickar svaret till paydesk.php
    som visar resultatet. Jag har inte lagt in några speciella kontroller mer än de som man kan göra
    i formuläret, som t ex att fälten måste fyllas i och vissa fält måste bestå av siffror.</p>

    <h4>Lyckades du göra extra-uppgiften och paketera din kod?</h4>
    <p>Nej, tiden tog slut så jag väljer att börja på nästa moment istället.</p>

    <h4>Allmänt om kursmomentet</h4>
    <p>Jag tyckte det var ett roligt och lärorikt moment som visar hur smidigt det går att skicka
    data utan att ladda om sidan.</p>

    <p>I det här momentet fick jag arbeta mycket med Firebug, vilket fungerade bra. Jag upptäckte
    att det gick fint att arbeta med funktionen var_dump i PHP-filerna. Vad funktionen skrev ut
    hittade jag sedan i Ajax-anropet under HTML.</p>

    <h2>Kmom05: HTML5 och Canvas</h2>
    <h4>Vilka möjligheter ser du med HTML5 Canvas?</h4>
    <p>Det känns som canvas ger stora möjligheter när man vill hålla på med animeringar som t ex
    spel. Det som överraskade mig positivt, var hur smidigt det gick när jag skapade ett enkelt
    spel. Naturligtvis så ökar säkert svårighetsgraden om man vill göra mer avancerade saker,
    men canvas känns om en bra bas att utgå ifrån om man vill göra animeringar. Det andra som
    överraskade mig positivt var hur mjukt figurerna flyttade sig. De få gånger jag har testat
    i andra språk, så är det väldigt lätt att spelet hackar. Kanske hade jag behövt en gameloop
    även där.</p>

    <h4>Hur avancerat gjorde du din spelfysik (om du överhuvudtaget har någon i ditt spel)?</h4>
    <p>Mitt spel är en variant av arkadspelet Space Invaders, där det inte behövs någon fysik.
    Anledningen att jag ville göra det spelet, var att det var det första arkadspelet jag spelade
    när jag var barn. Jag ville också göra något helt annorlunda än exemplet, för att undvika att
    det blev en kopia med några utökningar. Nu fick jag jobba mer med grunden, vilket jag lärde
    mig mycket av.</p>

    <h4>Beskriv och berätta om ditt spel. Förklara hur du använder objekt och prototyper.</h4>
    <p>Spelet är en variant av det gamla arkadspelet Space Invaders, där det gäller att hindra
    utomjordingarna att nå jorden. Spelaren manöverar en kanon med höger och vänster piltangent och
    skjuter med mellanslag.</p>

    <p>Det gäller att skjuta ned alla utomjordingar innan de når jorden, samt att undvika
    utomjordingarnas missiler i form av röda laserstrålar.</p>

    <p>Utomjordingarna skjuter slumpvisa missiler om det inte finns någon utomjording nedanför.
    <p>Skjuthastigheten i kanonen är begränsad till att bara kunna ha en missil, i form av en grön
    laserstråle, i rymden samtidigt. Den förra missilen måste försvinna innan man kan skjuta en ny.</p>

    <p>Jag har sju stycken objekt och prototyper. Det är Cannon, Missiles, Missile, Aliens, Alien,
    Beams, Beam.</p>

    <p>Missiles, Aliens och Beams är speciella då de genom en array hanterar sina respektive objekt.
    Jag tyckte det var smidigt att arbeta med arrayer för att hantera flera objekt. När man skapade
    ett objekt, t ex en stråle (Beam), så lade Beams in den i en array. Skulle stålen (Beam) tas bort,
    tog jag bort den i arrayen med hjälp av splice-funktionen. På så sätt var det enkelt att hantera
    flera objekt samtidigt. Jag behöll mönstret även för missiler, även om det bara kan finnas en
    missil i rymden åt gången, då det blev smidigt att lägga till respektive ta bort en missil.</p>

    <h4>Gjorde du något på extrauppgiften?</h4>
    <p>Ja, det gjorde jag. När jag hade satt mig in hur man gör, så var det inte särskilt svårt. I
    en redovisning av en tidigare kursare, så hittade jag sidan
    <a href='http://www.freesound.org/'>freesound</a>. Det är en
    sida med gratis ljud som man kan använda. Man behövde dock registrera sig för att kunna ladda ned
    ljudfiler.</p>

    <p>De ljud jag lade till var när utomjordingarna skjuter missiler, när utomjordingar träffas av
    missil från kanon, när kanon skjuter en missil och när kanonen träffas av en missil från
    utomjordingarna.</p>

    <p>Att lägga till ljud gav spelet en helt annan dimension än när det inte fanns något ljud.</p>

    <h4>Allmänt om kursmomentet</h4>
    <p>Det här var ett roligt kursmoment när man väl kom igång. Jag kunde nog spenderat mer tid om inte
    man var tvungen att hålla sig till studieplanen. Man kan lägga till hur mycket som helst för att
    förfina spelet.</p>

    <p>Jag tyckte också att momentet kan en bra förståelse för hur man kan skapa objekt och skapa
    prototyper till objekten. Gameloop var också bra att lära sig hur den fungerar för att kunna skapa
    rörelser utan att det hackar, som det gjorde i ett tidigare moment Boulder Dash när man flyttade sin
    figur på ett spelplan.</p>

    <h2>Kmom06: HTML5 och Websockets</h2>
    <p>Är ännu inte redovisad.</p>

    <h2>Kmom07 - 10: Projekt</h2>
    <p>Är ännu inte redovisad.</p>

    <?php include(__DIR__ . "/../incl/byline.php"); ?>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
