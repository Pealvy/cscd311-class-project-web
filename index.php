<?php require "connect.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class ="title">
    <h1>HALL REGISTRATION</h1>
    <h2>LOGIN HERE</h2>
</div>
<div class="hero">
	<?php
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query  = mysqli_query($conn, "SELECT * FROM `tb_login` WHERE `username`='$username' AND `password`='$password'");
			$numRows = mysqli_num_rows($query);
			if($numRows == 1){
				header("Location: Registration.php");
			}else{
				echo "Login Failed!";
			}
		}
	?>
    <form action="" method="Post">
        <label>ID:</label>
        <input type="text" name='username'><br><br>
        <label>PASSWORD:</label>
        <input type="password" name='password'><br><br>
        <input  class= "btn" type="submit" value="Submit" name='submit'>
    </form>
</div>





</body>







</html>