<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql= "SELECT * FROM User WHERE email='$email' AND password='$password'";

    require_once('dbConnect.php');

    $result = mysqli_query($con,$sql);

    $check = mysqli_fetch_array($result);
    
    if(isset($check)) {
        echo "success";
    }
    else {
        echo "fail";
    }
    mysqli_close($con);

?>