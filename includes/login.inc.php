<?php 

if(isset($_POST['submit']) ){

	include 'dbh.php';

	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = 	mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($uname || empty($pwd)) ) {
		header("Location: ../Login.html?login=empty");
		exit();
	} else{

		$sql = "SELECT * FROM user WHERE username = '$uname'; ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../Login.html?login=error");
			exit();
		}
		else {
			if($row = mysqli_fetch_assoc($result) ){
			//$hashedPwdCheck = password_verify ( string $pwd , string $row['password'] )
				//$hashedPwdCheck = password_verify($pwd, $row['password']);
				if (!password_verify ( $pwd , $row['password'] ))
				//if($hashedPwdCheck == false)
				{
					header("Location: ../Login.php?login=error1");
					exit();
				}
				elseif (password_verify ( $pwd , $row['password'] ))
				//elseif($hashedPwdCheck == true)
				{
					//log in user
					header("Location: ../Login.php?login=success");
		exit();

				}
			}

		}

	}

} else
{
		header("Location: ../Login.php?login=nothing");
		exit();
}