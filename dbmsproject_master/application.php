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
  <style>
body  {
  background-image: url("hunters-race-MYbhN8KaaEc-unsplash.jpg");
  background-color: #cccccc;
  opacity: 80%;
  height:100%;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<?php include("inc/menu.php"); ?>

<h1></h1>
<!--Application-->
<style>
    * {
  box-sizing: border-box;
}
.column {
  float: none;
  width: 80%;
  padding: 10 10px;
}
.row {margin: 0 -5px;}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>

<div class="row my-10 py-10 container-fluid">
  <div class="column">
    <div class="card">
        
    <!--form-->
  
    <div > 

        <form action="userinfo.php" method="POST">
    <div class="w-50 m-auto">
    <div class="input-group mb-3">
  
  </div>
  <div class="form-group">
    <input type="text" name="CID" id="CID" placeholder="Your ID(C0006)"autocorrect="off" class="form-control">
    </div>
 <div class="form-group">
    <input type="text" name="fname" id="fname" placeholder="firstname "autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="mname" id="mname" placeholder="middlename"autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="lname" id="lname" placeholder="lastname"autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="phone" id="phone" placeholder="Mobile number "autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
        Birthday
    <input  type="text" name="bday" id="bday" placeholder="YYYY-MM-DD "autocorrect="off" class="form-control">
    </div>
    <div class="form-group">
    <input type="text" name="gender" id="gender" placeholder="Gender (M,F,O) "autocorrect="off" class="form-control">
    </div>

<label for="pwd">Password:</label>
<input type="password" id="password" name="password">


  
  
<div>
   <button class="btn btn-secondary"> <input type="submit" id="submit" value=""  >Submit</input></button></div>
  </div>
 

</form>
   </div>
</div>
</div>

<!--footer-->
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