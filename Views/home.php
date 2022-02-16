<?php require('header.php'); ?>

<div class="container">
    <a class="btn btn-primary" href="index.php?action=displayAddRecipe" role="button">espace admin</a>

    <?php
    while ($data = $recipes->fetch()) {
    ?>

        <div class="row my-4">
            <div class="col-md-6">
                <img src="<?= $data['image']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>
                    <?= htmlspecialchars($data['title']); ?>
                </h2>
                <em> le <?= $data['creation_date_fr']; ?> </em><br>
                <a class="btn btn-primary" href="index.php?action=recipe&amp;id=<?= $data['id'] ?>" role="button">Voir la recette</a>
            </div>
        </div>
    <?php
    }
    $recipes->closeCursor();
    ?>
</div>

<?php require('footer.php'); ?>