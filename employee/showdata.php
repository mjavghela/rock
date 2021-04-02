<?php 
session_start();
$conn = mysqli_connect("localhost","root","admin","test");


 ?>




<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	table{
		border: 2px solid black;
		
		border-collapse: collapse;
		
	}
	td{
		border: 2px solid black;
		margin: 0px;
		padding: 0px;
		text-align: center;
		
	}
	h3{
		text-align: center;
		font-size: 25px;
		color: green;
	}

</style>

	<title></title>
</head>
<body>
	<?php
	include "header/header.php";
	echo $_SESSION['update'];
	unset($_SESSION['update']);
?>
	<div><h1 style="text-align: center; color: red;">Data</h1></div>
<div id="delet">
	<?php 
	$dat =$_SESSION['userid'];
	if($dat==59){

	$sql="SELECT * FROM data "  ;
	}
	else{
			$sql="SELECT * FROM data where id=$dat"  ;

	}

$result=mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql))
{		
	 $row = mysqli_fetch_array($sql ,MYSQL_ASSOC);  
	  $count = mysqli_num_rows($result); 
	  ?>
	  <table><tr><td>ID</td>
	  <td>Firstname</td>
	  <td>Lastname</td>
	  <td>Streat</td>
	  <td>Country</td>
	  <td>State</td>
	  <td>City</td>
	  <td>Countact No</td>
	  <td>Email</td>
	  <td>Gender</td>
	  <td>DOB</td>
	  <td>Image</td>
	  
	  <td>Hobby</td>
	  <td>Category</td>
	  <td colspan='2'>Action</td>
	 <?php  
		  while ($row = mysqli_fetch_array($result)) {
		?>  	<tr>
		  	<td> <?php echo $row['id'];?></td>
		  	<td><?php echo $row['fname'];?></td>
		  	<td><?php echo $row['lname'];?></td>
		  	<td><?php echo $row['streat'];?></td>
		  	<td><?php $a=$row['country'];
		  				$abc="SELECT * FROM country where id=$a"  ;
		  				$b=mysqli_query($conn, $abc);
		  				$rows = mysqli_fetch_array($b);
		  				echo $rows['c_name'];
		  				?></td>
		  	<td><?php $a= $row['state'];
		  			$abc="SELECT * FROM state where s_id=$a"  ;
		  				$ab=mysqli_query($conn, $abc);
		  				$rows = mysqli_fetch_array($ab);
		  				echo $rows['s_name'];
		  			?></td>
		  	<td><?php 
		  	$ba= $row['city'];
		  			$bc="SELECT * FROM city where city_id=$ba"  ;
		  				$ab=mysqli_query($conn, $bc);
		  				$rows1 = mysqli_fetch_array($ab);
		  				echo $rows1['cityname']; 


		  	?></td>
		  	<td><?php echo $row['cno']; ?></td>
		  	<td><?php echo $row['email']; ?></td>
		  	<td><?php echo $row['gender']; ?></td>
		  	<td><?php echo $row['date']; ?></td>
		  	<td><img src="images/<?php echo $row['image']; ?>" width="50" height="50"></td>
		 
		  	<td><?php echo $row['hobby']; ?></td>
		  	<td><?php echo $row['cate']; ?></td>
		  	<td><a href='update.php?id=<?php echo $row['id']; ?>'><button style="background-color:DodgerBlue; color: white">Update</button> </a></td>
		  	<td><a href='delete.php?id=<?php echo $row['id']; ?>'><button onclick="delet()" name="delet">Delete</button> </a></td>
		  	
		  	</tr>
		 <?php 	
	  }
	  ?>
 </table>
<?php	 
}
?>
</div>



	<?php 

include"footer/footer.html";
?>

<script type="text/javascript">

	function delet() {
	confirm("Delete this data?");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("delet").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "delete.php", true);
  // xhttp.send();
}
</script>



</body>
</html>