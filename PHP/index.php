<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Customer</title>
</head>

<body>
 

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-dark alert-dismissible fade show mt-5" role="alert" style="background-color: orangered; color:white; font-weight: bold;">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="form.php" class="btn btn-dark mb-3"style="background-color: black; color:white; font-weight: bold; border:2px solid orangered; margin-left:1px; margin-top:30px; position:relative; top:59px;"  >ADD</a>

    <table class="table table-hover text-center" style="margin-top:70px; background-color:whitesmoke;"  >
    <thead style="background-color: orangered; color: white;">
        <tr>
          <th scope="col">FIRST NAME</th>
          <th scope="col">LAST NAME</th>
          <th scope="col">FULL ADDRESS</th>
          <th scope="col">EMAIL ADDRESS</th>
          <th scope="col">PHONE NUMBER</th>
          <th scope="col">INSTRUMENT</th>
          <th scope="col">QUANTITY</th>
          <th scope="col">BRAND</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once 'function.php';
        $result = display();
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Firstname"] ?></td>
            <td><?php echo $row["Lastname"] ?></td>
            <td><?php echo $row["FullAddress"] ?></td>
            <td><?php echo $row["EmailAddress"] ?></td>
            <td><?php echo $row["PhoneNumber"] ?></td>
            <td><?php echo $row["Instrument"] ?></td>
            <td><?php echo $row["Qty"] ?></td>
            <td><?php echo $row["Brand"] ?></td>
            <td>

              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-8 me-3">UPDATE</i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i>DELETE</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

     <a href="../HTML/menu.html" style="margin-top:10px; background-color:black; list-style: none; text-decoration: none; color: white; font-weight:bold; border:2px solid orangered; padding:7px 7px 7px 7px; margin-left:198px; position:relative; bottom:664px; border-radius:5px; position:fixed;" >HOME</a>   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>