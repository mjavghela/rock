<?php  
session_start();
// session_unset();

unset($_SESSION['userid']);

$url = "./index.php";
header("Location: $url");
exit();
?>