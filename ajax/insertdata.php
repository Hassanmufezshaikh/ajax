
<?php
// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajaxs";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connection successful!!";
}


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO ajaxtable (`name`, `email`, `contact`) VALUES ('$name', '$email', '$contact')";
$res = mysqli_query($conn, $sql);
if ($res) {
    echo "Data Inserted Successfully";
} else {
    echo "Data Not Inserted";
}
?>
