<?php include "dbout.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
    </head>
    <link rel="stylesheet" href="feedback.css">
    <body>
        <div class="form-card">
            <form  method="post" action="" name="form">
                <h1>Write US</h1>
                <div class="all">
                  <label for="">Name</label>
                <input type="text" placeholder="" name="name">
                  <label for="">Email</label>
                <input type="email" placeholder="" name="email">
                  <label for="">Your Message for us:</label>
                <textarea class="textarea" name="message" id="" cols="30" rows="5" placeholder="" ></textarea>

                <input type="submit" value="SEND" name="Submit" />
              </div>
            </form>
        </div>

        <?php

        if(isset($_POST['Submit'])){

            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Message = $_POST['message'];


            $query = "INSERT INTO feedback(name,email,message)";

            $query .= "VALUES('{$Name}','{$Email}','{$Message}')";

            $server = mysqli_query($connection, $query);


        }


         ?>


</body>
</html>
