// function validate() {



// 	  	var x = document.forms["myForm"]["firstname"].value;
// 	  	var letters = /^[A-Za-z]+$/;  
// 	  	console.log(x);
// 	  	if (x == "") {
	  	
// 	  	document.getElementById("fname").innerHTML = "<sup>*</sup>First Name must be filled out";
// 	   	 return true;
// 	   	}
// 	   	else if(!letters.test(x)){

// 	   		document.getElementById("fname").innerHTML = "<sup>*</sup>First Name invalid.";

// 	   	}
// 	   	else{
// 	   		document.getElementById("fname").innerHTML = "";

	   		
// 	   	}
// // // *****************************************	   	

// 	   	var x = document.forms["myForm"]["last name"].value;
// 	  	console.log(x);
// 	  	if (x == "") {
	  
// 	  	document.getElementById("lname").innerHTML = "<sup>*</sup>Last Name must be filled out";
// 	   	 return false;
// 	   	}
// 	   	else if(!letters.test(x)){

// 	   		document.getElementById("lname").innerHTML = "<sup>*</sup>Last Name invalid.";

// 	   	}
// 	   	else{
// 	   		document.getElementById("lname").innerHTML = "";

	   		
// 	   	}
	
// // // *****************************************	   	
// 	   	var x = document.forms["myForm"]["streat"].value;
// 	  	console.log(x);
// 	  	if (x == "") {
	  	
// 	  	document.getElementById("streat").innerHTML = "<sup>*</sup>streat must be filled out";
// 	   	 return false;
// 	   	}
// 	   	else{
// 	   		document.getElementById("streat").innerHTML = "";

	   		
// 	   	}

// // *****************************************		
// 		var x = document.forms["myForm"]["country"].value;
// 		if (x=="") {
// 			document.getElementById("country").innerHTML = "<sup>*</sup>select Country ";
// 			return false;
// 		}
// 		else{
// 	   		document.getElementById("country").innerHTML = "";

	   		
// 	   	}
// // *****************************************
// 		var x = document.forms["myForm"]["state"].value;
// 		if (x=="") {
// 			document.getElementById("state").innerHTML = "<sup>*</sup>select State ";
// 			return false;
// 		}
// 		else{
// 	   		document.getElementById("state").innerHTML = "";

	   		
// 	   	}
// // *****************************************
// 		var x = document.forms["myForm"]["city"].value;
// 		if (x=="") {
// 			document.getElementById("city").innerHTML = "<sup>*</sup>select City ";
// 			return false;
// 		}
// 		else{
// 	   		document.getElementById("city").innerHTML = "";

	   		
// 	   	}
// // *****************************************
// 	   	var x = document.forms["myForm"]["contact no"].value;
// 	  	console.log(x);
// 	  	if (x == "") {
// 	  	// let y = "Name must be filled out";
// 	  	document.getElementById("contact no").innerHTML = "<sup>*</sup>contact must be filled out";
// 	   	 return false;
// 	   	}
// 	   	else{
// 	   		document.getElementById("contact no").innerHTML = "";

	   		
// 	   	}
// // // *****************************************
// 	   	var x = document.forms["myForm"]["email"].value;
// 	  	console.log(x);
// 	  	if (x == "") {
	  	
// 	  	document.getElementById("email").innerHTML = "<sup>*</sup>Email must be filled out";
// 	   	 return false;
// 	   	}
// 	   	else{
// 	   		document.getElementById("email").innerHTML = "";

	   		
// 	   	}
// // // *****************************************
	    
// 	    if(document.getElementById('gender').checked != true)
// 	    {
// 			document.getElementById("gender2").innerHTML = "<sup>*</sup>Select Gender ";
// 			return false;

// 	    }
// 	    else{
// 	    	document.getElementById("gender2").innerHTML = "";
// 	    }

// // *****************************************
// 		var x = document.forms["myForm"]["password"].value;
// 		if (x=="") {
// 			document.getElementById("password").innerHTML = "<sup>*</sup>Input password. ";
// 			return false;
// 		}
// 		else if (x.length<6) {

// 			document.getElementById("password").innerHTML = "<sup>*</sup>password length less than 6. ";
// 			return false;

// 		}
// 		else{
// 	   		document.getElementById("password").innerHTML = "";

	   		
// 	   	}


// // *****************************************
// 		if(document.getElementById('checkbox').checked != true)
// 	    {
// 			document.getElementById("hobby").innerHTML = "<sup>*</sup>Select Hobby. ";
// 			return false;

// 	    }else{

// 	   		document.getElementById("hobby").innerHTML = "";
	   		
// 	   	}
// // *****************************************

// 		var x = document.forms["myForm"]["selectcategory"].value;
// 		if (x=="") {
// 			document.getElementById("category").innerHTML = "<sup>*</sup>select Category ";
// 			return false;
// 		}
// 		else{
// 	   		document.getElementById("category").innerHTML = "";

	   		
// 	   	}


// 	   }



