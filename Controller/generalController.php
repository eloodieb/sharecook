<?php

require('Models/recipesModel.php');

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


function displayAddRecipe(){
    require('Views/addRecipe.php');
}

function displayLogin(){
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
        }
        else {
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
                    header('Location: ?action=listRecipes');
                } else {
                    $errorMsg = "Wrong login and/or password.";
                }
            }
           
    
         break;

        default:
        listRecipes();
}