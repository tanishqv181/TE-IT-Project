<?php
include "db.php";
 ?>
<?php

      if(isset($_POST['updatebtn'])){

        $id = $_POST['edit_status'];
        $sta = $_POST['cus_status'];

        $query = "UPDATE customer SET status='$sta' WHERE phone_no = '$id' ";
        $query_run = mysqli_query($connection,$query);

        if($query_run){
          header("location:http://localhost/packers&Movers/admin/book.php");
        }
      }


if(isset($_POST['delete_btn'])) {

  $d_id = $_POST['delete_id'];

  $query = "DELETE FROM services WHERE ser_id='$d_id'";
  $query_run = mysqli_query($connection, $query);

  if($query_run)
  {
    header('Location:http://localhost/packers&Movers/admin/allservices.php');
  }

}







 ?>
