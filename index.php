<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> travel</title>
  <link rel="stylesheet" href="C:\xampp\htdocs\phpt\style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200&family=Golos+Text&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="display:flexbox">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">JUBLIE PARK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto me-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact_Us.php">Contact Us</a>
          </li>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </div>
  </nav>

  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="png.png" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>JUBLIE PARK</h3>
          <p>STEEL CITY JAMSHEDPUR</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="png1.jpg" alt="Chicago" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>JUBLIE PARK</h3>
          <p>STEEL CITY JAMSHEDPUR</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="png3.jpg" alt="New York" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>JUBLIE PARK</h3>
          <p>STEEL CITY JAMSHEDUR</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <section class="my-5" style="text-align: center;">
    <h2 class="text-centre">About Us</h2>
  </section>

  <div class="container-about">
    <div class="Raw">
      <div class="col-lg-6 col-mb-6 col-12">
        <img src="kkr.png" class="image-fluid">
      </div>
      <div class="col-lg-6 col-mb-6 col-12">
        <h2>I am kartik mahato</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi omnis ipsa nisi suscipit,
        eum nulla consequuntur nobis ab veniam dolores.</p>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>