<?php
$host = "localhost";
$user = "root";
$password = "";
$db =  "ridhoal";
$conn = mysqli_connect( $host, $user, $password);
mysqli_select_db( $conn, $db);

if (isset($_POST['username'])){
	$nama =$_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM toriq WHERE user ='" .$nama."'AND pass ='".$pass."'";
	$result =mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) == 1){
		header("location:../halaman3/index.php");
		exit();


	}else{
		echo "login failed";
		exit();
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#FA8072">
<div class="rumah">
	<form method="POST" action="#">
		<div class="fairifo">
			<input type="text" name="username" placeholder="Enter Your Username">
			<input type="password" name="password"placeholder="MASUKAN PASSWORD">
		</div>
		<input type="submit" name="submit" value="MASUK" class="tombol">
	</form>
</div>
</body>
</html>
