require_once 'config.php';
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sqluser');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'MyShop');
?>


<?php
$servername = "localhost"; // Change to your database server
$username = "sqluser";        // Change to your database username
$password = "password";            // Change to your database password
$dbname = "MyShop";    // Change to your database name

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
