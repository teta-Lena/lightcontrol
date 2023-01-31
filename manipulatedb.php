<?php

include './DBCONN.php';



$devicestatus = file_get_contents('bool.txt');
$lightstatus = file_get_contents('status.txt');
// print($status);

$query = mysqli_query($connect ,"SELECT * from devices_status where id=1");
 echo " \n";
if($query->num_rows >0){
    while($row = $query->fetch_assoc()){
        $id = $row["id"];
        echo " \n id: " . $row["id"] ." devicename: " . $row["devicename"] . " Status:" .$row["status"];
        if($lightstatus == 1){
            $sql = "insert into lights_status(device,status) values ($id,'ON')";
            $result = $connect->query($sql);
            echo $result;
          }
          else{
            $sql = "UPDATE lights_status SET status='OFF' where device = 1";
            $result = $connect->query($sql);
          }
    }
 
}


?>