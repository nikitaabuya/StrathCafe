<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home Page</title>

    <style>
        .form-control{min-width: 300px;}
        .btn{min-width: 300px;}
        .row{min-height:400px;}
        .row{min-height:400px;}
        .container{margin-top:50px; margin-bottom:50px;}
    </style>
    
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        <img src="logo.png" class="img-fluid" width="30px"><strong>StrathCafe</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
        </ul>

        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-user"></i><strong> <?=$_SESSION['FirstName'];?> <?=$_SESSION['LastName'];?> - <?=$_SESSION['AdmissionNumber'];?></strong></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="profile.php">View Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>

      </div>
    </nav>


   <!-- Page Content -->
  <div class="container">

<div class="row">

  <div class="col-lg-3">

<br/>
<br/>

    <h1 class="my-4">Cafeteria Names</h1>
    <div class="list-group">
      <a href="strathmore.php" class="list-group-item">Strathmore Cafeteria</a>
      <a href="kilimanjaro.php" class="list-group-item">Kilimanjaro Cafeteria</a>
      <a href="pate.php" class="list-group-item">Pate Cafeteria</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <!-- image from website--> <img class="d-block img-fluid" src="https://test.1prof.by/upload/news_img/big_picture/900_900_keks.jpg" alt="First slide">
        </div>
        <div class="carousel-item"> <!--Image from website-->
          <img class="d-block img-fluid" src="https://www.bento.de/images/00000000-0003-0004-0000-000000043821_w900_fpx50_fpy50.jpg" alt="Second slide">
        </div>
        <div class="carousel-item"> <!--Image from website-->
          <img class="d-block img-fluid" src="https://www.bigodino.it/wp-content/uploads/2019/03/menu-8-marzo-900x600.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://www.t-mag.it/wp-content/uploads/2018/10/muffins-1844458_1920-e1540305249640.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Breakfast and Brunch</a>
            </h4>
            <h5>$$</h5>
            <p class="card-text">Enjoy some of the best foods you can eat in the morning! Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://lapidus-london.webnode.com/_files/200000002-508cd51816/700/coffee-2306471_960_720.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Tea and Coffee</a>
            </h4>
            <h5>$$$</h5>
            <p class="card-text">Try out our warm cups of tea and coffee any time of the day. Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://cintaihidup.com/wp-content/uploads/2017/05/nasi-216419_1920-700x467.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Meals</a>
            </h4>
            <h5>$$</h5>
            <p class="card-text">Offered food items that will fill you up! Prices ranging on amounts ordered! Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://cfile235.uf.daum.net/image/2517C1415937B07A32CE0D" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Salads</a>
            </h4>
            <h5>$</h5>
            <p class="card-text">Fruit salads, green salads, chef salads and a variety to choose from! Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://livelovelook.ru/images/july2016/177-2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Ice creams and yorghuts</a>
            </h4>
            <h5>$</h5>
            <p class="card-text">Need to cool down? Try our frozen treats. Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://www.womanhit.ru/media/CACHE/images/articleimage2/2019/3/burger-1156564960720-1/4d77005533d217fa46f96a34d1721ef3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Fast food</a>
            </h4>
            <h5>$$</h5>
            <p class="card-text">Opting for a quick meal at a short time? Look no further! Click here for more information...</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-primary">
<div class="container">
  <p class="m-0 text-center text-white">&copy; Copyright 2019 StrathCafe is a registered trademark</p>
</div>
<!-- /.container -->
</footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

















