

<?php
 session_start();

if(!empty($_POST['g-recaptcha-response']))
  {
       $secret = '6LcVR44aAAAAAOYUSQVsOXicX6sEvBYqIOkChFwc';
       $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
       $responseData = json_decode($verifyResponse);
        
        if($responseData->success)
        {
            
        

			$email=$_POST['username'];
			$password=($_POST['password']);

			$conn = mysqli_connect("localhost","root","admin","test");


			$sql="SELECT * FROM data WHERE passd='$password' AND email='$email'";

			 $result=mysqli_query($conn, $sql);


			if (mysqli_query($conn, $sql))
			 
			 	{		
					 $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
				
				     $count = mysqli_num_rows($result); 
			     // $active = $row['active']; 
			 	// echo $row['id'];
					if($count==1){ 
						 
							  $_SESSION['userid'] = "{$row['id']}";
							  $_SESSION['userid1'] = "{$row['id']}";
						  
							  $_SESSION['roll']="{$row['roll']}";
						    // $_SESSION['loginmessage'] = "<h3>login successfully</h3>";
							    header("Location: index.php");
						    // exit();

						    
					}
					else
					{
					// session_start();
						    $_SESSION['loginmessage'] = "<h3>Invalid uername and Password </h3>";
						    header("Location: login.php");
						    // exit();
					}		    
				
				}
		} 
		
		

        else{
            
            
			    $_SESSION['loginmessage'] = "<h3>Some error in vrifying g-recaptcha</h3>";
			    header("Location: login.php");
			    // exit();
        	}
	
       
   }
   else{

   	
	 	 $_SESSION['loginmessage'] = "<h3>unverify recaptcha</h3>";	
	 	 // $_SESSION['l'] = "<h3>verify recaptcha</h3>";	
	 	    header("Location: login.php");
		// exit();

   	}






?>

