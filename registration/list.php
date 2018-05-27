<?php
$servername = "localhost";
$username = "root";
$password = "clnvikas123";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,username,email,password,days FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "userName: " . $row["username"]. "email: " . $row["email"]. "password:" . $row["password"]. "days:" . $row["days"] ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>