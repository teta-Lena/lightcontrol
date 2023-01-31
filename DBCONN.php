<?php
$DB_server = "localhost";
$DB_name = "lightswitching";
$DB_user_name = "root";
$DB_user_password = "teta2005";
$connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
if($connect ){
    print("Connected successfully");
}
if(!$connect){
    echo mysqli_connect_error();
}

?>