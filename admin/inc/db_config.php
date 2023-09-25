<?php
$hname = 'localhost';
$uname ='root';
$pass = '';
$db = 'djbookingwebsite';

$con = mysqli_connect($hname, $uname,$pass,$db);

if(!$con){
    die("Cannot connect to database" .mysqli_connect_error());
}

?>