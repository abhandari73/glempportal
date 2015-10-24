<?php
include 'mydbconn.php';

$usrname = $_GET["id"];

  	$sql = "Select RequestID, TimeStamp, LeaveType, LeaveStart, LeaveEnd, Status from leaverequests where EmpName='$usrname'";
	$result = $conn->query($sql);
	$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row; 
};

echo json_encode($data); die();?>