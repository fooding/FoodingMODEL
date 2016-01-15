<?php
/**
 * Created by PhpStorm.
 * User: sanghyunjeon
 * Date: 16. 1. 14.
 * Time: 오후 4:52
 */
$email=$_POST['email'];
$tag = $_POST['tag_list'];   ##tag format: #apple#cup#food -> process in client
$text = $_POST['text'];
$image = $_POST['image'];
 
 
 
 






require_once('dbConnect.php');
$sql = "SELECT uid FROM User WHERE email='$email'";

$uid = mysqli_query($con,$sql);

$sql = "INSERT INTO Diary (Data,tag_list,Text,uid) VALUES(now(),'$tag','$text','$uid')";



mysqli_query($con,$sql)
 

UPDATE Users SET weight = 160, desiredWeight = 145 WHERE id = 1;




$sql = "INSERT INTO images (image) VALUES (?)";
 
$stmt = mysqli_prepare($con,$sql);
 
mysqli_stmt_bind_param($stmt,"s",$image);
mysqli_stmt_execute($stmt);
 
$check = mysqli_stmt_affected_rows($stmt);



if(){
    echo 'success';
}

else{
    echo 'fail';
}


mysqli_close($con);




?>