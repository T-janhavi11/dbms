<?php
session_start();
include_once("includes/dbh.inc.php");
$page_title = "Dashboard";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>CLF</title>
  </head>
  <body>
  <!-- Navigation bar --> 
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cegal Law Firm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="application.php">Application</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Check
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Hearing date</a>
          <a class="dropdown-item" href="#">Hearing time</a>
          <a class="dropdown-item" href="view_judge.php">View Judge</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Status</a>
        </div>
      </li>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<?php include("inc/menu.php"); ?>

<!--Caroussel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        
      <img class="d-block w-100" src="tingey-injury-law-firm-DZpc4UY8ZtY-unsplash.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="scott-graham-OQMZwNd3ThU-unsplash.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="giammarco-boscaro-zeH-ljawHtg-unsplash.jpg" alt="Third slide">
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

<!--Details-->
<section class="my-5">
    <div class="py-5">
        <h1 class="text-center">Finding something?</h1>
    </div>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            
            <img class="img-fluid imgdetails" src="chelsea-ferenando-LmYENEcVmqM-unsplash.jpg" alt="Responsive-image"> 
        </div>
        <div class="col-lg-6 col-md-6 col-12">
           <p class="py-4">  <h4 class="display-4"> Chelsea Doppler </h4> Cegal law firm(CLF) is the new generation law firm founded 
           by Ms. Chelsea doppler . The firm provides
            the users, clients, lawyers updates, suggestions, communication
            and consultation all at one place.
            We here can check the case date, time and matter data. (provided that the
            context of the case will be kept secure)   
            Users can contact any lawyer where the contact info will be provided.
            Lawyers and judges can keep the track of ongoing cases and can view the 
            case details like client name and opposition organisation
           </p>
           <p class="py-5">
            Need to find details of advocates? 
            <p><button type="button" class="btn btn-secondary" ><a href="application.php">More Lawyers</a></button></p>
           </p>
        </div>
    </div>
    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>
<footer class="footer">
  <a href="application.php">Contact us</a>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>