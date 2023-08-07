<?php
$connect = mysqli_connect("localhost", "root", "","login");
// get the post records
$username = $_POST["username"];
$reigon = $_POST["reigon"];
$feedback = $_POST['feedback'];
$email = $_POST["email"];

$query=mysqli_query($connect,"INSERT INTO users (username,reigon,email) VALUES ('$username','$reigon','$email')");
if ($query) {
   echo "done";
}
else{
    echo "Gand lag gayi";
}
?>