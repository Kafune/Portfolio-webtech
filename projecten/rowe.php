<?php
//Kachung Li - 15-01-2020

$paginaTitel = "Rowe";
$paginaHeader = "rowe-header";

include_once('../includes/globalevariabelen.php');
include_once(ROOT.'/includes/header.php');
?>
<main id="projectdetail">
    <div class="container">
        <p class="intro"><b>
            In deze pagina vertel ik hoe ik de website heb ontwikkeld. Ook vertel ik wat voor ontwikkelomgeving en talen
            en frameworks heb gebruikt en mijn ervaring tijdens het ontwikkelen van de website.
        </b></p>
        <hr>
        <section>
            <h2>Aanleiding</h2>
            <p>Dit is een website die ik tijdens mijn stage bij
                <a href="https://www.wallbrinkcrossmedia.nl/"
                   target="_blank"
                   title="Dit is een link naar de website van Wallbrink Crossmedia">
                    Wallbrink Crossmedia</a> heb ontwikkeld. Dit was mijn eerste opdracht.
                Ik heb zelf niet veel informatie over de aanleiding van dit website gekregen. Dit zijn zaken
                die
                de baas van mij heeft afgehandeld. Ik weet alleen dat Rowe financieel advies geeft aan klanten, en dat
                hij
                nieuwsbrieven en artikelen over het financiële wereld schrijft. Van mijn collega in de developer team
                heb ik
                dus de opdracht om voor Rowe de website te realiseren.
            </p>
        </section>
        <section>
            <h2>Ontwikkeling</h2>
            <div class="display-flex development-display">
                <figure>
                    <img src="../img/bootstrap-stack.png" alt="Bootstrap logo">
                </figure>
                <figure>
                    <img src="../img/sass.png" alt="SASS Logo">
                </figure>
                <figure>
                    <img src="../img/october-cms.png" alt="OctoberCMS Logo">
                </figure>
                <figure>
                    <img src="../img/npm-logo.png" alt="Node Package Manager Logo">
                </figure>
                <figure>
                    <img src="../img/bitbucket.jpg" alt="Bitbucket Logo">
                </figure>
            </div>
            <p><span>Bootstrap: </span>
                Open source webframework wat van het grids systeem gebruik maakt om mooie responsive sites te bouwen.
                Met mobile first in gedachte bouwen.</p>
            <p><span>Sass: </span>
                Framework voor CSS waardoor CSS veel makkelijker en beter geschreven wordt. Er kan gebruik gemaakt
                worden van onder andere variabelen, nesten, partials, mixins en meer.</p>
            <p><span>OctoberCMS</span>
                Een open source CMS platform die ontwikkeld is in Laravel. Heel erg uitbreidbaar en vriendelijk voor
                developers, en met goede documentatie en klantenservice ook goed te gebruiken voor klanten.</p>
            <p><span>NPM: </span>
                Staat voor Node Package Manager. Wordt vooral gebruikt om javascript pakketten te beheren binnen de
                webapplicatie.</p>
            <p><span>Git</span>
                Versiebeheersysteem waarmee er ook goed mee samengewerkt kan worden tussen developers. Wij hebben
                gebruik gemaakt van BitBucket.
            </p>
        </section>
        <section>
            <h2>Mijn ervaring tijdens het ontwikkeling</h2>
            <p>Omdat dit mijn eerste opdracht is, heb ik eerst uitleg over het systeem en hoe ontwikkeling werd gedaan
                binnen het bedrijf. Ik heb uitleg gekregen van hoe Git, NPM, Bootstrap en Sass werkt. Ik snapte bij het
                begin flexboxen niet echt heel goed, maar na veel dingen proberen lukte het wel wat beter. Ik heb over
                de
                hele website 3 weken gedaan. Er zaten uiteindelijk nog een paar fouten in, maar die zijn later door mijn
                collega's gefixed. Hieronder heb ik een filmpje waarin ik een aantal dingetjes laat zien binnen de
                website
                die ik zelf wel mooi vond.</p>
            <video id="rowe-video" controls>
                <source src="../videos/rowe-financial-service.mp4" type="video/mp4">
                <p>Uw browser ondersteunt geen HTML5 video's. Klik <a href="../videos/rowe-financial-service.mp4">hier</a>
                    om
                    naar het filmpje te gaan.</p>
            </video>
        </section>
    </div>
</main>


<?php include_once(ROOT.'/includes/footer.html'); ?>