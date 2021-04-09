<?php
//Kachung Li - 11-01-2020

$root = "/KL/php-beroepsproduct-2";
require_once(ROOT . '/includes/db.php');

session_start();
if (strpos($url, '/admin/')) {
    if (!isset($_SESSION['gebruikersnaam'])) {
        header('location:' . $root . '/index.php');
    }
}
$sql = "SELECT * FROM projecten";

$stmt = $conn->prepare($sql);

$stmt->execute();

$resultaat = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kachung Li">
        <meta name="description" content="Het projectpagina van Rowe Financial Service">
        <?php
        if (isset($paginaTitel)) :
            ?>
            <title><?= $paginaTitel ?></title>
        <?php
        else:
            ?>
            <title>Pagina zonder titel</title>
        <?php
        endif;
        ?>
        <link rel="stylesheet" href="<?= $root ?>/css/styles.css">

    </head>
<body>
    <!--Nodig om mijn knop rechtsonderin te laten werken. Meer voor mobiele gebruikers bedoeld.-->
    <a id="top"></a>
<nav id="menu" class="display-flex">
    <h1><a href="<?= $root ?>/index.php">Kachung</a></h1>
    <ul>
    <li><a href="<?= $root ?>/personalia.php">Over mij</a></li>
    <li><a href="<?= $root ?>/projecten.php">Projecten ↓</a>
    <ul>
<?php
foreach ($resultaat as $project) :
    ?>
    <li>
    <?php if (!$project['bestandsnaam'] == NULL) :
    ?>
    <a href="<?= $root ?>/projecten/<?= $project['bestandsnaam'] ?>"><?= $project['naam'] ?></a>
<?php else: ?>
    <a href="<?= $root ?>/projecten.php"><?= $project['naam'] ?></a>
    <?php endif; ?>
    </li>

    <?php
endforeach;
    ?>
    </ul>
    </li>
    <li><a href="<?= $root ?>/blog.php">Blog</a></li>
    <li><a href="<?= $root ?>/contact.php">Contact</a></li>
    <?php
    if (isset($_SESSION['gebruikersnaam'])) :
        ?>
        <li><a href="<?= $root ?>/admin/index.php">Welkom <?= $_SESSION['gebruikersnaam'] ?></a></li>
        <li><a href="<?= $root ?>/functions/uitloggen.php">Uitloggen</a></li>

    <?php
    else:
        ?>
        <li><a href="<?= $root ?>/login.php">Login</a></li>
    <?php
    endif;
    ?>
    </ul>
    <a href="#m-menu">
        <span></span>
    </a>
    </nav>

    <div id="m-menu">
        <ul>
            <li><a href="<?= $root ?>/personalia.php">Personalia</a></li>
            <li><a href="<?= $root ?>/projecten.php">Projecten</a><label for="dropdown">↓</label>
                <input type="checkbox" id="dropdown">
                <ul>
                    <?php
                    foreach ($resultaat as $project) :
                        ?>
                        <li><a href="<?= $root ?>/projecten/<?= $project['bestandsnaam'] ?>"><?= $project['naam'] ?></a>
                        </li>

                    <?php
                    endforeach;
                    ?>
                </ul>
            </li>
            <li><a href="<?= $root ?>/contact.php">Contact</a></li>
        </ul>
    </div>

    <?php

    if (!strpos($url, 'index') && !strpos($url, '/admin/')) {
        if (isset($paginaTitel)) :
            ?>
            <header id="header">
                <div class="display-flex">
                    <?php if (!strpos($url, '/contact')) :
                        ?>
                        <h1><?= $paginaTitel ?></h1>
                    <?php else: ?>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.1540985275656!2d6.129078115917472!3d52.00406988208738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c799b335a41713%3A0xd936772f9834077!2sHermaat%2C%20Doesburg!5e0!3m2!1snl!2snl!4v1574630373779!5m2!1snl!2snl"
                                width="1200" height="300" allowfullscreen=""></iframe>

                    <?php endif; ?>
                </div>
            </header>
        <?php
        endif;
    }
    ?>


    <?php
    switch ($paginaHeader) {

    }

    ?>