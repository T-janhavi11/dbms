<?php
session_start();
include_once("includes/dbh.inc.php");

$page_title = "View all Clients";
include("inc/header.php");

?>

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

<?php include("inc/menu.php"); ?>
<div class="container">
 <br><br>
    <table class="table">
        <tr>
            <th>Case ID</th>
            <th>Type</th>
            <th>Fees</th>
            <th>Case_date</th>
            <th>Case_time</th>
          
        </tr>
        <?php
        $query = "SELECT * FROM lacase";
        $query_run=mysqli_query($conn,$query);
        while($data = mysqli_fetch_array($query_run)){
            
            ?>
            <tr>
                <td><?php echo $data['CASE_ID']?>   </td>
                <td><?php echo $data['TYPE'] ?>   </td>
                <td><?php echo $data['FEES'] ?>   </td>
                <td><?php echo $data['CASE_DATE'] ?>   </td>
                <td><?php echo $data['CASE_TIME']?>  </td>
       
                
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>