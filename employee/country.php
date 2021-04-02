<!DOCTYPE html>
<html>
<head>
	<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script type="text/javascript" src="js/jQ.js"></script>

	<title></title>

	<style type="text/css">
		.show{
			padding-bottom: 10px;
			padding-top: 10px;
		}
		.countrybutton{
			font-size: 18px;
		}
		select{
			font-size: 15px;
			font: unset;
			/*background-color: grey;*/
		}
		option{
			font-size: 18px;

		}
	</style>
</head>
<body>

<?php
	include "header/header.php";

	?>

<center><div>
	
	<div id="messageshow"></div>
	

	<div>
		<button id="countrys" class="countrybutton btn-group btn-group-toggle">Country</button>
		<button id="states" class="countrybutton">State</button>
		<button id="citys" class="countrybutton">City</button>
	</div>
	

	<div id="countryshow" class="show">
		<input type="text" name="country" id="inputcountry">
		<button id="countrysave">Save</button>
	</div>
	

	<div id="stateshow" class="show">
		<select id="countrylist">
			
			<option>select country</option>
		</select>
		
		<input type="text" name="state" id="inputstate" >
		<button id="statesave">Save</button>
	</div>
	

	<div id="cityshow" class="show">
		<select id="statelist">
			<option>select state</option>
		</select>
		<input type="text" name="city" id="inputcity">
		<button id="citysave">Save</button>
	</div>
	

	<div class="show">
		<select id="countryall">
			
			<option>select country</option>
		</select>
		<select id="stateall">
			<option>select state</option>
		</select>
		<select id="cityall">
			<option>select city</option>
		</select>
	</div>

</div></center>


	<?php
	include "footer/footer.html";

	?>

</body>
</html>