<?php
//Kachung Li - 14-01-2020

$paginaTitel = 'Blog';
$paginaBeschrijving = 'Hier komt eventuele blogitems of nieuws die ik schrijf.';

include_once('includes/globalevariabelen.php');
include_once(ROOT . '/includes/header.php');

if(isset($_GET['query'])) {
    $sql = "SELECT * FROM blog
        WHERE titel LIKE CONCAT('%', :zoekquery, '%') OR tekst LIKE CONCAT('%', :zoekquery, '%')
        ORDER BY datum DESC";
} else {
    $sql = "SELECT * FROM blog
    ORDER BY datum DESC";
}


$stmt = $conn->prepare($sql);

$stmt->bindParam(':zoekquery', $_GET['query'], PDO::PARAM_STR);

$stmt->execute();

$resultaat = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<main id="blog">
    <div class="container">
        <?php include(ROOT . '/includes/intro.php'); ?>
        <div class="display-flex blog-display">
            <section>
                <?php foreach ($resultaat as $blog): ?>
                    <article>
                        <h2><?= $blog['titel'] ?></h2>
                        <h4><?= date("d-m-Y", strtotime($blog['datum'])) ?></h4>
                        <p><?= $blog['tekst'] ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
            <div class="blog-search">
                <form method="get" action="<?= $root ?>/blog.php">
                    <p><label>Zoeken: </label></p>
                    <input type="text" name="query">
                    <div class="submit-btn">
                        <input type="submit" value="Zoeken">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php include_once(ROOT . '/includes/footer.html'); ?>
