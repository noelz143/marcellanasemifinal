
<!DOCTYPE html>
<html>
<head>
<style >
	body{
	margin: 0;
	padding: 0;
	background:url(c.png);
	background-size: cover;
	background-position: center;
	font-family: white;
}
.loginbox{
		width: 320px;
		height:520px;
		background: white;
		color: skyblue;
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
		 

}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -60px;
	left: calc(50%-50%);
	margin-left: 80px;
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 30px;
	color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px skyblue, 0 0 5px darkblue;
}
.loginbox p{
	margin: 0px;
	padding: 0px;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}

.loginbox input[type="text"],input[type="email"]{
	border: none;
	border-bottom: 2px solid black;
	background:transparent;
	outline: none;
	height: 25px;
	color: black;
	font-size: 16px;
}
.loginbox input[type="name"],input[type="password"]
{
	border: none;
	border-bottom: 2px solid black;
	background:transparent;
	outline: none;
	height: 25px;
	color: black;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background:#ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}
.loginbox a:hover
{
	color: #ffc107;
}

</style>
	<title>login</title>

</head>
<body>
	<?php 
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	#$regex ="/^(?=.*[a-z])\S{6,20}$/";
if (!preg_match("/^[a-zA-Z\s]+$/", $firstname)) {
	echo "characters allowed only on firstname";
	
}
elseif (!preg_match("/^[a-zA-Z\s]+$/", $lastname)) {
	echo "characters allowed only on lastname";
	# code...
}
elseif (!preg_match("/^(?=^.{6,20}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$/",$password)) {
	echo " Password complexity must contain 1 lowercase, 1 uppercase 1 digit number, a combination of special
characters, min=6 and max=20, must not contain spaces. or textfiled must only contain characters only";
		
}
else{
	echo "congratulations ";
}
}
?>


		<div class="loginbox">
		<img src="l.png" class="avatar">
		<h1>Register here</h1>
		<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
		<p>firstname</p>
					<input type="text" name="firstname" placeholder="Enter firstname" required >
		<p>lastname</p>
					<input type="text" name="lastname" placeholder="Enter lastname" required>
			<p>email</p>
					<input type="email" name="email" placeholder="Enter email" required>
			<p>password</p>
					<input type="password" name="password" placeholder="Enter password" required>
					
					<input type="submit" name="submit" value="Submit">


					
		</form>
		</div>

</body>
</html> 