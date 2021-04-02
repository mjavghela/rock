<?php 
session_start();
$_SESSION['cate']="ABXCS";
 ?>


<!DOCTYPE html>
<html>
<head>
	<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script type="text/javascript" src="jQ.js"></script>

	<title></title>
</head>
<body>
	
		
<form  method="post" action="index.php" enctype="multipart/form-data">
					
			<input type="file" name="img" id="image" multiple>
			<select id="cate1" name="cate"></select>
			<button id="imgsave" type="submit" name="submit">save</button>
					

</form>
	

</body>
</html>