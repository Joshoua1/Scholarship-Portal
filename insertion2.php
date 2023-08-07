<?php
$connect = mysqli_connect("localhost", "root", "","login");
// get the post records
$username = $_POST["username"];
$reigon = $_POST["password"];

$query=mysqli_query($connect,"INSERT INTO user (username,password) VALUES ('$username','$password')");
if ($query) {
   echo "done";
}
else{
    echo "Gand lag gayi";
}
?>