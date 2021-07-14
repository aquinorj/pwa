<html>
<head>
<title>Registration</title>
</head>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<center>
<div class="header">
<h1>Registration</h1>
</div>
<div class="square">
	<form action="" method="POST">
	<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="name" required></td>
	</tr>
	<tr>
		<td>Date of Birth: </td>
		<td><input type="date" name="dob" required></td>
	</tr>
	<tr>
		<td>Contact Details: </td>
		<td><input type="text" name="contact" required></td>
	</tr>
	<tr>
		<td>Address: </td>
		<td><input type="text" name="address" required></td>
	</tr>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="username" required></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="pw" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" id="send"></td>
	</tr>
	</table>
		<label><h5 >Already have account?</label>
			<a href="login.php" >Log-in</a>
	</form>
</div>
</center>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
$conn=mysqli_connect('localhost', 'root', '', 'db_aquino');
$name= $_POST['name'];
$dob= $_POST['dob'];
$contact= $_POST['contact'];
$address= $_POST['address'];
$username= $_POST['username']; 
$pass= $_POST['pw'];
$sql="INSERT INTO registration(Name,DOB,Contact,Address,Username,PW) 
VALUES ('$name','$dob', '$contact', '$address', '$username', '$pw')";
if (mysqli_query($conn,$sql)) 
{
echo "<script>alert('Registration Success')</script>";
}
else
{
echo "<script>alert('Registration Failed')</script>";
} }
?>