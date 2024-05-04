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
  $username = "mamp";
  $password = "";
  $dbname = "RUPP";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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