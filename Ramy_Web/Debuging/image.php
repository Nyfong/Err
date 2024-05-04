<?php
include_once 'registration.php';
$servername = "localhost";
$username = "mamp";
$password = "";
$database = "RUPP";

// Attempt to connect to MySQL database
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    // Validate file type if necessary
    $allowed_extensions = array("jpg","jpeg","png");
    $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if(!in_array($file_extension, $allowed_extensions)){
        die("Invalid file format. Allowed formats: JPG, JPEG, PNG.");
    }

    $file_name = $_FILES['image']['tmp_name'];
    $folder = './StorageImage/Images/'.basename($_FILES['image']['name']);
    
    // Use prepared statements to prevent SQL injection
    $query = mysqli_prepare($conn, "INSERT INTO image (file) VALUES (?)");
    mysqli_stmt_bind_param($query, "s", $folder);
    if(mysqli_stmt_execute($query)){
        if(move_uploaded_file($file_name, $folder)){
            include "./profile.php";
            exit();
        } else {
            echo "<h2>File not uploaded</h2>";
        }
    } else {
        echo "<h2>Failed to insert into database</h2>";
    }
}

$res = mysqli_query($conn, "SELECT * FROM image");
while($row = mysqli_fetch_assoc($res)){
?>
<img src="<?php echo $row['file']; ?>" /> 
<?php } ?>
