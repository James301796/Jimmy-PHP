<?php
//Connecting to the database
$conn = mysqli_connect("localhost","Jimmy", "icode1234", "jimmy's coffee");

if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>
