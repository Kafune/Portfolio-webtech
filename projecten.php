<?php
//Kachung Li - 07-01-2020

$paginaTitel = "Projecten";
$paginaBeschrijving = "In deze pagina kunt u zien aan welke projecten ik heb gewerkt.";
include_once('includes/globalevariabelen.php');
include_once(ROOT . '/includes/header.php');
?>

    <main id="project-overview">
        <div class="container">
            <?php
            include(ROOT . '/includes/intro.php');
            $rijteller = 0;
            foreach ($resultaat as $project) :
                if ($rijteller % 3 == 0) :
                    ?>
                    <div class="display-flex project-display">
                <?php
                endif;
                ?>
                <article>
                    <?php if (!$project['bestandsnaam'] == NULL) :
                    ?>
                    <a href="<?= $root ?>/projecten/<?= $project['bestandsnaam'] ?>">
                        <?php else: ?>
                        <a href="<?= $root ?>/projecten.php">
                            <?php endif; ?>

                            <img src="<?= $project['afbeelding'] ?>"
                                 alt="<?= $project['naam'] ?>">
                            <h2><?= $project['naam'] ?></h2>
                        </a>
                        <p><?= $project['tekst'] ?></p>

                </article>
                <?php
                if ($rijteller % 3 == 2) {
                    ?>
                    </div>
                    <?php
                }
                $rijteller++;
            endforeach;
            ?>
        </div>
        </div>
    </main>


<?php include_once(ROOT . '/includes/footer.html'); ?>