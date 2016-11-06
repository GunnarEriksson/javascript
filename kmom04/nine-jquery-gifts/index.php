<?php
include(__DIR__ . "/../incl/config.php");
$title = "Nio små exempel i jQuery | JavaScript";
include(__DIR__ . "/../incl/header.php");
?>

<article id="nine-jquery-gifts">
    <div class="wrapper">
    <h1>Nio små exempel med jQuery</h1>

    <div id='box1' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>1.</h1>
        <img class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' />
        <h1 class='example'>1. Att välja ut element, hantera event och modifiera element</h1>
        <p class="toggleColorFont">Om man klickar på den här texten kan man växla mellan grå och svart färg på texten.</p>
        <p class="toggleUppercase">Den här texten kan man växla mellan små och stora bokstäver om man klickar på texten.</p>
        <p class="toggleDark">Klickar du på den här texten, kommer färgen på texten och bakgrunden skifta från mörk text mot
        ljus bakgrund till ljus text mot mörk bakgrund.</p>
        <p>Allting sköts av selektorer och händelsehanterare.</p>
    </div>

    <div id='box2' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>2.</h1>
        <img class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' />
        <h1 class='example'>2. Event propagering och att stoppa den</h1>
        <p>Här läggs en eventhanterare på hela lådan och ytterligare en på bilden.
        När man klickar på hela lådan så ändras bakgrundsfärgen. När man klickar på bilden
        så ändras dess storlek, men, dessutom anropas den eventhanterare som finns för
        bilden. Det innebär alltså att om man klickar på bilden så är det ett event
        som först påverkar bilden och därefter lådan. Man kan säga att eventet bubblar
        upp i DOM trädet.</p>

        <p>För att hindra ett sådant beteende kan man använda metoden event.stopPropagation().
        Det är alltså möjligt att lägga in ett anrop till den funktionen i eventhanteraren
        för bilden. Gör man det så påverkas inte själva lådan längre.</p>
    </div>

    <div id='box3' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>3.</h1>
        <img class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' />
        <h1 class='example'>3. Lägga till och ta bort element</h1>
        <p>Med jQuery kan vi skapa nya element och lägga till dem i dokumentet, vi
        kan även ta bort dem. Principen är enkel, man skapar ett nytt element och väljer
        var man vill placera det.</p>
        <p>Välj en färg med hjälp av en färgkod och lägg till den till paletten. För att
        ta bort färgen från paletten, klicka på färgen.</p>
        <p>
            <form>
                <label>Färgkod i hex (#eee or #5c5c5c): <input id='colorBox' type='text' name='color' /></label>
                <input id='addColor' type='button' value='Lägg till färg' />
            </form>
        </p>
        <p id='palette'>Färgpalett:</p>
    </div>

    <div id='box4' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>4.</h1>
        <img class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' width='200px' height='202px' />
        <h1 class='example'>4. Läsa och ändra storleken på ett element</h1>
        <p>Att räkna ut bredd och höjd på ett element kan vara lite klurigt, man måste
        tänka på både marginaler, ramar, padding och själva innehållet.</p>
        <p>Dessa knappar kan ändra storleken på bilden när du trycker på någon av dom.
        Det finns också en knapp som visar bildens nuvarande storlek.</p>
        <p>
            <form>
                <input id='box4_dimensions' type='button' value='Nuvarande storlek b x h' /> <span id='box4_current'></span>
                <br/>
                <label>Width: </label>
                <input id='box4_width_incr' type='button' value='+' />
                <input id='box4_width_decr' type='button' value='-' />
                <br/>
                <label>Height: </label>
                <input id='box4_height_incr' type='button' value='+' />
                <input id='box4_height_decr' type='button' value='-' />
            </form>
        </p>
    </div>

    <div id='box5' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>5.</h1>
        <img id='box5-img51' class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' width='200px' height='202px' />
        <img id='box5-img52' class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' width='200px' height='202px' />
        <h1 class= 'example'>5. Grundläggande animeringar</h1>
        <p>I jQuery’s core finns det ett par enklare animeringar inbyggda. Här är två
        exempel som använder funktionerna slideToggle() och fadeToggle().</p>
        <p>
            <a id='fade-toggle' href=#>Tona ut eller tona in bilden</a>
            <br/>
            <a id='slide-toggle' href=#>Skifta ut eller skifta in bilden</a>
        </p>
    </div>

    <div id='box6' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>6.</h1>
        <img class= 'example lightbox' src='../img/gift/winter.jpg?w=200' alt='Vinter på Söderåsen' width='200px' height='202px' />
        <h1 class= 'example'>6. En lightbox för att visa bilder</h1>
        <p>Ibland vill man visa upp en större version av en bild när någon
        klickar på den. Man vill visa upp den framför nuvarande webbsida utan
        att ladda om sidan. Detta brukar kallas lightbox</p>
        <p>Klicka på bilden för att se bilden i större format</p>
    </div>

    <div id='box7' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>7.</h1>
        <h1 class= 'example'>7. Ett galleri av bilder</h1>
        <p>En almanacka i form av ett galleri.</p>
        <div class='gallery'>
            <div class='gallery-current'><img/></div>
            <div class='gallery-all'>
                <img src1='../img/gift/gallery/january.jpg'/>
                <img src1='../img/gift/gallery/february.jpg'/>
                <img src1='../img/gift/gallery/march.jpg'/>
                <img src1='../img/gift/gallery/april.jpg'/>
                <img src1='../img/gift/gallery/may.jpg'/>
                <img src1='../img/gift/gallery/june.jpg'/>
                <img src1='../img/gift/gallery/july.jpg'/>
                <img src1='../img/gift/gallery/august.jpg'/>
                <img src1='../img/gift/gallery/september.jpg'/>
                <img src1='../img/gift/gallery/october.jpg'/>
                <img src1='../img/gift/gallery/november.jpg'/>
                <img src1='../img/gift/gallery/december.jpg'/>
            </div>
        </div>
        <p>Ett galleri kan se ut på många sätt, men vanligtvis är det en katalog av bilder
        där användaren enkelt kan bläddra bland miniatyrer och se bilderna i större format.</p>
    </div>

    <div id='box8' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>8.</h1>
        <h1 class= 'example'>8. En slideshow till framsidan</h1>
        <p>Många webbplatser vill visa ett antal bilder på förstasidan och byta
        dem med visst intervall, en form av “timad slideshow”. Ibland kan även
        användaren klicka på dessa för att välja bild</p>
        <div class="slideshow">
          <img src='../img/gift/slideshow/img1.jpg' alt='' />
          <img src='../img/gift/slideshow/img2.jpg' alt='' />
          <img src='../img/gift/slideshow/img3.jpg' alt='' />
          <img src='../img/gift/slideshow/img4.jpg' alt='' />
        </div>
    </div>

    <div id='box9' class='box'>
        <div class='minimize' title='Minimera fönstret'>x</div>
        <img class='gift' src='../img/gift/gift.png' alt='Presentlåda' />
        <h1 class='gift'>9.</h1>
        <img class= 'example' src='../img/gift/geek.png?w=200' alt='Guer the Geek' />
        <h1 class='example'>9. Gör en egen jQuery plugin</h1>
        <p>När man börjar skriva kod med jQuery så kommer man till en nivå där man
        vill återanvända sin kod. Då kan det vara dax att paketera koden i en jQuery
        plugin. Detta är ett sätt att bygga ut jQuery och ett bra sätt att organisera
        din egen kod. På detta sätt kan det bli lättare att återanvända moduler som
        du bygger.</p>
        <p>Klickar man på texten kommer den att byta färg.</p>
    </div>

</div>
</article>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
