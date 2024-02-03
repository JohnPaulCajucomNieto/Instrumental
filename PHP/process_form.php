<?php

$dbHost = "localhost";
$dbUser = "root"; 
$dbPass = ""; 
$dbname = "customer"; 

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Firstname = $_POST["Firstname"];
    $Lastname = $_POST["Lastname"];
    $FullAddress = $_POST["FullAddress"];
    $EmailAddress = $_POST["EmailAddress"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $Instrument = $_POST["Instrument"];
    $Qty = $_POST["Qty"];
    $Brand = $_POST["Brand"];

 
    $sql = "INSERT INTO customerorders (Firstname, Lastname, FullAddress, EmailAddress, PhoneNumber, Instrument, Qty, Brand)
            VALUES ('$Firstname', '$Lastname', '$FullAddress', '$EmailAddress', '$PhoneNumber', '$Instrument', $Qty, '$Brand')";

    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
    } else {
        header('location: index.php');
    }
}

$conn->close();
?>
