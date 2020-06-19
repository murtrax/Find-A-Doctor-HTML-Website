<?php 
session_start();

if(isset($_POST['submit']) ){

	include 'dbh.php';

	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = 	mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($uname || empty($pwd)) ) {
		header("Location: ../Login.php?login=empty");
		exit();
	} else{

		$sql = "SELECT * FROM user WHERE username = '$uname' OR email = '$uname';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../Login.php?login=error");
			exit();
		}
		else {


			if($row = mysqli_fetch_assoc($result) ){
				$hashedPwdCheck = password_verify($pwd, $row['password']);

				if($pwd !== $row['password']){
						header("Location: ../Login.php?login=error1");
						exit(); }

						else {
			//log in the user
						$_SESSION['uname'] = $row['username'];
						$_SESSION['name'] = $row['fullname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['pwd1'] = $row['password'];

						header("Location: ../myhome.php?login=success");
						exit();
						}

}

			/*	if($hashedPwdCheck == true){
					//log in user
					header("Location: ../Login.php?login=success");
					exit();

				}	elseif($hashedPwdCheck == false){
						header("Location: ../Login.php?login=error1");
						exit();
				}*
			}*/


				}
			}
		}

		

	

 else
{
		header("Location: ../Login.html?login=nothing");
		exit();
}