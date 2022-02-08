<?php

function getAllRecipes()
{
	
	$db = dbConnect();

	$req = $db->query('SELECT id, title, description, image, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM recipes ORDER BY creation_date DESC LIMIT 0, 5');

	return $req;
}


function getOneRecipe($recipeId)
{
   
    $db = dbConnect();

    $req = $db->prepare('SELECT id, title, description, image, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM recipes WHERE id = ?');
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

    return $db->lastInsertId();

}

function deleteOneRecipe($recipeId)
{
   
    $db = dbConnect();
 
    $req = $db->prepare('DELETE * FROM recipes WHERE id = ?');
    $req->execute(array($recipeId));
    $recipe = $req->fetch();

    return $recipe;
}

function updateOneRecipe($recipeId)
{
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO id, title, description, image, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM recipes');
    $req->execute(array($recipeId));
    $recipe = $req->fetch();

    return $recipe;
}


// Connexion à la BDD
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=sharecook;charset=utf8', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}