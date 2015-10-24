<?php

include 'mydbconn.php';

if (isset($_POST["points"])) {
$points = json_decode($_POST["points"]);
}

for($i=0; $i<count($points); $i++) {

	$usrname = $points[$i]->EmpName;
    $tsdate = DateTime::createFromFormat('m/d/Y', $points[$i]->TSDate)->format('Y-m-d');
    $jobtkt = $points[$i]->JobTkt;
    $comments = $points[$i]->Comments;
    $start = $points[$i]->StartTime;
    $end = $points[$i]->EndTime;
	$usrmail = $points[$i]->UsrMail;
	$supmail = $points[$i]->SupMail;

	$sql = ("insert into timesheet(EmpName, TSDate, JobTkt, SlotStart, SlotEnd, Comments, EmpMail, SupMail, Status) values('$usrname', '$tsdate', '$jobtkt', '$start', '$end', '$comments', '$usrmail', '$supmail', 'Submit')");

	if($conn->query($sql) === TRUE){
	$output = 'Success';
	} else
	{
	$output = 'fail';
	}

}

echo $output;
die();

?>
