<?php
include "conf/config.php";
		if(isset($_POST['submit']))
		{
		$email = $_POST['email'];
		$password = $_POST['password'];
		echo $email;
		echo $password;
		}
	if($email == "" && $password == "")
			{
			echo "<script>alert('email or password is incorrect!')</script>";
		    // echo "<script>location.href='index.php'</script>";
		}	
		else{
		$result = mysqli_query($conn,"SELECT * FROM login WHERE email='$email' AND password='md5($password)'")or die("Could not execute the select query.");
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)){
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['username'];
			$_SESSION['id'] = $row['id'];
		} else{
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='index.php'>GoBack</a>";
		}
		if(isset($_SESSION['valid'])){
				header('location:http://localhost/MySelf/Home/home.php');
		}
		}
	

?>