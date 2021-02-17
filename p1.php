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


</style>
</head>
<body>
 
<script>
    function openPage() {
      window.open("p3.php", "_self")
    };
  </script>
<nav class="navbar navbar-expand-sm bg-dark ">
    <a class="navbar-brand" href="#">
      <img src="icon.png" width="35" height="35" class="d-inline-block align-top"
        alt="">
      Piggy Bank
    </a>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p3.php" onclick="openPage()">Transactions</a>
      </li>
      
    </ul>
  </nav>
  <br>
  <p> DETAILS OF CUSTOMERS</p>

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
$sql = "SELECT * FROM `detail`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
//echo $num;
echo "<table border='1' class='center'>";
echo"<tr>";
echo"<th>NAME</th>";
echo"<th>ACCOUNT NUMBER</th>";
echo"<th>EMAIL ADDRESS</th>";
echo"<th>BALANCE</th>";

echo" </tr>";
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Account Number'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>". $row['Balance']."</td>";
 
	echo "</tr>";
    }
    echo "</table>";


}
?>

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