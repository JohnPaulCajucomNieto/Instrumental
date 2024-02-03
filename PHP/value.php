<?php 

session_start();
$connection = mysqli_connect("localhost","root","","customer");

if(isset($_POST['submit'])){
    $first_name = $_POST["Firstname"];
      $last_name = $_POST["Lastname"];
      $full_address = $_POST["FullAddress"];
      $email_address = $_POST["EmailAddress"];
      $phone_number = $_POST["PhoneNumber"];
      $instrument = $_POST["Instrument"];
      $quantity = $_POST["Qty"];
      $brand = $_POST["Brand"];

    $insert_query = "INSERT INTO customerorders(FirstName, LastName, FullAddress, EmailAddress, PhoneNumber, Instrument, Qty, Brand)
     VALUES('$first_name','$last_name','$full_address', '$email_address', '$phone_number', '$instrument', '$quantity', '$brand')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "Data Added!";
        header('location:index.php');
    }else{
        $_SESSION['status'] = "Data not added!";
        header('location: index.php');
    }

}

?>
