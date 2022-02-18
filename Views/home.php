<?php require('header.php'); ?>

<div class="container">
    <?php
    while ($data = $recipes->fetch()) {
    ?>

        <div class="row my-4">
            <div class="col-md-7">
                <img src="<?= $data['image']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-5">
                <h2 class="mt-5">
                    <?= htmlspecialchars($data['title']); ?>
                </h2>
                <em> le <?= $data['creation_date_fr']; ?> </em><br>
                <a class="btn btn-primary my-3" href="index.php?action=recipe&amp;id=<?= $data['id'] ?>" role="button">Voir la recette</a>
            </div>
        </div>
    <?php
    }
    $recipes->closeCursor();
    ?>
</div>

<?php require('footer.php'); ?>