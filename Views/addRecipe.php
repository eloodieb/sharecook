<?php require('header.php') ?>

<h2 class="text-center">Espace administrateur</h2>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="?action=addRecipe" method="post">
                <div>
                    <label for="title" class="form-label">Titre</label><br />
                    <input type="text" id="title" name="title" class="form-control" required />
                </div>
                <div>
                    <label for="description" class="form-label">Description</label><br />
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <div>
                    <label for="description" class="form-label">URL de l'image</label><br />
                    <input type="text" id="description" name="image" class="form-control" required></input>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning mt-2">Créer</button>
                </div>
            </form>

        </div>
    </div>

    <div class="row d-flex justify-content-center">

        <?php
        while ($data = $recipes->fetch()) {

        ?>
            <div class="col-3 mx-4">
                <!-- Cartes de recettes -->
                <div class=" card" style="width: 18rem;">
                    <img src="<?= $data['image'] ?>" class="card-img-top" alt="...">
                    <div class="text-center">
                        <h5 class="card-title"> <?= utf8_encode($data['title']); ?></h5>
                        <a href="index.php?action=recipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card ">Voir la recette</a>
                        <a href="index.php?action=deleteRecipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card ">Supprimer</a>
                        <a href="index.php?action=displayUpdateRecipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card ">Modifier</a>
                    </div>
                </div>
            </div>
        <?php
        }
        $recipes->closeCursor();
        ?>
    </div>
</div>

<?php require('footer.php') ?>