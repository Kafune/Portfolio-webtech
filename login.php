<?php
//Kachung Li - 10-01-2020

$paginaTitel = "Inloggen";

include_once('includes/globalevariabelen.php');
include_once(ROOT.'/includes/header.php');

if(isset($_SESSION['gebruikersnaam'])) {
    header('location:'.$root.'/admin/index.php');
}
?>

<div id="login">
<?php
if (isset($_SESSION['status'])) :
    if ($_SESSION['status'] == 'Ongeldig') :
            ?>
        <div class="note-message failed">
            <h2>
                Ongeldige gebruikersnaam of wachtwoord.</h2>
        </div>
        <?php
        unset($_SESSION['status']);
        endif;
    endif;
        ?>
    <div class="container">
        <section class="display-flex login-display">
        <form method="post" action="<?=$root?>/functions/inloggen.php">
            <p><label>Gebruikersnaam: *</label></p>
            <input type="text" name="gebruikersnaam" required>
            <p><label>Wachtwoord: *</label></p>
            <input type="password" name="wachtwoord" required>
            <div class="submit-btn">
                <input type="submit" name="login" value="Inloggen">
            </div>
        </form>
        </section>
    </div>
</div>

<?php include_once(ROOT.'/includes/footer.html'); ?>