<?php require('header.php'); ?>

<div class="container">
    <p><a href="index.php" class="btn btn-primary">Retour</a></p>

    <div class="row my-4">
        <div class="col-12 text-center">
            <img src="<?= $recipe['image']; ?>" alt="" class="img-fluid img-recipe shadow">
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <h2>
                <?= htmlspecialchars($recipe['title']) ?>
            </h2>
            <HR>
            <em>Créée le <?= $recipe['creation_date_fr'] ?></em>
            <p class="mt-4">
                <?= nl2br(htmlspecialchars($recipe['description'])) ?>
            </p>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>