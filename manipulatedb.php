<?php

include './DBCONN.php';



$devicestatus = file_get_contents('bool.txt');
$lightstatus = file_get_contents('status.txt');
// print($status);


if($devicestatus == 1){
    $query = mysqli_query($connect,"INSERT INTO devices_status(id,status) VALUES (1,'ON')") or die("Error".mysqli_error());
    if($lightstatus == 1){
        $sql = mysqli_query($connect, "UPDATE lights_status SET status= 'ON' WHERE device==1");
    }
}

// if($status == 1){
//     $query = mysqli_query($connect, "INSERT INTO lights_status(status) VALUES ('ON')") or die("Error".mysqli_error());
// }

?>