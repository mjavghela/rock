<?php 
		$conn = mysqli_connect("localhost","root","admin","test");

// **************************************************************************


				if (isset($_POST['id'])) {
					
				$sql="SELECT * FROM category ";
					$result=mysqli_query($conn,$sql);
					
					echo"<option selected >Choose Categoryte</option>
					<option value='select'>All Image</option>";
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

					$result = array_merge($image_name, $image_tmp);
					
					foreach(array_combine($image_name, $image_tmp) as $image => $tmp){
					// echo $image;
				
					$sql="INSERT INTO `images`(`category`,`img`) VALUES ('$cate1','$image');";
					$result=mysqli_query($conn,$sql);
					move_uploaded_file($tmp,'categoryimg/'.$image);
					}

			}

 
// *************************************
			if (isset($_POST['selected'])) {
				$selected=$_POST['selected'];
				if ($selected=="select") {
					
					$sql="SELECT img FROM images "  ;
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




 ?>




 