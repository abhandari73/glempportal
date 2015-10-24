<?php

include 'mydbconn.php';

if (isset($_POST["points"])) {
$points = json_decode($_POST["points"]);
}
// decode the json data that is being passed
$usrname = $points->usrname;
$usrpass = $points->usrpass;
 
$sql = "select * from glusers where EmpName='$usrname' and EmpPass='$usrpass'";
$result = $conn->query($sql);
$result = $result->num_rows;

if($result >0){
$output = 'Success';
} else
{
$output = 'fail';
}

echo $output;
die();

?>