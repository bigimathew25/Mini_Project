<?php
session_start();
$con=mysqli_connect('localhost','root','','log');
if(isset($_POST['login'])){
	$aname=$_POST['aname'];
	$apswd=$_POST['apswd'];

	$check="select * from log1 where  aname='$aname'AND apswd='$apswd' limit 1";

	$run=mysqli_query($con,$check);
	if(mysqli_num_rows($run)>0){
		header("location:index.html");
		exit;
	}
	else{
		echo "Incorrect user name or password";
		exit();
	}
}

?>