
<?php


$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";      // Leave password empty for XAMPP
$dbname = "login_system";  // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(mysqli_connect_errno()){

    echo"cant connect";

}

?>
