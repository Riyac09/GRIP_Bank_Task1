<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
body
{
  background-image: url(bg4.jpg);
  background-repeat: no-repeat;
  background-position: center;
}
.container { 
  height: 50px;
  position: relative;
   
}
.bncenter{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.content{
    border-style: dashed;
}
h2{
    text-align: center;
    color:black;
    padding:20px;
}
p{
    text-align: center;
    color:black;
    padding:20px;
}
</style>
</head>
<body>

<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo " ";
}
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$amount=$_REQUEST['amount'];
$sql="INSERT INTO `transaction`(`sender`, `receiver`, `amount`) VALUES ('$from','$to','$amount')";
if(mysqli_query($conn, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$sql1="UPDATE `detail`
SET balance = balance - $amount
WHERE Name = '$from'";
$sql2="UPDATE `detail`
SET balance = balance + $amount
WHERE Name = '$to'";
if(mysqli_query($conn, $sql1)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
if(mysqli_query($conn, $sql2)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
}

?>
<script>
    function openPage() {
      window.open("index.html", "_self")
    };
  </script>
<div class="content">
    <h2>Transaction successful!!<h2>

   <p> To check the transaction history <a href="p3.php">click here</a></p>
</div>
<br>
<div class="container">
  <div class="bncenter">
<input type="button" value="back" onclick="openPage()" class="bn">
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>
</html>