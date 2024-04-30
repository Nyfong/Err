<?php
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['latname'];
  $location = $_POST['location'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "userinform  ";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // SQL query without quotes around column names
  $sql = "INSERT INTO registration (username, firstname, lastname, location, email, phone, birthday ) VALUES ('$username', '$firstname', '$lastname', '$location', '$email', '$phone', '$birthday' )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close connection
  $conn->close();
}
?>