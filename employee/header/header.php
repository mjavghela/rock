<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/headercss.css">
<link rel="stylesheet" type="text/css" href="../css/headercss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="mainheader">
	<div class="div">
		<div class="div1">
			<p class="title" >Basic 90</p>
			<p class="title1">Free HTML5 Website Template</p>
		</div>
		<div class="div2">
			<input type="search" name="" placeholder="Search Our Website">
			<button type="search">Search</button>
		</div>
	</div >
	
	<div class="nave" id="nave">
		<nav class="nav1" id="nav1">
			<ul class="nav1ul">
				<!-- <li><a><i class="fa fa-close"></i>abc</a></li> -->
				<li><a href="index.php">Home</a></li>
				

				<?php
				if (isset($_SESSION['userid'])) {
				if ($_SESSION['roll']=='admin') {
					
					echo "<li><a href='showdata.php'>Database data</a></li>
					<li ><a href='catecory.php' class='login'>Catecory</a></li>
					<li ><a href='country.php' >Country</a></li>
					<li ><a href='logout.php' class='logout'>Logout</a></li>";
				}
				else{
					echo "
					<li ><a href='catecory.php' >Image</a></li>
					<li><a href='showdata.php'>Profile</a></li><li >
					<a href='logout.php' class='logout'>Logout</a></li>";
				}
				
				}
				else{

				echo '<li ><a href="form.php" class="registration">Registration</a></li>
				<li ><a href="login.php" class="login">Login</a></li>';
				}
				?>
				

			</ul>
			<ul class="nav2ul">
				<li>
				 <a href="javascript:void(0);" class="icon"  onclick="open1()">
				 	<i class="fa fa-bars">  Menu</i>
				 </a>
				</li>
			</ul>
	</nav>
		
	</div>
</div>

<!-- <script ></script> -->
<script >
function open1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("nav1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "header/nav.html", true);
  xhttp.send();
}
</script>

</body>
</html>