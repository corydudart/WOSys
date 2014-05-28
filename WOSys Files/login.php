<?php session_start();
include ("passwords.php");
if ($_POST['ac'] == 'log'){
	if ($USERS[$_POST['USERNAME']]==$_POST['PASSWORD']){
		$_SESSION['logged']=$_POST['USERNAME'];
	}else {
		echo 'Incorrect username/password.';
	};
};
if (array_key_exists($_SESSION['logged'],$USERS)){
	echo "You are logged in";
} else {
?>
<html>

	<h1>
		Login
	</h1>
	<form action="login.php" method="post">
	<input type = "hidden" name = "ac" value="log">
		Username:
		<input type="text" name="USERNAME"><br>
		Password
		<input type="password"name="PASSWORD"> <br>
		<input type="button" value="Create New Account">
		<input type="submit" value="Login">
	</form>
</html>
<?php };
?>