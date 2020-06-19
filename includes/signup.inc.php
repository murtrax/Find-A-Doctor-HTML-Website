<?php

if(isset($_POST['submit']) ){
	include_once 'dbh.php';

	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$name = mysqli_real_escape_string($conn, $_POST['fullname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd1 = mysqli_real_escape_string($conn, $_POST['password1']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['password2']);


if( empty($uname) )
{
	header("Location: ../register.php?signup=uname");
}

if( empty($fullname) )
{
	header("Location: ../register.php?signup=fname");
}


if( empty($email) )
{
	header("Location: ../register.php?signup=email");
}


if( empty($pwd1) )
{
	header("Location: ../register.php?signup=pwd1");
}


if( empty($pwd2) )
{
	header("Location: ../register.php?signup=pwd2");
}


// error handlers

	//empty fields
	if ($email=$uname)

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
								$hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT);
								//insert user inside
								$sql = "insert into user( email, fullname, password, username) values ('$email', '$name' , '$hashedPwd', '$uname');";
								mysqli_query($conn, $sql);
								header("Location: ../register.php?signup=success");
								exit();
							}
					}

				
			}


	} else{
		header("Location: ../register.php");
		exit();
	}