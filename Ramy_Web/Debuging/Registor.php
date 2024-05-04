<?php

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $location = $_POST['location'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];

  $servername = "localhost";
  $Username = "mamp";
  $password = "";
  $dbname = "RUPP";

  // Create connection
  $conn = new mysqli($servername, $Username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "connected";
  // SQL query without quotes around column names
  $sql = "INSERT INTO registration (username, firstname, lastname, location, email, phone) VALUES ('$username', '$firstname', '$lastname', '$location', '$email', '$phone')";

  $result = $conn->query($sql);
  if ( $result === TRUE) {
   
    include "./profile.php";
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "fail";
    
  }

  // Close connection
  $conn->close();
}
?>