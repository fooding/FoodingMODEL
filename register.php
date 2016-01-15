<?php
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];


echo $name;
if($phone == '' || $name == '' || $password == '' || $email == ''){
    echo 'please fill all values';
}

else{

    require_once('dbConnect.php');
    $sql = "SELECT * FROM User WHERE name='$name' AND email='$email'";
    $check = mysqli_fetch_array(mysqli_query($con,$sql));

    if(isset($check)){
        echo 'username or email already exist';
    }

    else{
        $sql = "INSERT INTO User (email,name,password,phonenum,created_at) VALUES('$email','$name','$password','$phone',now())";

        if(mysqli_query($con,$sql)){
            echo 'successfully registered';
        }

        else{
            echo 'oops! Please try again!';
        }

    }

    mysqli_close($con);
}


?>