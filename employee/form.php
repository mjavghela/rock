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
	<title></title>
	<style type="text/css">
		h3{
			text-align: center;
			color: green;
			font-size: 25px;
		}
		h2{
			text-align: center;
			color: red;
			font-size: 25px;
		}
	</style>
	<!-- <link rel="stylesheet" type="text/css" href="../css/headercss.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="../css/footer.css"> -->
</head>
<body>

<?php
include"header/header.php";
 ?>
 <?php

 session_start(); 
 if(!empty($_SESSION))
 {
    echo $_SESSION['message'];
    // header("Location: index.php");
    unset($_SESSION['message']);
	}
include"FORM.HTML";
include"footer/footer.html";
?>

</body>
</html>