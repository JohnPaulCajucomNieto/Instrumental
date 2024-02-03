<?php
include 'db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($con, $id);

    $sql = "DELETE FROM customerorders WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if($result){
        header('location:index.php');
    } else {
        header('location:index.php');
    }
}
?>