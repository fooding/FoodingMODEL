<?php
/**
 * Created by PhpStorm.
 * User: sanghyunjeon
 * Date: 16. 1. 14.
 * Time: 오후 4:55
 */


$email=$_GET['email'];

require_once('dbConnect.php');
$sql = "SELECT uid FROM User WHERE email='$email'";

$uid = mysqli_query($con,$sql);


$sql = "SELECT Data,tag_list,Text FROM Diary WHERE uid='$uid'";




if(mysqli_query($con,$sql)){
    echo 'success';
}

else{
    echo 'fail';
}

mysqli_close($con);






?>