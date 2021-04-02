

<!DOCTYPE html>
<html>
<head>
     <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script type="text/javascript" src="jQ.js"></script>
	<title></title>

<style type="text/css">
	.divmain{
		display: inline-block;
		margin-bottom: 10px; 
	}
	.data12{
		width: 75%;
		margin-bottom: 10px; 
		
	}
</style>

</head>
<body>
	<?php
	include "../header/header.php";

	?>
	<div class="container">
		<center><div class="data12">
				

				<div id="mescate"></div><br>
				
				<div class=" divmain">
					<label>Category </label>
					<select id="cate" name="cate1" >
					<option value="select">selected</option>
						
					</select>
				</div>
				
				<div class=" divmain">
					<button id="btn"><a>Add category</a></button>
				</div>
		
				<div class=" divmain">
					<button id="btnimg">Add image</button>

				</div>	
				

				
		</div></center>

		<center><div>

				<div id="addcate" class="divmain">
					<input type="text" name="category" id="category">
					<button name="save" id="save" showdata(); >save</button>
				</div>

					

				<div id="addimg" class="divmain">

					<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
					
									<div id="selectImage">
									
									<input type="file" name="file[]" id="file" multiple />
									<select id="cate1" name="cate1"></select>
									<input type="submit" value="Save" class="submit" id="saveimg" />
									</div>
					</form>


				</div>
				

				
		<div id="msg"></div>
		</div></center>
		<center>
			<div class="divmain data12" id="allimg">
			<!-- <img src="" width="100" height="100"> -->
		</div></center>

	</div>
	<?php
	include "../footer/footer.html";

	?>

</body>
</html>