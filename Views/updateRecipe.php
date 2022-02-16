<?php require('header.php') ?>

<h2 class="text-center">Mettre à jour une recette</h2>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="?action=updateRecipe&id=<?= $_GET['id'] ?>" method="post">
                <div>
                    <label for="title" class="form-label">Titre</label><br />
                    <input type="text" id="title" name="title" class="form-control" value="<?= $recipe['title'] ?>" />
                </div>
                <div>
                    <label for="description" class="form-label">Description</label><br />
                    <textarea id="description" name="description" class="form-control"><?= $recipe['description'] ?></textarea>
                </div>
                <div>
                    <label for="description" class="form-label">URL de l'image</label><br>
                    <input type="text" id="description" name="image" class="form-control" value="<?= $recipe['image'] ?>"></input>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning mt-2">Créer</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require('footer.php') ?>