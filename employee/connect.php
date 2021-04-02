
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#error{
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
include"header/header.php";
?>

<?php

if (isset($_POST['password'])) {


$conn = mysqli_connect("localhost","root","admin","test");


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

// $image=$_FILES['image']['name'];
// $temp="image/".$_FILES['image']['temp_name'];
$image_name =$_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

$password=($_POST['password']);
$confirmpassword=($_POST['confirmpassword']);
$hobby=implode(",",$_POST['check_list']);
$category=$_POST['category1'];


	$check="SELECT `email` FROM `data` WHERE `email`='$email'";
	 $result=mysqli_query($conn, $check);
	 $count = mysqli_num_rows($result); 
	 if ($count==0) {


	$sql ="INSERT INTO `data` (`fname`, `lname`, `streat`, `country`, `state`, `city`, `cno`, `email`, `gender`, `date`, `image`, `passd`, `cpassd`, `hobby`, `cate`) VALUES ('$firstname', '$lastname', '$streat', '$country', '$state', '$city', '$contact', '$email', '$gender', '$dob', '$image_name', '$password', '$confirmpassword', '$hobby', '$category');";

// echo getcwd()."/images/".$image;
// exit;
move_uploaded_file($image_tmp,'images/'.$image_name);

	if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";


	 	session_start();
	    $_SESSION['message'] = "<h3>Form saved successfully.</h3>";
	    header("Location: form.php");
	    exit();
		}

	else {
 	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	 }


	 else{
	 	
	 	session_start();
	    $_SESSION['message'] = "<h2>Email id already taken</h2>";
	    header("Location: form.php");
	    exit();
	 }

}


?>

<?php
	include"footer/footer.html";
	?>
</body>
</html>















<!-- $sql="UPDATE `data` SET `fname`='$firstname',`lname`='$lastname',`streat`='$streat',`country`='$country',`state`='$state',`city`='$city',`cno`='$contact',`email`='$email',`gender`='$gender',`date`='dob',`image`='$image',`passd`='$password',`cpassd`='$confirmpassword',`hobby`='$hobby',`cate`='$category' WHERE `id`=$_Post['id']"; -->



<!-- 


// if (count($_Post[])>0) {

// mysqli_query($conn,"UPDATE `data` SET `fname`=[$_Post['firstname']],`lname`=['lastname'],`streat`=['streat'],`country`=[country1],`state`=['state1'],`city`=[city1],`cno`=['contactno'],`email`=['email'],`gender`=[gender],`date`=['dob'],`image`=['image'],`passd`=['password'],`cpassd`=[confirmpassword],`hobby`=['hobby'],`cate`=['category1'] WHERE `id`=$_Post['id'];");

