<?php require('header.php') ?>

<h2 class="text-center">Espace administrateur</h2>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="?action=addRecipe" method="post">
                <div class="pt-2">
                    <label for="title" class="form-label">Titre</label><br />
                    <input type="text" id="title" name="title" class="form-control" required />
                </div>
                <div class="pt-2">
                    <label for="description" class="form-label">Description</label><br />
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <div class="pt-2">
                    <label for="description" class="form-label">URL de l'image</label><br />
                    <input type="text" id="description" name="image" class="form-control" required></input>
                </div>
                <div class="pt-2">
                    <button type="submit" class="btn btn-warning mt-2">Créer une nouvelle recette</button>
                </div>
            </form>

        </div>
    </div>

    <div class="row d-flex justify-content-center mt-4">
        <h3 class="text-center my-5"> Gestion des recettes créées</h3>

        <?php
        while ($data = $recipes->fetch()) {

        ?>
            <div class="col-3 mx-4 my-3">
                <!-- Cartes de recettes -->
                <div class="card" style="width: 18rem;">
                    <img src="<?= $data['image'] ?>" class="card-img-top img-fluid" alt="...">
                    <div class="text-center py-3">
                        <h5 class="card-title pb-2"> <?= utf8_encode($data['title']); ?></h5>
                        <p class="fst-italic"><?= ($data['creation_date_fr']); ?></p>
                        <a href="index.php?action=recipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card my-1">Voir la recette</a>
                        <a href="index.php?action=deleteRecipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card  my-1">Supprimer</a>
                        <a href="index.php?action=displayUpdateRecipe&amp;id=<?= $data['id'] ?>" class="btn btn-primary btn-card  my-1">Modifier</a>
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