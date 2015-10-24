<?php

include 'mydbconn.php';

if (isset($_POST["points"])) {
$points = json_decode($_POST["points"]);
}

for($i=0; $i<count($points); $i++) {

	$usrname = $points[$i]->EmpName;
    $passname = $points[$i]->PassName;
    $dob = DateTime::createFromFormat('m/d/Y', $points[$i]->DOB)->format('Y-m-d');
    $passnum = $points[$i]->PassNum;
    $passexp = DateTime::createFromFormat('m/d/Y', $points[$i]->PassExp)->format('Y-m-d');
    $passdest = $points[$i]->PassDest;
    $depdate = DateTime::createFromFormat('m/d/Y', $points[$i]->DepDate)->format('Y-m-d');
    $arrdate = DateTime::createFromFormat('m/d/Y', $points[$i]->ArrDate)->format('Y-m-d');
    $comments = $points[$i]->Comments;
	$usrmail = $points[$i]->UsrMail;
	$supmail = $points[$i]->SupMail;

	$sql = ("insert into tktrequests(EmpName, PassName, DOB, PassNum, PassExpiry, Destination, DepDate, RetDate, Comments, EmpMail, SupMail, Status) values('$usrname', '$passname', '$dob', '$passnum', '$passexp', '$passdest', '$depdate', '$arrdate', '$comments', '$usrmail', '$supmail', 'Sumbit')");

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
