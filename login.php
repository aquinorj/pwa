<?php
session_start();
?>
<html>
<head>
<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<center>
<div class="header1">
<h1>Log-in</h1>
</div>
<div class="square1">
	<form action="" method="POST">
	<table>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" required></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="pw" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Submit" id="send"></td>
	</tr>
	</table>
		<label id="b"><h5 >Don't have account?</label>
		<a href="index.php" >Register</a>
	</form>
</div>
</center>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect('localhost', 'root', '', 'db_aquino');
$username= $_POST['username']; 
$password= $_POST['pass'];
$sql="SELECT * from registration WHERE username = '$username' AND pass = '$pass'";
$fetch= mysqli_query($conn,$sql);
$data=mysqli_fetch_array($fetch);
if ($data['username']==$Username&&$data['password']==$pw){
$_SESSION['username'] = $username;
header("location:home.php");
}
else
{
echo "<script>alert('Incorrect Username or Password')</script>";
} }
?>