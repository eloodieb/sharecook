<?php

include('database.php');

function getAllRecipes()
{

    $db = dbConnect();

    $req = $db->query('SELECT id, title, description, image, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM recipes ORDER BY creation_date DESC LIMIT 0, 5');

    return $req;
}

function getOneRecipe($recipeId)
{

    $db = dbConnect();

    $req = $db->prepare('SELECT id, title, description, image, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM recipes WHERE id = ?');
    $req->execute(array($recipeId));
    $post = $req->fetch();

    return $post;
}

function addOneRecipe($title, $description, $image)
{

    $db = dbConnect();
    $recipes = $db->prepare('INSERT INTO recipes(title, description, image) VALUES(:title, :description, :image)');
    $recipes->execute(
        array(
            "title" => $title,
            "description" => $description,
            "image" => $image
        )
    );

    return $recipes;
}

function deleteOneRecipe($recipeId)
{

    $db = dbConnect();

    $req = $db->query("DELETE FROM recipes where id = $recipeId");
}

function updateOneRecipe($id, $title, $description, $image)
{
    $db = dbConnect();

    $req = $db->prepare('Update recipes set title = :title, description = :description, image = :image where id = :id');
    $req->execute(
        array(
            "title" => $title,
            "description" => $description,
            "image" => $image,
            "id" => $id
        )
    );
}
