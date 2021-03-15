<?php
$con = mysqli_connect('localhost','root');

if ($con){
    echo "Connected";
}
else {
    echo "not connected";
}

mysqli_select_db($con, 'youtubeuser');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO youtube (user, email, mobile,comment)
VALUES ('$user','$email', '$mobile','$comment')";

mysqli_query($con, $query); 

header('location:index.php');


?>