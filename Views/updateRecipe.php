<?php require('header.php') ?>

<h2 class="text-center mb-4">Mettre à jour une recette</h2>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="?action=updateRecipe&id=<?= $_GET['id'] ?>" method="post">
                <div class="mt-3">
                    <label for="title" class="form-label fw-bolder">Titre</label><br />
                    <input type="text" id="title" name="title" class="form-control" value="<?= $recipe['title'] ?>" />
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label fw-bolder">Description</label><br />
                    <textarea id="description" name="description" class="form-control" rows="15"><?= $recipe['description'] ?></textarea>
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label fw-bolder">URL de l'image</label><br>
                    <input type="text" id="description" name="image" class="form-control" value="<?= $recipe['image'] ?>"></input>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning mt-2">Modifier</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require('footer.php') ?>