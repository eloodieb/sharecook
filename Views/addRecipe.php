<?php require('header.php') ?>


<h2>Ajouter une recette</h2>


<form action="?action=addRecipe" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" required />
    </div>
    <div>
        <label for="description">Description</label><br />
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <label for="description">URL de l'image</label><br />
        <textarea id="description" name="image" required></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php require('footer.php') ?>
