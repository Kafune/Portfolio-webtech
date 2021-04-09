<?php
// Kachung Li - 14-01-2020

$paginaTitel = 'Beheer';

include_once('../includes/globalevariabelen.php');
include_once(ROOT . '/includes/header.php');
//TODO: KNOCK OUTS EN VALIDATOR CHECK

$sql = "SELECT * FROM blog
    ORDER BY id ASC";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':zoekquery', $_GET['query'], PDO::PARAM_STR);

$stmt->execute();

$resultaat = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <main id="admin">
        <?php
        if (isset($_SESSION['status'])) :
            if ($_SESSION['status'] == 'Verzonden') :
                ?>
                <div class="note-message success">
                    <h2>
                        Je blogitem is aangemaakt!</h2>
                </div>
                <?php
                unset($_SESSION['status']);
            endif;
        endif;
        if (isset($_SESSION['gebruikeraanmaken'])) :
            if ($_SESSION['gebruikeraanmaken'] == 'Gelukt') :
                ?>
                <div class="note-message success">
                    <h2>
                        Gebruikeraccount is aangemaakt!</h2>
                </div>
            <?php

            elseif ($_SESSION['gebruikeraanmaken'] == 'Mislukt') :
                ?>
                <div class="note-message failed">
                    <h2>
                        Gebruiker bestaat al!</h2>
                </div>
            <?php
            endif;
            unset($_SESSION['gebruikeraanmaken']);
        endif;
        if (isset($_SESSION['blogverwijderen'])) :
            if ($_SESSION['blogverwijderen'] == 'Gelukt') :
                ?>
                <div class="note-message success">
                    <h2>
                        Bericht verwijderd!</h2>
                </div>
            <?php
            elseif ($_SESSION['blogverwijderen'] == 'Mislukt') :
                ?>
                <div class="note-message failed">
                    <h2>
                        Blogitem verwijderen mislukt!</h2>
                </div>
            <?php
            endif;
            unset($_SESSION['blogverwijderen']);

        endif;
        ?>
        <div class="container">
            <h1>Ingelogd als <?= $_SESSION['gebruikersnaam'] ?></h1>
            <div>
                <h2>Nieuwe blogitem</h2>
                <section class="display-flex admin-form">
                    <form method="post" action="<?= $root ?>/functions/maakblogitem.php">
                        <p><label>Titel: </label></p>
                        <input type="text" name="titel" required>
                        <p><label>Tekst: </label></p>
                        <textarea name="tekst"
                                  required></textarea>
                        <div class="submit-btn">
                            <input type="submit" name="verzenden" value="Blogitem aanmaken">
                        </div>
                    </form>
                </section>
                <h2>Maak nieuwe gebruiker aan</h2>

                <section class="display-flex admin-form">
                    <form method="post" action="<?= $root ?>/functions/maakgebruiker.php">
                        <p><label>Gebruikersnaam: </label></p>
                        <input type="text" name="gebruikersnaam" required>
                        <p><label>Wachtwoord: </label></p>
                        <input type="password" name="wachtwoord" required>
                        <div class="submit-btn">
                            <input type="submit" name="verzenden" value="Verzenden">
                        </div>
                    </form>
                </section>
                <h2>Berichten</h2>
                <section class="display-flex">
                    <table>
                        <tr>
                            <th>id</th>
                            <th>titel</th>
                            <th>tekst</th>
                            <th>datum</th>
                            <th>actie</th>
                        </tr>
                        <?php foreach ($resultaat as $blogitem) :
                            ?>
                            <tr>
                                <td><?= $blogitem['id'] ?></td>
                                <td><?= $blogitem['titel'] ?></td>
                                <td><?= $blogitem['tekst'] ?></td>
                                <td><?= date("d-m-Y", strtotime($blogitem['datum'])) ?></td>
                                <td><a href="<?= $root ?>/functions/verwijderblogitem.php?id=<?= $blogitem['id'] ?>">Verwijder</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
            </div>
        </div>
    </main>

<?php include_once(ROOT . '/includes/footer.html'); ?>