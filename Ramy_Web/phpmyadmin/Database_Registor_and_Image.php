
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    if(isset($_POST['submit'])){
        $option = $_POST['submit'];

        // Determine which PHP file to redirect to based on the selected option
        if ($option === 'registor' ) {
           
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
                echo "connected <br>";
                // SQL query without quotes around column names
                $sql = "INSERT INTO registration (username, firstname, lastname, location, email, phone) VALUES ('$username', '$firstname', '$lastname', '$location', '$email', '$phone')";
                $result = $conn->query($sql);
              //image
              $allowed_extensions = array("jpg","jpeg","png");
              $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
              if(!in_array($file_extension, $allowed_extensions)){
                  die("Invalid file format. Allowed formats: JPG, JPEG, PNG.");
              }
           
            $file_name = $_FILES['image']['tmp_name'];
            $folder = 'Images/'.basename($_FILES['image']['name']);
              // Use prepared statements to prevent SQL injection

              $query = mysqli_prepare($conn, "INSERT INTO image (file) VALUES (?)");
              mysqli_stmt_bind_param($query, "s", $folder);
              if(mysqli_stmt_execute($query)){
             
                  if(move_uploaded_file($file_name, $folder)){
                    header("Location: /Err/Ramy_Web/profile.php");
                      exit();
                  } else {
                      echo "<h2>File not uploaded</h2>";
                  }
              } else {
                  echo "<h2>Failed to insert into database</h2>";
              }
       
                // Close connection
                $conn->close();
              }
              
              
        } 
        else {
            // Handle unknown option (optional)
            echo "Invalid option selected.";
            // You can redirect to an error page or perform other actions
        }
    } else {
        // Handle if 'option' is not set (optional)
        echo "Option not selected.";
        // You can redirect to an error page or perform other actions
    }
} else {
    include"../profile.php";
    exit();
    // You can redirect to an error page or perform other actions
}
?>





