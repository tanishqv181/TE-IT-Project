<?php
// Connect to the data base
    include "dbout.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    //security
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($connection, $username);
    $password=mysqli_real_escape_string($connection, $password);
//  select data base "VAST"
    mysqli_select_db($connection,"vast");
// copy all usernames and passwords to result array
    $result=mysqli_query($connection,"select * from admin where username='$username' and password='$password'");
// select single enrty from result array
    $row=mysqli_fetch_array($result);
    // check if given username and password match to any f the existing admins.
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success";
        ?>

        <a href="admin/admin.php">Click here to continue</a>
        <?php
    } else {
        echo "failed to login";
    }
?>
