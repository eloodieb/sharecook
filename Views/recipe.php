<?php require('header.php'); ?>

<div class="container">
    <p><a href="index.php" class="btn btn-primary">Retour</a></p>

    <div class="row my-4">
        <div class="col-md-6">
            <img src="<?= $recipe['image']; ?>" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>
                <?= htmlspecialchars($recipe['title']) ?>
            </h2>
            <em>le <?= $recipe['creation_date_fr'] ?></em>
            <p>
                <?= nl2br(htmlspecialchars($recipe['description'])) ?>
            </p>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>