<?php
session_start();
if(isset($_SESSION['login'])) {
  header("location:home.php");
} else {
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		<form action="proses/proses_login.php" method="post">
			Email : <input type="email" name="email" placeholder="Kasi masuki emailta"><br /><br />
			Password : <input type="password" name="password" placeholder="Kasi masuki passwordta"><br /><br />
			<button type="submit">Submitmi</button>
		</form>
	</body>

</html>

<?php
}
?>


