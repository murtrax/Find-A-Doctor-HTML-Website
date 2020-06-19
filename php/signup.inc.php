<?php

session_start();

if(isset($_POST['submit']) ){
	include_once 'dbh.php';

	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$name = mysqli_real_escape_string($conn, $_POST['fullname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd1 = mysqli_real_escape_string($conn, $_POST['password1']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['password2']);



// error handlers

	//empty fields
	if(empty($uname) || empty($name) || empty($email) || empty($pwd1) || empty($pwd2) )
	{
		
		header("Location: ../register.php?signup=empty");
		exit();
	}else{

	
				//check if email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
					header("Location: ../register.php?signup=invalidemail");
					exit();
				}else{

					$sql = "select * from users where user_uid = '$uname' ";
					$result = mysqli_query($conn, $sql);
					$resultcheck = mysqli_num_rows($result);
					
						if($resultcheck > 0){
							header("Location: ../register.php?signup=usertaken");
							exit();
						} else{
								//hashing
								//$hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT);
								//insert user inside
							


							$visit1 = "fer";
								$visit2 = 	"fer2";
								$visit3 = "fer3";
								$visit4= "fer4";
								$date = "f15";
								$time="f26";

								

						$sql = "insert into bookinginfo(date, time, username, visit1, visit2, visit3, visit4) values ('$date', '$time', '$uname', '$visit1', '$visit2', '$visit3', '$visit4');";
								mysqli_query($conn, $sql);
					





						$sql = "insert into user( email, fullname, password, username) values ('$email', '$name' , '$pwd1', '$uname');";
								mysqli_query($conn, $sql);
								
								header("Location: ../confirm-register.php?signup=success");
								

								exit();
							}
					}

				
			}


	} else{
		header("Location: ../register.php");
		exit();
	}