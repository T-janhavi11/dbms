<?php
session_start();
include_once("includes/dbh.inc.php");
// if(!isset($_SESSION['username'])){
//         header("Location: login.php");
//      }
$page_title = "View all Judges";
include("inc/header.php");

?>
<?php include("inc/menu.php"); ?>
<div class="container">
 <br><br>
    <table class="table">
        <tr>
            <th>Judge ID</th>
            <th>Judge's name</th>
            <th>Email</th>
            <th>Mobile no.</th>
            <th>Case ID</th>
        </tr>
        <?php
        $query = "SELECT * FROM judge";
        $query_run=mysqli_query($conn,$query);
        while($data = mysqli_fetch_array($query_run)){
            
            ?>
            <tr>
                <td><?php echo $data['JID']?>   </td>
                <td><?php echo $data['JNAME'] ?>   </td>
                <td><?php echo $data['EMAIL']?></td>
                <td><?php echo $data['PHONE']?>  </td>
                <td><?php echo $data['CASE_ID']?> </td>
                
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>