<?php
include 'mydbconn.php';

$usrname = $_GET["id"];

  	$sql = "Select EmpName, EmpMail, RepSupervisor, SupMail, IsSupervisor from glusers where EmpName='$usrname'";
	$result = $conn->query($sql);
	$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row; 
};

echo json_encode($data);
die();
?>