<?php
$s = "select * from client where fname = '$fname'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$reg = "insert into client(CID,fname, mname, lname, phone, bday, gender, password) values ('$CID','$fname', '$mname', 
    '$lname', '$phone', '$bday', '$gender', '$password')";
mysqli_query($con,$reg);
echo "Successfully registered";

?>