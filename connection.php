<?php
$username = 'root';
$password = '';
$server = 'localhost';
$db = 'ktailor';
$con = mysqli_connect($server,$username,$password,$db);
if($con){
    // echo 'connection sucessful';
}else{
    echo 'connection not sucessful';
}
?>