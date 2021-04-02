<?php 
		$conn = mysqli_connect("localhost","root","admin","test");

// **************************************************************************


				if (isset($_POST['id'])) {
					
				$sql="SELECT * FROM category ";
					$result=mysqli_query($conn,$sql);
					
					echo"<option value='select'>All Image</option>";
					while ($row=mysqli_fetch_array($result)) 
					{
						$id=$row['id'];
						$cate=$row['cate'];
						echo "<option value='$id'>$cate</option>";					
						
					}
				}

					
// **************************************************************************


			if (isset($_POST['category'])) {
				

			$cate= $_POST['category'];
			// echo $cate;
			$sql="INSERT INTO `category`( `cate`) VALUES ('$cate');";
			$result=mysqli_query($conn,$sql);

			
			}

// ****************************************************************************

			if(isset($_FILES["file"]["type"]))
				{
					
					$cate1=$_POST['cate1'];
					$image_tmp = $_FILES['file']['tmp_name'];
					$image_name =$_FILES['file']['name'];
					
					foreach(array_combine($image_name, $image_tmp) as $image => $tmp)
						{
					// foreach ($image_name as  $k => $value)
					// {
						$ext = end(explode('.', $image));
						
						if ($ext=="jpeg" ||$ext=="jpg"  ||$ext=="png") {
					
								$sql="INSERT INTO `images`(`category`,`img`) VALUES ('$cate1','$image');";
								$result=mysqli_query($conn,$sql);
								move_uploaded_file($tmp,'categoryimg/'.$image);
							}
						// }
							else{
								echo "Select valid image  = ".$image."<br>";
							}

							
					}
					
					

				}

 
// *************************************
			if (isset($_POST['selected'])) {
				$selected=$_POST['selected'];
				if ($selected=="select" ) {
					
					$sql="SELECT * FROM images "  ;
				}
				else{
					$sql="SELECT img FROM images where category='$selected' "  ;

				}

				$result=mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($result)) {
				$a=$row['img'];
				echo "<img src='categoryimg/$a' width='100' height='100'>";
				// echo "string";
			}
			}



// ************************************country****************
			// **************************************************************************


			if (isset($_POST['country'])) {
				

				$country= $_POST['country'];


				$check="SELECT `c_name` FROM `country` WHERE `c_name`='$country'";
		 		$result=mysqli_query($conn, $check);
		 		$count = mysqli_num_rows($result); 
		 		if ($count==0) {


					// echo $cate;
					$sql="INSERT INTO `country`( `c_name`) VALUES ('$country');";
					$result=mysqli_query($conn,$sql);
					echo "country add successfully.";
			
					}
					else{
						echo "This country already register.";
					}
			}

// ****************************************************************************
			if (isset($_POST['countryid'])) {
					
				$sql="SELECT * FROM country ";
					$result=mysqli_query($conn,$sql);
					
					echo"<option >Select country</option>";
					while ($row=mysqli_fetch_array($result)) 
					{
						$id=$row['id'];
						$cate=$row['c_name'];
						echo "<option value='$id'>$cate</option>";					
						
					}
				}
// **************************************************************************


			if (isset($_POST['state'])) {
				

			$country= $_POST['s_country'];
			$state= $_POST['state'];

			$check="SELECT `s_name` FROM `state` WHERE `s_name`='$state'";
		 		$result=mysqli_query($conn, $check);
		 		$count = mysqli_num_rows($result); 
		 		if ($count==0) {
			// echo $cate;
					$sql="INSERT INTO `state`(`c_id`, `s_name`) VALUES ('$country','$state')";
					$result=mysqli_query($conn,$sql);
					echo "State add successfully.";

				}
				else{
					echo "This state already register.";
				}
			}

// ****************************************************************************
			if (isset($_POST['stateid'])) {
					
				$sql="SELECT * FROM state ";
					$result=mysqli_query($conn,$sql);
					
					echo"<option >Select state</option>";
					while ($row=mysqli_fetch_array($result)) 
					{
						$id=$row['s_id'];
						$cate=$row['s_name'];
						echo "<option value='$id'>$cate</option>";					
						
					}
				}
// ************************************/

				if (isset($_POST['city'])) {
					

					$state= $_POST['c_state'];
					$city= $_POST['city'];
					

					$check="SELECT `cityname` FROM `city` WHERE `cityname`='$city'";
		 			$result=mysqli_query($conn, $check);
		 			$count = mysqli_num_rows($result); 
		 			if ($count==0) {

					$sql="INSERT INTO `city`(`s_id`, `cityname`) VALUES ('$state','$city');";
					$result=mysqli_query($conn,$sql);

					echo "city add successfully.";

					}
					else{
						echo "This city already register.";
					}
			}


// ****************************************************
			if (isset($_POST['countrychange'])) {
			$countrychange= $_POST['countrychange'];

			$check="SELECT * FROM `state` WHERE `c_id`='$countrychange'";
		 		$result=mysqli_query($conn, $check);

		 		echo"<option >Select state</option>";
		 		while ($row=mysqli_fetch_array($result)) 
					{
						$id=$row['s_id'];
						$cate=$row['s_name'];
						
						echo "<option value='$id'>$cate</option>";					
						
					}



			}

// **********************************/
			if (isset($_POST['statechange'])) {
			$statechange= $_POST['statechange'];

			$check="SELECT * FROM `city` WHERE `s_id`='$statechange'";
		 		$result=mysqli_query($conn, $check);
		 		
		 		echo"<option >Select city</option>";
		 		while ($row=mysqli_fetch_array($result)) 
					{
						$id=$row['city_id'];
						$cate=$row['cityname'];
						echo "<option value='$id'>$cate</option>";					
						
					}



			}



 ?>




 