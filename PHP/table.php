<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}

$sql1 = 'CREATE TABLE customerorders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Firstname VARCHAR(30) NOT NULL,
  Lastname VARCHAR(30) NOT NULL,
  FullAddress VARCHAR(50) NOT NULL,
  EmailAddress VARCHAR(30) NOT NULL,
  PhoneNumber VARCHAR(15) NOT NULL,
  Instrument VARCHAR(30) NOT NULL,
  Qty INT NOT NULL,
  Brand VARCHAR(30) NOT NULL
)';

if ($conn->query($sql1) === TRUE) {
    echo "TABLE customerorders CREATED SUCCESSFULLY";
} else {
    echo "ERROR CREATING TABLE: " . $conn->error;
}
$conn->close();
?>
