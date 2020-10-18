<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<?php

session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo "Submitted Successfuly";
}else{
	echo "no connection";
}
mysqli_select_db($con, 'sessionprac');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
//	$gender = $_POST['gender'];
$num = $_POST['num'];

$q="select * from sign";
mysqli_query($con, $q);
$qy="insert into sign (fname, lname, mail, num) values('$fname', '$lname', '$mail', '$num')";
mysqli_query($con, $qy);

?>
<h1><br>Life Care will conatact You soon:)</h1>

</body>
</html>