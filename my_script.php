require 'vendor/autoload.php';
<?php
$servername = "Admin"; // Change to your database server
$username = "admin";        // Change to your database username
$password = "admin";            // Change to your database password
$dbname = "Ecommerce_site";    // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query example
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>

