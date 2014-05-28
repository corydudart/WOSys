<?php 
include 'connect.php';
$query = 'SELECT * FROM Workorder, Account, Worker, Jobs';
$result = sqlsrv_query($conn, $query) or die(print_r( sqlsrv_errors(), true));
$row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
?>
<html>
	
	<form action="insertUser.php" method="post">
		Username
		<input type="text" name="USERNAME"> <br>
		Name
		<input type="text" name="NAME"><br>
		Password
		<input type="password" name="PASSWORD"> <br>
		Confirm Password
		<input type="password" name="PASSWORD2"><br>
		Authorization Code
		<input type="text" NAME="AUTH_CODE"> <br>
		e-mail adress
		<input type="email" name=EMAIL> <br>
		<?php if ($_REQUEST['PASSWORD']!=$_REQUEST['PASSWORD2']){
			echo "Sorry Passwords did not match";
		}
		?>
		<input type="submit" value="Register">


	</form>
</html>