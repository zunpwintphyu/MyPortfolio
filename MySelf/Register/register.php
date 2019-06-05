<?php
include "../conf/config.php";
?>
<html>
<head>
	<title>Register</title>
</head>
<style>
	.header{
        position:fixed;
		       padding: 10px;
               text-align: center;
               background: #7777;
               color: white;
               font-size: 40px;
			   width:97%;
               height:60px;
			   top:0;
        
        }
body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
    color:#FFDDFF;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #092756 0%, #670d10 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #092756 0%,#670d10 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #092756 0%,#670d10 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #092756 0%,#670d10 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #092756 0%,#670d10 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
</style>
<body>
    <br><br><br>
<?php
//include("conf/config.php");
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	if($name == "" || $email == "" || $pass == "" ) {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($conn, "INSERT INTO login(name,email, password) VALUES('$name', '$email', md5('$pass'))")
			or die("Could not execute the insert query.");
        echo "<a href='../index.php'> <button> << Previous </button></a>";
        echo "<br><br>";	
	    echo "Registration successfully";
	}
} else {
?>
	<div class="header">
	    Registration Form
	</div>
	<br><br><br><br><br>
	<div style="margin-left:500px;">
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%"> Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			</table><br><br> 
            <div style="margin-left:100px;">
				<input type="submit" name="submit" value="Submit">
            </div>
		
	</form>
<?php
}
?>
<div>
</body>
</html>
