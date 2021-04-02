<?php
$conn = mysqli_connect("localhost","root","admin","test");
			if($_GET['id']){
				$id = $_GET['id'];
				$q = mysqli_query($conn,"DELETE FROM `data` where id='$id' ");
				$row=mysqli_fetch_array($q);
				echo $row['fname'];
				include "showdata.php";
			}
?>
