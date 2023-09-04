<?php 
// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajaxs";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
} else {
    // echo "Connection successful!!";
}


$sql = "SELECT * FROM ajaxtable ";
$res = mysqli_query($conn, $sql);
if ($res) {
    echo "<div class='text-center my-4 px-5'>";
    echo "<table class='table'>";
    echo "<tr><th>Name</th><th>Email</th><th>Contact</th></tr>"; // Table headers
    
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "</div>";
    
}
 else{
    echo "No record formed";
}

?>