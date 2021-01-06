<?php include "dbout.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Booking</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <link rel="stylesheet" href="main.css">
        <script>
            $(document).ready(function(){
                $(".check-form").hide();
                $(".check").css("background","none");

                $(".check").click(function(){
                    $(".book-form").hide();
                    $(".check-form").show();
                    $(".Book").css("background","none");
                    $(".check").css("background","#fff");
                });

                $(".Book").click(function(){
                    $(".book-form").show();
                    $(".check-form").hide();
                    $(".Book").css("background","#fff");
                    $(".check").css("background","none");
                });
            });
        </script>
    </head>
    <body>
        <nav>

            <div class="logo">
              <h3>Packers And Movers</h3>
            </div>


            <ul class="nav-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="booking.php">Booking</a></li>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="feedback_form.php">Feedback</a></li>
            </ul>

            <div class="burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
          </nav>

        <div class="container">
            <div class="Book">
                Book
            </div>
            <div class="check">
                Check Status
            </div>

<?php

if(isset($_POST['customer'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $from_address = $_POST['from_address'];
    $to_address = $_POST['to_address'];
    $shipping_date = $_POST['shipping_date'];
    $w_d_s = $_POST['w_d_s'];
    $all_items = $_POST['all_items'];


    $query = "INSERT INTO customer(name,email,phone_no,from_city,to_city,from_address,to_address,shipping_date,w_d_s,all_items)";

    $query .= "VALUES('{$name}','{$email}','{$phone_no}','{$from_city}','{$to_city}','{$from_address}','{$to_address}','{$shipping_date}','{$w_d_s}','{$all_items}')";

    $client = mysqli_query($connection, $query);


}


 ?>


        <form onsubmit="return world()" action="" method="post" >
            <div class="book-form">

                    <label for="">Name:</label>
                    <input type="text" class="input" id="name" name="name" placeholder="" required pattern="[A-Z a-z]{3,100}"><br>


                    <label for="">Email:</label>
                    <input type="text" class="input" id="email" name="email" placeholder=""><br>

                    <label for="">Mobile No.</label>
                    <input type="tel" class="input" id="phone_no" name="phone_no" placeholder="" required pattern="[0-9]{10}"><br>


                    <label for="">Start City</label>
                    <input type="text" class="input" name="from_city" id="from_city" placeholder=""><br>

                    <label for="">Destination City</label>
                    <input type="text" class="input" name="to_city" id="to_city" placeholder=""><br>

                    <label for="">Start Address</label>
                    <input type="text" class="input" name="from_address" id="from_address" placeholder=""><br>

                    <label for="">Destination Address</label>
                    <input type="text" class="input" name="to_address" id="to_address" placeholder=""><br>


                    <label>Date</label>
                    <input type="date" class="input" name="shipping_date" id="shipping_date" placeholder=""><br>


                    <label>What do you want to shift?</label>
                    <input type="text" class="input" name="w_d_s" id="w_d_s" placeholder=""><br>


                    <label>Please mention all the items</label>
                    <textarea class="textarea" name="all_items" id="all_items" cols="30" rows="5" placeholder="message..." ></textarea><br>

                    <input type="submit" value="Submit" class="btn" name="customer" id="submit">


            </div>
          </form>




          <form class="" action="output.php" method="post">
            <div class="check-form">
                <label for="check">Enter your Phone number</label>
                <input type="text" class="input" name="search"><br>
                <input type="submit" value="Check" class="btn" name="check">
            </div>
          </form>



        </div>
        <script src="main.js"></script>
        <script type="text/javascript" src="validation.js">
        </script>
    </body>
</html>
