<?php
$hname = 'localhost';
$uname ='root';
$pass = '';
$db = 'djbookingwebsite';

$con = mysqli_connect($hname, $uname,$pass,$db);

if(!$con){
    die("Cannot connect to database" .mysqli_connect_error());
}


function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = strip_tags(htmlspecialchars(stripslashes(trim($value))));
    }
    return $data;
}
?>

        <!-- trim()
        stripslashes()
        htmlspecialchars()
        strip_tags() -->