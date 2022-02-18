<?php
include_once('header.php');
?>
<div class="container">
    <form method="post" action="?action=login">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="username" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-warning">Se connecter</button>
        <?php
        if (isset($errorMsg)) {

            echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
        }
        ?>
    </form>
</div>

<?php
include_once('footer.php');
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>