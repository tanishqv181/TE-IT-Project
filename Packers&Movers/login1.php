<?php include "dbout.php"; ?>

<?php

if(isset($_POST['login'])){

 $username  = $_POST['username'];
 $password =  $_POST['password'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT * FROM users WWHERE username = '{$username}'";
  $user = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($user))
  {
    echo $db_id = $row['user_id'];
  }
}


 ?>
