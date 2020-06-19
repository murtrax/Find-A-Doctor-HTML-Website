<?php

session_start();

	include'dbh.php';
if(isset($_POST['submit']) ){



								$visit1 = "fer";
								$visit2 = 	"fer2";
								$visit3 = "fer3";
								$visit4= "fer4";
								$date = "f15";
								$time="f26";
	/*$visit1 = mysqli_real_escape_string($conn, $_POST['visit1']);
	$visit2 = 	mysqli_real_escape_string($conn, $_POST['visit2']);
	$visit3 = mysqli_real_escape_string($conn, $_POST['visit3']);
	$visit4 = mysqli_real_escape_string($conn, $_POST['visit4']);
	$date =$_POST['date'];
	$time = $_POST['time'];*/
	$username = $_SESSION['uname'];
	

	if(empty($visit1) && empty($visit2) && empty($visit3) && empty($visit4) ) {
		header("Location: ../profile.php?booking=empty");
		exit();
	} else
	{


								
						$sql = "insert into bookinginfo(date, time, username, visit1, visit2, visit3, visit4) values ('$date', '$time', '$uname', '$visit1', '$visit2', '$visit3', '$visit4');";
								mysqli_query($conn, $sql);
								//$query = mysqli_query($conn, $sql);
								
								if ($query)
								{
								header("Location: ../confirm.php?booking=success");
								exit();
							}

							else {
								header("Location: ../profile.php?booking=qFALSE");
								exit();
							}

								
							}
}