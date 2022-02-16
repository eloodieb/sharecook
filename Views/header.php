<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Share Cooking</title>
</head>

<body>

  <div class="container-fluid p-3 bg-warning ">
    <nav class=" container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
        <img class="img-fluid" src="Public/img/logo-small.png" alt="">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 text-dark fw-bold">Home</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <?php
        if (isset($_SESSION['adminId'])) {
        ?>
          <li class="nav-item">
            <button type="button" class="btn me-2 fw-bold">Logout</button>
          </li>
        <?php
        } else {
        ?>
          <a href="index.php?action=displayLogin" class="btn btn-light fw-bold">Login</a>
        <?php
        }
        ?>
      </div>
    </nav>
  </div>

  <header class="container-fluid py-5 mb-5 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- font vibur ! -->
          <img class="img-fluid" src="Public/img/welcome.png" alt="">
        </div>

        <div class="col-md-6">
          <img class="img-fluid" src="Public/img/bookcook.png" alt="">
        </div>
      </div>
    </div>
  </header>