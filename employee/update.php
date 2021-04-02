<?php
$conn = mysqli_connect("localhost","root","admin","test");

if (isset($_POST['password'])) {

$id=$_POST['id'];
$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$streat =$_POST['streat'];
$country =$_POST['country1'];
$state =$_POST['state1'];
$city =$_POST['city1'];
$contact=$_POST['contactno'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$image=$_FILES['image']['name'];
$temp=$_FILES['image']['temp_name'];

$password=md5($_POST['password']);
$confirmpassword=md5($_POST['confirmpassword']);
$hobby=implode(",",$_POST['check_list']);
$category=$_POST['category1'];
 

$sql="UPDATE `data` SET `id`='$id',`fname`='$firstname',`lname`='$lastname',`streat`='$streat',`country`='$country',`state`='$state',`city`='$city',`cno`='$contact',`email`='$email',`gender`='$gender',`date`='$dob',`image`='$image',`passd`='$password',`cpassd`='$confirmpassword',`hobby`='$hobby',`cate`='$category' WHERE id='$id'";
$result=mysqli_query($conn, $sql);


 // $sql="UPDATE `data` SET `fname`='$firstname',`lname`='$lastname',`streat`='$streat',`country`='$country',`state`='$state',`city`='$city',`cno`='$contact',`email`='$email',`gender`='$gender',`date`='dob',`image`='$image',`passd`='$password',`cpassd`='$confirmpassword',`hobby`='$hobby',`cate`='$category' WHERE `id`=$_Post['id']";
if (mysqli_query($conn, $sql)) {
	session_start();
    $_SESSION['update'] = "<h3>Update successfully.</h3>";
    header("Location: showdata.php");
    exit();
	}

}

?>


 <!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p{
			color: red;
			font-size: 12px;
		}
		sup{
			color: red;
		}
	</style>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<?php
	include "header/header.php";
	?>
	<div class="container-sm p-3 my-3 border">
		<?php

			if($_GET['id']){
				$id = $_GET['id'];
				$q = mysqli_query($conn,"SELECT * FROM `data` where id='$id' ");
				$row=mysqli_fetch_array($q);
				// echo $row['fname'];
			}
		?>
		<form  name="myForm" method="POST" onsubmit="return validate()" action="update.php" class="form-group"  enctype="multipart/form-data">
			<div>
				
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">


				<label>Frist Name<SUP>*</SUP>:</label>
				<input type="text" name="firstname" class="form-control col-sm-6  firstname" value="<?php echo $row['fname'];?>" >
				<p id="fname"></p>
			</div>
			<div>
				<label>Last Name<SUP>*</SUP>:</label>
				<input type="text" name="lastname" class="form-control  col-sm-6 lastname"value="<?php echo $row['lname'];?>">
				<p id="lname"></p>
			</div>
			
			<div>
				<label>Streat:</label>
				<input type="text" name="streat" class="form-control col-sm-6  streat" value="<?php echo $row['streat'];?>">
				<p id="streat"></p>
			</div>
			<div >
				<label>Country<SUP>*</SUP>:</label>
				<select class="form-control col-sm-3 country" name="country1" >
					<option></option>
					<?php 
					if ($row['country']=='India') {
						
					?>
					<option name="country" value="India" selected>India</option>
					<option name="country" value="Canada">Canada</option>
					<option name="country" value="New York">New York</option>
				<?php
				}

				elseif ($row['country']=='Canada') {
						
					?>
					<option name="country" value="India">India</option>
					<option name="country" value="Canada" selected=>Canada</option>
					<option name="country" value="New York">New York</option>
					<?php
				}
				else {
						
					?>
					<option name="country" value="India">India</option>
					<option name="country" value="Canada">Canada</option>
					<option name="country" value="New York" selected>New York</option>
				<?php
			}
				?>

				</select>
				<p id= "country"></p>
			</div>



			<div >
				<label>State<SUP>*</SUP>:</label>
				<select class="form-control col-sm-3 state" name="state1">
					<option></option>
					<?php 
					if ($row['state']=='gujarat') {
						?>
					<option selected>gujarat</option>
					<option>kolkata</option>
					<option>delhi</option>
					<?php
				}

					elseif ($row['state']=='kolkata') {
						?>
					<option >gujarat</option>
					<option selected>kolkata</option>
					<option>delhi</option>
					<?php
				}
					else {
						?>
					<option >gujarat</option>
					<option >kkolkata</option>
					<option selected>delhi</option>
					<?php
				}
					?>

				</select>
				<p id= "state"></p>
			</div>





			<div >
				<label>City<SUP>*</SUP>:</label>
				<select class="form-control col-sm-3 city" name="city1">
					<option></option>
					<?php 
					if ($row['city']=='ahemdabad') {
						?>
					<option selected>ahemdabad</option>
					<option>nadiad</option>
					<option>anand</option>
					<?php
				}
				if ($row['city']=='nadiad') {
						?>
					<option>ahemdabad</option>
					<option selected>nadiad</option>
					<option>anand</option>
					<?php
				}
				else {
						?>
					<option>ahemdabad</option>
					<option>nadiad</option>
					<option selected>anand</option>
					<?php
				}
				?>

				</select>
				<p id= "city"></p>
			</div>
			<div>
				<label>Contact No<SUP>*</SUP>:</label>
				<input type="tel" name="contactno" placeholder="123-456-78910" pattern="[0-9]{10}" maxlength="10" class="form-control col-sm-3 contactno" value="<?php echo $row['cno'];?>" >
				<p id="contactno"></p>
			</div>
			<div>
				<label>Email ID:</label>
				<input type="text" name="email" class="form-control col-sm-3 email" value="<?php echo $row['email'];?>">
				<p id="email"></p>
			</div>
			<div>
				<label>Gender<SUP>*</SUP>:</label>
				<div class="form-control col-sm-3 gender" >
					<?php 
						if ($row['gender']=='male') {
					?>
					<input type="radio" id="gender1" name="gender" value="male" checked>
					<label>Male</label>
					<input type="radio" id="gender2"  name="gender" value="Female">
					<label>Female</label>
					<input type="radio" id="gender3" name="gender" value="Other">
					<label>Other
					<?php	
						}
						elseif ($row['gender']=='Female') {
							?>
							<input type="radio" id="gender1" name="gender" value="male" >
					<label>Male</label>
					<input type="radio" id="gender2"  name="gender" value="Female" checked>
					<label>Female</label>
					<input type="radio" id="gender3" name="gender" value="Other" >
					<label>Other
					</label>
					<?php	
						}
						else {
							?>
							<input type="radio" id="gender1" name="gender" value="male" >
					<label>Male</label>
					<input type="radio" id="gender2"  name="gender" value="Female">
					<label>Female</label>
					<input type="radio" id="gender3" name="gender" value="Other" checked>
					<label>Other
					</label>
					<?php 
				}

					?>
					
				</div>
					<p id="gender"></p>
			</div>
			<div >
				<label>Date of Birth<SUP>*</SUP>:</label>
				<input type="Date" name="dob" max="2021-03-09" class="form-control col-sm-3 " value="<?php echo $row['date'];?>">
			</div>
			<div>
				<label>Image:</label>
				<input type="file" name="image" class="form-control col-sm-3 image" value="<?php echo $row['image'];?>"><P id="image">(only .jpg  .png)</P>
				<img src="images/<?php echo $row['image']; ?>" width="50" height="50">
			</div>
			<div>
				<label>Password<SUP>*</SUP>:</label>
				<input type="Password" name="password" class="password" value="<?php echo $row['passd'];?>">
				<p id="password"></p>
			</div>
			<div>
				<label>Confirm Password<SUP>*</SUP>:</label>
				<input type="Password" name="confirmpassword" class="confirmpassword" value="<?php echo $row['cpassd'];?>">
				<p id="confirmpassword"></p>
			</div>
			<div>
				<label>Hobby:</label>
				<div class="form-control col-sm-5 " class="selecthobby">
					<?php
					if ($row['hobby']=='Playing game') {
					?>	
					<input type="checkbox"  id ="checkbox1" name="check_list[]" value="Playing game" checked>
					<label>Palying Game</label>
					<input type="checkbox" id="checkbox2" name="check_list[]" value="Reading">
					<label>Reading</label>
					<?php
					}

					elseif ($row['hobby']=='Playing game') {
					?>	
					<input type="checkbox"  id ="checkbox1" name="check_list[]" value="Playing game" >
					<label>Palying Game</label>
					<input type="checkbox" id="checkbox2" name="check_list[]" value="Reading" checked>
					<label>Reading</label>
					<?php
					}

					if ($row['hobby']=='Playing game,Reading') {
					?>	
					<input type="checkbox"  id ="checkbox1" name="check_list[]" value="Playing game" checked>
					<label>Palying Game</label>
					<input type="checkbox" id="checkbox2" name="check_list[]" value="Reading" checked>
					<label>Reading</label>
					<?php
					}

					?>

				</div>
				<p id="hobby"></p>
			</div>
			<div >
				<label>Category<SUP>*</SUP>:</label>
			
				<select class="form-control col-sm-3 category" name="category1">
					<option ></option>
					<?php  
					if ($row['cate']=='Devloper') {
					?>

					<option name="category" value="Devloper" selected>Devloper</option>
					<option name="category" value="Desinging">Desinging</option>
					<option name="category" value="Software">Software checker</option>
					<option name="category" value="Trainer">Trainer</option>
					<?php
				}
				elseif ($row['cate']=='Desinging') {
				?>
				<option name="category" value="Devloper">Devloper</option>
					<option name="category" value="Desinging" selected>Desinging</option>
					<option name="category" value="Software">Software checker</option>
					<option name="category" value="Trainer">Trainer</option>
				<?php
				}
					elseif ($row['cate']=='Software') {
						?>
						<option name="category" value="Devloper">Devloper</option>
					<option name="category" value="Desinging" >Desinging</option>
					<option name="category" value="Software" selected>Software checker</option>
					<option name="category" value="Trainer">Trainer</option>
					<?php
					}
					else{
						?>
						<option name="category" value="Devloper">Devloper</option>
					<option name="category" value="Desinging" >Desinging</option>
					<option name="category" value="Software" selected>Software checker</option>
					<option name="category" value="Trainer" selected>Trainer</option>
					<?php
					}
					?>
				</select>
				<p id="category"></p>
			</div>
			
			<div>
				<button type="Submit" class="btn btn-primary" onclick="validate()" name="submit" >Submit</button>
			</div>
		</form>
	</div>
	<?php
	include"footer/footer.html";
	?>

	<script type="text/javascript" src="js/ajax.js" >
		
	
	</script>
</body>
</html>