<?php

include 'mydbconn.php';

if (isset($_POST["points"])) {
$points = json_decode($_POST["points"]);
}

for($i=0; $i<count($points); $i++) {

	$usrname = $points[$i]->EmpName;
    $clmdate = DateTime::createFromFormat('m/d/Y', $points[$i]->ExpDate)->format('Y-m-d');
    $clmamt = $points[$i]->ExpAmt;
    $comments = $points[$i]->Comments;
    $category = $points[$i]->ExpCat;
	$usrmail = $points[$i]->UsrMail;
	$supmail = $points[$i]->SupMail;

	$sql = ("insert into expclaim(EmpName, ClaimDate, ExpenseHead, Amount, Comments, EmpMail, SupMail, Status) values('$usrname', '$clmdate', '$category', '$clmamt', '$comments', '$usrmail', '$supmail', 'Sumbit')");

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
