<?php

require('Models/recipesModel.php');

session_start();

function listRecipes()
{
    $recipes = getAllRecipes();

    require('Views/home.php');
}

function recipe()
{
    $recipe = getOneRecipe($_GET['id']);

    require('Views/recipe.php');
}

function displayUpdateRecipe()
{
    $recipe = getOneRecipe($_GET['id']);

    require('Views/updateRecipe.php');
}

function deleteRecipe()
{
    deleteOneRecipe($_GET['id']);

    require('Views/addRecipe.php');
}

function displayAddRecipe()
{
    $recipes = getAllRecipes();
    require('Views/addRecipe.php');
}

function updateRecipe()
{
    updateOneRecipe($_GET['id'], $_POST['title'], $_POST['description'], $_POST['image']);
    require('Views/addRecipe.php');
}

function displayLogin()
{
    require('Views/login.php');
}

$action = "display";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

switch ($action) {

    case 'listRecipes':
        listRecipes();
        break;

    case 'recipe':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            recipe();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        break;

    case 'displayAddRecipe':
        displayAddRecipe();
        break;

    case 'addRecipe':
        if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['image'])) {
            addOneRecipe($_POST['title'], $_POST['description'], $_POST['image']);
            header('Location: ?action=listRecipes');
        }

        break;

    case 'displayLogin':
        displayLogin();
        break;

    case 'login':
        require('Models/adminModel.php');
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $adminId = getAdmin($_POST['username'], $_POST['password']);

            if ($adminId > 0) {
                $_SESSION['userId'] = $adminId;
                echo $_SESSION['userId'];
                header('Location: ?action=listRecipes');
            } else {
                $errorMsg = "Wrong login and/or password.";
                header('Location: ?action=displayLogin');
            }
        } else {
            header('Location: ?action=displayLogin');
            $errorMsg = "Identifiant ou mot de passe incorrectes";
        }

        break;

    case 'deleteRecipe':
        deleteOneRecipe($_GET['id']);
        header('Location: ?action=displayAddRecipe');
        break;

    case 'displayUpdateRecipe':
        displayUpdateRecipe($_GET['id']);
        break;

    case 'updateRecipe':
        updateRecipe();
        break;

    default:
        listRecipes();
}
