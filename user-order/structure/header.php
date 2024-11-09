<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        background-color: #fafafa;

    }
    .nav-buttons{
    margin-left: 50%;

    }

    .navbar-nav {
        gap: 10px;
    }
    .navbar-nav .nav-item .nav-link{
        padding:0 20px;
        color: #090909; 
    }
    .navbar i{
        padding: 0 15px;
        cursor: pointer;
    }
</style>
<body>
<!-- navBar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary py-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mini E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-buttons" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
 

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/php/user-order/About_us.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/php/user-order/categories.php">Shop</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/php/user-order/contact.php">Contact Us</a>
        </li>

        <li class="nav-item">
        <i class="fa-solid fa-user"></i>
        </li>
        <li class="nav-item">
        <i class="fa-solid fa-cart-shopping"></i>
       </li>

    </div>
  </div>
</nav>

</body>
</html>