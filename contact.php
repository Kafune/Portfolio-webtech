<?php
//Kachung Li - 07-01-2020

$paginaTitel = 'Contact';
$paginaBeschrijving = 'Heeft u vragen voor mij? Of heeft u een project waar u mij in wilt huren? Dat kan! Vul de
                    onderstaande
                    formulier in, en ik kom er zo snel mogelijk op terug. Als u behoefte heeft om mij te mailen of te
                    bellen,
                    dan klikt u op mijn mailadres of op mijn telefoonnummer. Bellen kan alleen via de mobiel gedaan
                    worden, en
                    wordt ook aangegeven als u via de computer op mijn telefoonnummer klikt.';
include_once('includes/globalevariabelen.php');
include_once('includes/header.php');
?>
    <main id="contact">
        <?php
        if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == 'Verzonden') {
                ?>
                <div class="note-message success">
                    <h2>
                        Bedankt voor uw bericht! U krijgt binnenkort een reactie terug</h2>
                </div>
                <?php
                unset($_SESSION['status']);
            }
        }
        ?>
        <div class="container">
            <h1><?=$paginaTitel?></h1>
            <?php include(ROOT.'/includes/intro.php'); ?>
            <div class="display-flex contact-display">
                <section>
                    <h2>Contactgegevens</h2>
                    <p><i>Hermaat 64</i></p>
                    <p><i>6983 AM Doesburg</i></p>
                    <p><span><a href="mailto:KC.Li@student.han.nl">KC.Li@student.han.nl</a></span></p>
                    <p><span><a href="tel:+31612345678">06-12345678</a></span></p>
                </section>
                <section>
                    <h2>Neem contact op!</h2>
                    <form action="<?=$root?>/functions/stuurcontactformulier.php" method="post">
                        <p><label>Naam: *</label></p>
                        <input type="text" name="naam" placeholder="Uw naam" required>
                        <p><label>Telefoonnummer: </label></p>
                        <input type="tel" name="telefoon" placeholder="Uw telefoonnummer">
                        <p><label>E-mail adres: *</label></p>
                        <input type="email" name="email" placeholder="Uw e-mail" required>
                        <p><label>Datum: *</label></p>
                        <input type="date" name="datum" required>
                        <p><label>Project: </label></p>
                        <input type="text" name="project" placeholder="Het project wat u ontwikkelt wilt hebben">
                        <p><label>Belangstelling: </label></p>
                        <input type="text" name="belangstelling" placeholder="Interesse">
                        <p><label>Bericht: *</label></p>
                        <textarea name="bericht" placeholder="Uw bericht"
                                  required></textarea>
                        <p><label>Wilt u een reactie terugkrijgen via telefoon?</label></p>
                        <fieldset>
                            <label>
                                <input type="radio" name="bellen" value="1" required>
                                Ja</label>
                            <label>
                                <input type="radio" name="bellen" value="0" required>
                                Nee</label>
                        </fieldset>
                        <div class="submit-btn">
                            <input type="submit" name="verzenden" value="Verzenden">
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>

<?php include_once(ROOT.'/includes/footer.html'); ?>