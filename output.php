<?php include "dbout.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Booking</title>
        <link rel="stylesheet" href="ouput.css">
    </head>

    <body>
      <div class="container">

        <div class="logo">
            <img class="img" src="cargo.png" alt="">
          <div class="text">
            <h3>85/7,Prabhat Road,Pune,Maharashtra</h3>
            <h5>Tel no.: 0217-2732842</h5>
          </div>
        </div>

        <?php
                if(isset($_POST['check'])){
                  $search_item = $_POST['search'];
                  $query = "select * from customer where phone_no = '{$search_item}'";
                  $search_connection = mysqli_query($connection,$query);



                  while($row = mysqli_fetch_assoc($search_connection)) {
                  $name = $row['name'];
                  $from_address = $row['from_address'];
                  $to_address = $row['to_address'];
                  $shipping_date = $row['shipping_date'];
                  $status = $row['status'];



      ?>


<div class="container1">
  <h2>RECEIPT</h2>
    <table>
      <tr>
        <th>Name</th>
        <?php echo "<td>{$name}</td>"; ?>
      </tr>
      <tr>
        <th>Starting Address</th>
        <?php echo "<td>{$from_address}</td>"; ?>
      </tr>
      <tr>
        <th>Destination Address</th>
        <?php echo "<td>{$to_address}</td>"; ?>
      </tr>
      <tr>
        <th>Shipping Date</th>
        <?php echo "<td>{$shipping_date}</td>"; ?>
      </tr>
      <tr>
      <th>Status</th>
        <?php echo "<td>{$status}</td>"; ?>
      </tr>
    </table>
</div>
<?php
    }
}
 ?>

<section class="qr">
  <img src="qr.jpg" class="qrimg" alt="">
</section>








      </div>


    </body>
