<?php
//Kachung Li - 07-01-2020

$paginaTitel = "Over mij";
$paginaBeschrijving = "Hierin kunt u mijn biografie, werkervaring, opleidingen en vaardigheden zien die ik in de
        vorm van een CV
        heb gemaakt.";
include_once('includes/globalevariabelen.php');
include_once('includes/header.php');

?>
<main id="about-me">
    <div class="container">
        <?php include(ROOT.'/includes/intro.php'); ?>
        <div class="display-flex personal-info">
            <img src="img/kachung-2.jpg" class="profielfoto" alt="Kachung in HK">
            <img src="img/baron-nashor.png" class="baron" alt="Baron Nashor">
            <img src="img/baron-nashor-mirrored.png" class="baron-mirror" alt="Baron Nashor Mirrored">
            <section>
                <h2>Biografie</h2>
                <p><span>Naam: </span>Ka Chung Li</p>
                <p><span>Roepnaam: </span>Kachung</p>
                <p><span>Adres: </span>Hermaat 64</p>
                <p><span>Postcode: </span>6983 AM</p>
                <p><span>Woonplaats: </span>Doesburg</p>
                <p><span>E-mail: </span>likachung97@gmail.com</p>
                <p><span>Geboortedatum: </span>1997</p>
                <p><span>Nationaliteit: </span>Nederlandse</p>
                <p><span>Hobby's: </span>Lezen, Gamen en Anime kijken</p>
            </section>
            <section>
                <h2>Werkervaring</h2>
                <p><span>04/02/2019 - 28/06/2019: </span></p>
                <p>Full stack webdeveloper, Wallbrink Crossmedia, Velp</p>
                <p><span>29/08/2017 - 02/02/2018: </span></p>
                <p>Stage website ontwikkeling, Kendor Products Giesbeek</p>
                <p><span>21/05/2015 - 06/11/2015: </span></p>
                <p>Stagiaire Afdeling Finance, Gazelle Dieren</p>
                <p><span>28/01/2013 – 01/02/2013: </span></p>
                <p>Stagiaire vakkenvullen, Coop Doesburg</p>
            </section>
            <section>
                <h2>Opleidingen</h2>
                <p><span>2019 - Heden: </span>Opleiding HBO-ICT, Leerjaar 1</p>
                <p>HAN - Hogeschool van Arnhem en Nijmegen te Arnhem</p>
                <p><span>2016 - 2019: </span>Opleiding applicatieontwikkeling, Leerjaar 3, Niveau 4,</p>
                <p>Graafschap College te Doetinchem</p>
                <p><span>2014 - 2016: </span>Opleiding Financiële beroepen, Niveau 3 en 4,</p>
                <p>Graafschap College te Doetinchem</p>
                <p><span>2009 - 2014: </span>Profiel Economie, vrije vakken Duits en Aardrijkskunde,</p>
                <p>Het Rhedens te Dieren</p>
            </section>
            <section>
                <h2>Vaardigheden</h2>
                <p><span>Analytisch denkvermogen: </span>Ik kan logisch nadenken en problemen opsporen. Het kost me wel
                    wat tijd om iets te analyseren, en het kan ook zijn dat ik het niet meteen begrijp, waardoor ik het
                    vaker door moet nemen. </p>
                <p><span>Doorzettingsvermogen: </span>Het liefst wil ik een opdracht af kunnen krijgen. Ik ga zo ver
                    mogelijk door voordat ik met een nieuwe taak begin.</p>
                <p><span>Betrouwbaar: </span>Ik probeer altijd mijn afspraken na te komen. Als dit mij niet lukt, dan
                    geef ik dit van tevoren aan. Ook probeer ik zo eerlijk mogelijk te zijn. Als ik iets niet begrijp,
                    geef ik dat ook aan.</p>
                <p><span>Flexibiliteit: </span>Ik kan vaak mijn prioriteiten vaststellen. Als ik niet zeker weet wat een
                    hogere prioriteit heeft, dan vraag ik rond voor suggesties. Ook kan ik mijn eigen werk even
                    wegzetten als een ander taak een hogere prioriteit heeft.</p>
                <p><span>Samenwerken: </span>Ik communiceer mijn werkzaamheden zoveel mogelijk als ik kan. Ook vraag ik
                    om feedback als er iets beter kan. </p>
                <p><span>Zelfstandig werken: </span>Ik kan zelf in mijn omgeving werken. Als er iets is wat ik niet uit
                    kom, dan zoek ik het als eerst zelf uit. Als het dan niet lukt, dan vraag ik eventueel naar
                    oplossingen.</p>
            </section>
        </div>
    </div>
</main>


<?php include_once('includes/footer.html') ?>