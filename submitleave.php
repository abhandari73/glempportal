<?php

include 'mydbconn.php';

if (isset($_POST["points"])) {
$points = json_decode($_POST["points"]);
}
// decode the json data that is being passed
$usrname = $points->EmpName;
$leavetype = $points->LeaveType;
$leavestart = DateTime::createFromFormat('m/d/Y', $points->LeaveStart)->format('Y-m-d');
$leaveend = DateTime::createFromFormat('m/d/Y', $points->LeaveEnd)->format('Y-m-d');
$comments = $points->Comments;
$contactnum = $points->ContactNum;
$usrmail = $points->UsrMail;
$supmail = $points->SupMail;

$sql = ("insert into leaverequests(EmpName, LeaveType, LeaveStart, LeaveEnd, ContactNum, Comments, EmpMail, SupMail, Status) values('$usrname', '$leavetype', '$leavestart', '$leaveend', '$contactnum', '$comments', '$usrmail', '$supmail', 'Sumbit')");
//$result = $conn->query($sql); INSERT STATEMENT HENCE NO ROWS RETURNED

if($conn->query($sql) === TRUE){
$output = 'Success';
} else
{
$output = 'fail';
}

echo $output;
die();

?>