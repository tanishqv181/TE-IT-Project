<?php include "dbout.php" ?>


<?php

if(isset($_POST['check']))
{
  $search_object = $_POST['search'];
  $query = "select * from customer where phone_no = '{$search_object}'";
  $search_connection = mysqli_query($connection,$query);

  while($row = mysqli_fetch_assoc($search_connection)) {
  $name = $row['name'];
  $email = $row['email'];
  $phone_no = $row['phone_no'];
  $from_city = $row['from_city'];
  $to_city = $row['to_city'];
  $from_address = $row['to_address'];
  $to_address = $row['to_address'];
  $shipping_date = $row['shipping_date'];
  $w_d_s = $row['w_d_s'];
  $all_items = $row['all_items'];
  $status = $row['status'];


  echo "<tr>";
    echo "<td>{$name}</td>";
    echo "<td>{$email}</td>";
    echo "<td>{$phone_no}</td>";
    echo "<td>{$from_city}</td>";
    echo "<td>{$to_city}</td>";
    echo "<td>{$from_address}</td>";
    echo "<td>{$to_address}</td>";
    echo "<td>{$shipping_date}</td>";
    echo "<td>{$w_d_s}</td>";
    echo "<td>{$all_items}</td>";
    echo "<td>{$status}</td>";
  echo "</tr>";
    }
}


 ?>
