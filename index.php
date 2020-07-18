<!DOCTYPE html>
<html>

<head>
    <title>Maß-o-Meter</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css" />

<body>
    <script src="gallery.js"></script>
    <?php include 'message.php';?>
    <nav>
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">
                <!--<a href="#arbeiten">-->Arbeiten
                <!--</a>-->
            </button>
            <div class="dropdown-content">
                <a href="#damen">Damen</a>
                <a href="#herren">Herren</a>
            </div>
        </div>
        <a href="#farbeUndStil">Farbe & Stil</a>
        <a href="#kontakt">Kontakt</a>
        </ul>
    </nav>
    <div id="content">
        <div id="head">
            <!--<img id="logo" src="assets/svgs/logo.svg" />-->
            <img id="logo" src="assets/bilder/1.jpg" />
            <div id="branding">
                <img id="brand" src="assets/svgs/brand.svg" />

                <span>Maßanfertigungen</span>
                <span>Farb- und Stilberatung</span>
            </div>
        </div>
        <h2 id="home">Konkretisiert...</h2>
        <table>
            <tr>
                <th>Damen</th>
                <td>Damenmaßschneiderei hat viele Facetten! Vom eleganten Complet über die klassische Chaneljacke bis
                    zum abstrakten Bühnenoutfit sind der Fantasie keine Grenzen gesetzt.
                </td>
            </tr>
            <tr>
                <th>Herren</th>
                <td>Auch der Herr von heute ist im Begriff, die Vorzüge der Maßschneiderei erneut schätzen zu lernen. Er
                    legt Wert auf Individualität und hebt sich mit dem passenden Auftritt je nach Anlass positiv von der
                    Masse ab. Ein passgenauer Anzug kann ein jahrelanger Begleiter sein, mit dem man(n) viele positive
                    Erinnerungen verbindet.
                </td>
            </tr>
            <tr>
                <th>Farbe &amp; Stil</th>
                <td>Eine professionelle Farb- und Stilberatung ist die Grundlage für jede typgerechte Garderobe. Das
                    bedeutet keinesfalls, dass danach der komplette Inhalt des Kleiderschrankes durch neue Sachen
                    ersetzt werden muss! Vielmehr möchte ich mit Ihnen eine ausführliche Analyse Ihres Farbtyps, Ihrer
                    Stilrichtung sowie Ihrer individuellen Erwartungen an die Beratung durchführen. Anschließend bietet
                    sich ein "Kleiderschrank-Check" an, um die aus der Analyse gewonnenen Erkenntnisse sogleich
                    anzuwenden. Dabei zeige ich auf, wie Sie Ihre Lieblingskleidungsstücke mit neuen Stücken ergänzen,
                    aufwerten oder variieren können. Vermeintliche Fehlkäufe erscheinen richtig kombiniert in neuem
                    Licht und so manche Überzeugung, was Ihnen steht oder nicht, sehen Sie womöglich plötzlich mit
                    anderen Augen.
                </td>
            </tr>

        </table>
        <h2 id="arbeiten">Realisiert...</h2>


        <div id="damen" class="slideshow">
            <img id="damen0" class="imageHidden" src="./assets/bilder/damen/0.jpg" onclick="slideshow('damen',0)"
                role="button">
            <img id="damen1" class="imageLeft" src="./assets/bilder/damen/1.jpg" onclick="slideshow('damen',1)"
                role="button">
            <img id="damen2" class="imageCenter" src="./assets/bilder/damen/2.jpg" onclick="slideshow('damen',2)"
                role="button">
            <img id="damen3" class="imageRight" src="./assets/bilder/damen/3.jpg" onclick="slideshow('damen',3)"
                role="button">
            <img id="damen4" class="imageHidden" src="./assets/bilder/damen/4.jpg" onclick="slideshow('damen',4)"
                role="button">
            <img id="damen5" class="imageHidden" src="./assets/bilder/damen/5.jpg" onclick="slideshow('damen',5)"
                role="button">
            <img id="damen6" class="imageHidden" src="./assets/bilder/damen/6.jpg" onclick="slideshow('damen',6)"
                role="button">
            <img id="damen7" class="imageHidden" src="./assets/bilder/damen/7.jpg" onclick="slideshow('damen',7)"
                role="button">
            <img id="damen8" class="imageHidden" src="./assets/bilder/damen/8.jpg" onclick="slideshow('damen',8)"
                role="button">
            <img id="damen9" class="imageHidden" src="./assets/bilder/damen/9.jpg" onclick="slideshow('damen',9)"
                role="button">
            <img id="damen10" class="imageHidden" src="./assets/bilder/damen/10.jpg" onclick="slideshow('damen',10)"
                role="button">
            <img id="damen11" class="imageHidden" src="./assets/bilder/damen/11.jpg" onclick="slideshow('damen',11)"
                role="button">
            <img id="damen12" class="imageHidden" src="./assets/bilder/damen/12.jpg" onclick="slideshow('damen',12)"
                role="button">
            <img id="damen13" class="imageHidden" src="./assets/bilder/damen/13.jpg" onclick="slideshow('damen',13)"
                role="button">
            <img id="damen14" class="imageHidden" src="./assets/bilder/damen/14.jpg" onclick="slideshow('damen',14)"
                role="button">
            <img id="damen15" class="imageHidden" src="./assets/bilder/damen/15.jpg" onclick="slideshow('damen',15)"
                role="button">
            <img id="damen16" class="imageHidden" src="./assets/bilder/damen/16.jpg" onclick="slideshow('damen',16)"
                role="button">
            <img id="damen17" class="imageHidden" src="./assets/bilder/damen/17.jpg" onclick="slideshow('damen',17)"
                role="button">
            <img id="damen18" class="imageHidden" src="./assets/bilder/damen/18.jpg" onclick="slideshow('damen',18)"
                role="button">
            <img id="damen19" class="imageHidden" src="./assets/bilder/damen/19.jpg" onclick="slideshow('damen',19)"
                role="button">
        </div>



        <span>... für die Dame</span>

        <div id="herren" class="slideshow">
            <img id="herren0" class="imageHidden" src="./assets/bilder/herren/0.jpg" onclick="slideshow('herren',0)"
                role="button">
            <img id="herren1" class="imageLeft" src="./assets/bilder/herren/1.jpg" onclick="slideshow('herren',1)"
                role="button">
            <img id="herren2" class="imageCenter" src="./assets/bilder/herren/2.jpg" onclick="slideshow('herren',2)"
                role="button">
            <img id="herren3" class="imageRight" src="./assets/bilder/herren/3.jpg" onclick="slideshow('herren',3)"
                role="button">
            <img id="herren4" class="imageHidden" src="./assets/bilder/herren/4.jpg" onclick="slideshow('herren',4)"
                role="button">
            <img id="herren5" class="imageHidden" src="./assets/bilder/herren/5.jpg" onclick="slideshow('herren',5)"
                role="button">
            <img id="herren6" class="imageHidden" src="./assets/bilder/herren/6.jpg" onclick="slideshow('herren',6)"
                role="button">
            <img id="herren7" class="imageHidden" src="./assets/bilder/herren/7.jpg" onclick="slideshow('herren',7)"
                role="button">
        </div>


        <span>... für den Herren</span>

        <h2 id="farbeUndStil">Kombiniert...</h2>

        <div id="herren" class="slideshow">
            <img id="color0" class="imageHidden" src="./assets/bilder/farbe/0.jpg"  onclick="slideshow('color',0)" role="button">
            <img id="color1" class="imageLeft" src="./assets/bilder/farbe/1.jpg"  onclick="slideshow('color',1)" role="button">
            <img id="color2" class="imageCenter" src="./assets/bilder/farbe/2.jpg"  onclick="slideshow('color',2)" role="button">
            <img id="color3" class="imageRight" src="./assets/bilder/farbe/3.jpg"  onclick="slideshow('color',3)" role="button">
            <img id="color4" class="imageHidden" src="./assets/bilder/farbe/4.jpg"  onclick="slideshow('color',4)" role="button">
            <img id="color5" class="imageHidden" src="./assets/bilder/farbe/5.jpg"  onclick="slideshow('color',5)" role="button">
        </div>


        <h3>Ablauf der Beratung</h3>
        <ul>
            <li> Ausführliches Gespräch über Ihre Erwartungen an die Farb- und Stilberatung </li>
            <li> Analyse Ihres Farbtyps (kalt- oder warmtonig) mit evtl. Tendenzen in den jeweils anderen Bereich </li>
            <li> Typisierung und Einordnung Ihrer Figur und Körperformen </li>
            <li> Auswahl verschiedener Muster, Materialien und Oberflächenstrukturen passend zu Ihrem Erscheinungsbild
            </li>
            <li> Bestimmung der Accessoires wie Schmuck, Brille, Handtasche und Schuhe. Auch Frisur, Haarfarbe und
                Ausschnittformen werden berücksichtigt. </li>
            <li> Zusammenfassung der erörterten Ergebnisse in einem kleinen Handbuch und Aushändigung des zutreffenden
                Farbpasses </li>
            <li> Empfehlung Kleiderschrankcheck:<br> Gemeinsames systematisches Durchgehen Ihres Kleiderschrankes und
                Zusammenstellung von kompletten Outfits inklusive Accessoires bei Ihnen zu Hause </li>
            <li> Das Tüpfelchen auf dem i: <br> Anfertigung beispielsweise eines Basisteils oder eines Outfits für einen
                bestimmten Anlass </li>
        </ul>
        <h3>Preise</h3>
        <table id="priceTable">
            <tr>
                <td>Kombinierte Farb- und Stilberatung (inkl. Farbpass und Stilbroschüre)</td>
                <td>248 €</td>
            </tr>
            <tr>
                <td>Stilberatung (Figuranalyse, individuelle Tipps und Tricks, Stilbroschüre)</td>
                <td>129 €</td>
            </tr>
            <tr>
                <td>Farbberatung (Kleidung, Haarfarbe, Brillenfarbe)</td>
                <td>115 €</td>
            </tr>
            <tr>
                <td>Kleine Stilberatung (Frisur, Ausschnittformen, Rock- und Blazerlänge)</td>
                <td>40 €</td>
            </tr>
            <tr>
                <td> Garderobencheck bei Ihnen zu Hause (pro Stunde, exkl. Fahrtkosten) </td>
                <td>65 €</td>
            </tr>
            <tr>
                <td>Farbpass</td>
                <td>20 €</td>
            </tr>
        </table>
        <h2 id="kontakt">Identifiziert...</h2>
        <blockquote>Kleider machen Leute – und Leute machen Kleider <cite>(Gottfried Keller)</cite> </blockquote>
        <p>Einer dieser Leute bin ich: Ines Mühlmann, Schneidermeisterin, Farb- und Stilberaterin und Textilingenieurin.
        </p>
        <table>
            <tr>
                <td>2003</td>
                <td>Abitur</td>
            </tr>
            <tr>
                <td>2003 – 2006</td>
                <td>Maßschneiderausbildung bei Elise Topell Couture in Wiesbaden</td>
            </tr>
            <tr>
                <td>2003 – 2007</td>
                <td>Praktikum bei Vivienne Westwood in London</td>
            </tr>
            <tr>
                <td>2007 – 2009</td>
                <td>Musterschneiderin bei Rena Lange in München und bei Akris AG in St. Gallen, Schweiz</td>
            </tr>
            <tr>
                <td>2009 – 2012</td>
                <td>Abschluss der Deutschen Meisterschule für Mode in München und Abschluss der Fachschule für Schnitt
                    und Entwurf </td>
            </tr>
            <tr>
                <td>2012 – 2016</td>
                <td>Schnittmacherin bei MAC Mode in Roßbach bei Regensburg und bei Cybex GmbH in Bayreuth</td>
            </tr>
            <tr>
                <td>2016 – 2020</td>
                <td>Abschluss Bachelor of Engineering des Studiengangs Innovative Textilien an der Hochschule Hof</td>
            </tr>
        </table>
        <p>Die Maßschneiderei ist einer der ältesten Handwerksberufe. Trotzdem gibt es vielfältige Möglichkeiten, alte
            Schneiderkunst mit modernen Ideen zu verbinden und ein einzigartiges Kleidungsstück zu kreieren, das perfekt
            zu dem Anlass passt, zu dem es getragen werden soll. Genau das habe ich mir zur Aufgabe gemacht: eine
            helfende Hand(werkerin) zu sein. </p>
        <h4>Kontakt</h4>
        <form action="" method="post">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Submit">
            </form>
    </div>
    <footer>(c) 2020</footer>
</body>

</html>