
<?php
$servername = "localhost";
$username = "Pamitha";
$password = "Pami0805";
$dbname = "voting_system";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// config.php
define('SECRET_KEY', 'votingkey');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

