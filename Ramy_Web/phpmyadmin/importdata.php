<?php
$servername = "localhost";
$username = "mamp";
$password = "";
$dbname = "RUPP";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//mysqli == is the class that php create defualt // there are so many methods over there to use.
 // Check connection
if ($conn->connect_error) 
{
    die("Connection failed:
    " . $conn->connect_error);
}

$succes = "Import Succes";
echo $succes;
$sql = "SELECT * FROM `registration` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br> id: ". $row["id"]. " - Username: ". $row["username"]. " - Firstname: " . $row["firstname"] ." - Lastname: ". $row["lastname"]." - Location". $row["location"]." - Email: ". $row["email"]." - Mobile phone: ". $row["phone"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  $conn->close();
  ?>
  

