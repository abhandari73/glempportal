<?php
include 'mydbconn.php';
  	$sql = "Select EmpID, EmpName, RepSupervisor from glusers";
	$result = $conn->query($sql);
	$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row; 
};
echo json_encode($data);
?>