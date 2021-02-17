<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
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
p{
  text-align: center;
  padding: 16px;
  font-weight: 900;
  text-decoration: underline;
  font-size: 30px;

}

table

{
  width: 90%;

border-style:solid;

border-width:5px;

border-color: black;

}
th{
  text-align: center;
  padding: 16px;
  font-weight: 900;
  text-decoration: underline;
  font-size: 20px;

}
 td {
  text-align: center;
  padding: 16px;
  font-weight: bold;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
.bn{
padding: 10px 15px;
  font-size: 18px;
  text-align: center;
  border-radius: 15px;
  
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


</style>
</head>
<body>
  <p> TRANSACTION HISTORY</p>
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
    echo "<br>";
}
$sql = "SELECT * FROM `transaction`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
//echo $num;
echo "<table border='1' class='center'>";
echo"<tr>";
echo"<th>Sender</th>";
echo"<th>Receiver</th>";
echo"<th>Amount</th>";
echo" </tr>";
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>";

  echo "<td>" . $row['sender'] . "</td>";

  echo "<td>" . $row['receiver'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
  
 
	echo "</tr>";
    }
    echo "</table>";


}
?>
<script>
    function openPage() {
      window.open("p1.php", "_self")
    };
  </script>
<br>
<div class="container">
  <div class="bncenter">
<input type="button" value="back" onclick="openPage()" class="bn">
</div>
</div>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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