<?php
session_start();

if (isset($_SESSION['userid'])) {
	header('Location: index.php');
	// unset($_SESSION['userid1']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h3{
			text-align: center;
			color: red;
			font-size: 20px;
		}
	</style>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <script type="text/javascript" src="js/loginjs.js" ></script>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<?php
	include"header/header.php";
	?>
	<?php  

session_start(); 
// echo $_SESSION['loginmessage'];
 // if(!isset($_SESSION['userid1']))
 // {
 //    echo $_SESSION['l'];
 //    // header('Location:form.php');
	// }

    echo $_SESSION['loginmessage'];
    unset($_SESSION['loginmessage']);

?>

	<div class="container">
		<form action="loginconnection.php" method="post" onsubmit="return check()">
		<div>
			<label>Username</label>
			<input type="text" name="username" class="form-control col-sm-4 username" onchange="check();"><p id="username"></p>
		</div>
		<div>
			<label>Password</label>
			<input type="Password" name="password" class="form-control col-sm-4 checkpassword password" onchange="check();"><p id="checkpassword"></p>
		</div>
		<br>
		<div class="g-recaptcha" data-sitekey="6LcVR44aAAAAALPV24DjBH4NxkB0q5nSLfgCbr0A"></div>
		<br>
		<div>
		<button type="Login" name="login" class="col-sm-1 btn btn-primary" onchange="check()">Login</button>
		</div>

	</form>
	</div>

<?php
	include"footer/footer.html";
	?>

</body>
</html>



<!-- 6LdlMI4aAAAAAAmIP4WE1Ev9FTLYj0btPJdvAOoO -->