<?php
     require_once 'functions/helpers.php';
     require_once 'functions/pdo_connection.php';
     ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabi Ride</title>
    <link rel="icon" type="image/x-icon" href="./sabimages/Sabi ride 3.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
   
  </head>
  <body>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" i href="#"> <img src="./sabimages/Sabi ride 2.png" width="80px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
            $query = "SELECT * FROM categories;";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $categories = $statement->fetchAll();

            foreach ($categories as $category) { ?>
            <li class="nav-item ">
                <a class="nav-link " href="<?= url('category.php?cat_id=') . $category->id ?>"><?= $category->name ?></a>
            </li>

            <?php } ?>
      </ul>
      <div class="d-flex me-4 mb-1">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-globe me-1" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>EN</a>
      </div>
      <div class="d-flex">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Log In</a>
          </li>
         

        </ul>
        <button class="btn btn-primary" type="submit">Sign Up</button>
      </div>
    </div>
  </div>
</nav>

<!-- BLOG PAGE -->

<div class="col-md-4 container BLOG my-4">
    <h6 class="mb-0 fw-bold">LATEST</h6><hr>
    <div class="row">
    <?php
                        $query = "SELECT * FROM posts WHERE status = 10";
                         $statement = $pdo->prepare($query);
                         $statement->execute();
                         $posts = $statement->fetchAll();
                         foreach ($posts as $post) { ?>

        <div class="col-4 mb-md-4 mb-3">
            <img src="<?= asset($post->image) ?>" alt="" width="700">
        </div>
        <div class="col-4 mb-md-4 mb-3 float-end text-end">
            <h3 class="fw-bold"><?= $post->title ?></h3>
            <h5 class="fw-light"><?= substr($post->body, 0, 80) ?></h5>
            <p><a class="btn btn-primary" href="<?= url('detail.php?post_id=') . $post->id ?>" role="button">View details »</a></p>
        </div>
        <?php } ?>
    </div>
   
</div>



<!-- FOOTER --> 

<footer class="page-footer font-small blue py-4 my-3">
  <div class="container text-center text-md-left">

    <div class="row">
      <div class="col-md-3 mt-md-0 mt-3">
        <img src="./sabimages/Sabi ride 2.png" width="150" alt="">
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Rides</a>
          </li>
          <li>
            <a href="#!">Food Delivery</a>
          </li>
          <li>
            <a href="#!">Dispatch </a>
          </li>
          <li>
            <a href="#!">Vip </a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Partner with Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">sign up as driver</a>
          </li>
          <li>
            <a href="#!">Sign ypur car as vip</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Company</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">About us</a>
          </li>
          <li>
            <a href="#!">News and Update</a>
          </li>
          <li>
            <a href="#!">Brand guidelines</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"><img src="./sabimages/instagram.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="./sabimages/facebook.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="./sabimages/twitter.png" alt="" class="px-2" width="60"></a>
  </div>
</footer>







    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>