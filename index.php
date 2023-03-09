<?php

$conn= mysqli_connect("localhost","root","Debkanta@1998","mydb2");

$new_array = array(
    "0"=>array("1","dev","patuli","1234567890"),
    "1"=>array("2","akash","sonarpur","5659253735"),
    "2"=>array("3","arnab","tollygunj","3426527252"),
    "3"=>array("4","deep","ruby","3265277942")
);
function insert ($array, $conn){
  
        foreach($array as $row => $value)
        {
            $student_id = mysqli_real_escape_string($conn,$value[0]);
            $student_name = mysqli_real_escape_string($conn,$value[1]);
            $student_address = mysqli_real_escape_string($conn,$value[2]);
            $student_number = mysqli_real_escape_string($conn,$value[3]);
            $sql="INSERT INTO student(student_id,student_name,student_address,student_number)VALUES('".$student_id."','".$student_name."','".$student_address."','".$student_number ."');
            mysqli_query($conn,$sql);
    }
}
insert($new_array ,$conn);
     ?>   