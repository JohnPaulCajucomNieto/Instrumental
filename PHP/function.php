<?php 

    require_once 'db_conn.php';

    function display(){
        global $con;
        $query = "SELECT * FROM customerorders";
        $result = mysqli_query($con,$query);
        return $result;
    }
?>