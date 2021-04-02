function validate() {

		var condi = true ;

	  	var x = $(".firstname").val();
	  	var letters = /^[A-Za-z]+$/;  
	  	// console.log(x);
	  	if (x == "") {
	  		$('#fname').text("*First Name must be filled out");
	  		$(".firstname").focus();
	  	
	  	
	   	 condi=false;
	   	}
	   	else if(!letters.test(x)){

	   		$('#fname').text("*First Name Invalid");
	  		$(".firstname").focus();
	  	
	  	
	   	 condi =false;

	   	}
	   	else{
	   		$('#fname').text("");
	  		$(".firstname").focus();
	  	
	   	}

// *******************************************
	 	var x = $(".lastname").val();
	  	// console.log(x);
	  	if (x == "") {

	   		$('#lname').text("*Last Name fill out");
	  		$(".lastname").focus();

	   		 condi= false;
	   	}
	   	else if(!letters.test(x)){

	   		
	   		$('#lname').text("*Last Name Invalid");
	  		$(".lastname").focus();

	   	 	condi= false;

	   	}
	   	else{
	   		
	   		$('#lname').text("");
	  		$(".lname").focus();
	   	}
// **********************************
	   	if ($('.streat').val() == "") {

	   		$('#streat').text("*Streat fill out");
	  		$(".streat").focus();

	   		 condi =false;
	   	}
	   		else{
	   		
	   		$('#streat').text("");
	  		$(".streat").focus();
	   	}
// ************************************

		var x = $(".country").val();
		// console.log('test');
		if (x=="Select country") {
			$('#country').text("*Select country");
	  		$(".country").focus();

	   		 condi =false;
		}
		else{
	   		$('#country').text("");
	  		$(".country").focus();

	   		
	   	}
		
// *************************************************
		var x = $(".state").val();
		// console.log('test');
		if (x=="Select state") {
			$('#state').text("*Select State");
	  		$(".state").focus();

	   		 condi =false;
		}
		else{
	   		$('#state').text("");
	  		$(".state").focus();
	  	}
// *****************************************


		var x = $(".city").val();
		// console.log('test');
		if (x=="Select city") {
			$('#city').text("*Select city");
	  		$(".city").focus();

	   		 condi= false;
		}
		else{
	   		$('#city').text("");
	  		$(".city").focus();
	  	}
// *******************************

var x = $("#fdob").val();
		
		if (x=="") {
			$('#dob').text("*input birth date");
	  		

	   		 condi= false;
		}
		else if(letters.test(x)){

	   		$('#dob').text("*birth date Invalid");
	  		
	  	
	  	
	   	 condi =false;

	   	}
		else{
	   		$('#dob').text("");
	  		
	  	}

// **********************************

var x = $(".contactno").val();
		// console.log('test');
		if (x=="") {
			$('#contactno').text("*Select contact no");
	  		$(".contactno").focus();

	   		 condi= false;
		}
		else{
	   		$('#contactno').text("");
	  		$(".contactno").focus();
	  	}

// ************************************
var y= /\S+@\S+\.\S+/;
var x = $(".email").val();
		// console.log('test');
		if (x=="") {
			$('#email').text("*Select Email");
	  		$(".email").focus();

	   		 condi= false;
		}
		else if (!y.test(x)) {
			$('#email').text("*Invalid Email");
	  		$(".email").focus();

	   		 condi= false;
			
		}
		else{
	   		$('#email').text("");
	  		$(".email").focus();
	  	}
// **********************************************************************


		var x = $("#gender1").prop('checked');
		var y = $("#gender2").prop('checked');
		var z = $("#gender3").prop('checked');

		
		// console.log(x);
		// console.log(y);
		// console.log(z);
		// console.log(y);
		// console.log('test');
		if (x== y && y==z) {
			// console.log(z);
			$('#gender').text("*Select Gender");
	  		$(".gender").focus();

	   		 condi= false;
		}
		else{
	   		$('#gender').text("");
	  		$(".gender").focus();

	  	}

// *****************************************************	 
		
		
		var x = $('.image').val();
		// console.log(x);
		var type = x.substring(x.lastIndexOf('.')+1);
		// console.log(type);
		if (x=="") {
			$('#image').text("*Select Image");
	  		$(".image").focus();

	   		 condi= false;
		}

		else if (type != "jpeg" && type!="png" && type!="jpg") {
			$('#image').text("*format different.");
	  		$(".image").focus();

	   		 condi= false;
			
		}
		else{
			$('#image').text("");
	  		$(".image").focus();

		}
// ********************************************

		var x = $(".password").val();
		// console.log('test');
		if (x=="") {
			$('#password').text("*Enter Password");
	  		$(".password").focus();

	   		 condi =false;
		}
		else if(x.length<8){
	   		$('#password').text("*passwordlength less than 8");
	  		$(".password").focus();
	  		condi= false;
	  	}
	  	else{
	  		$('#password').text("");
	  		$(".password").focus();
	  	}
// ********************************************************************
		var y = $(".password").val();	
		var x = $(".confirmpassword").val();
		// console.log('test');
		if (x=="") {
			$('#confirmpassword').text("*Enter  Confirm Password");
	  		$(".confirmpassword").focus();

	   		 condi= false;
		}
		else if(y!=x){
	   		$('#confirmpassword').text("*password can't match.");
	  		$(".confirmpassword").focus();
	  		condi =false;
	  	}
	  	else{
	  		$('#confirmpassword').text("");
	  		$(".confirmpassword").focus();
	  	}


// ********************************************************
		var x = $("#checkbox1").prop('checked');
		var y = $("#checkbox2").prop('checked');
		var z = $("#checkbox3").prop('checked');
		var w = $("#checkbox4").prop('checked');
		// console.log(x);

		if( x==false &&y==false ){
			$('#hobby').text("*Select Hobby.");
			$('#checkbox').focus();
			condi= false;
		}
		else{
			$('#hobby').text("");
		}
// ***************************************

		
		var x = $(".category").val();
		// console.log('test');
		if (x=="") {
			$('#category').text("*Select Category");
	  		$(".category").focus();
	  		// $(".category").focus();

	   		 condi =false;
		}
		else{
	   		$('#category').text("");

	   		
	   	}
	   	return condi;
	   }
// *****************************************************************

	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#ce").change(function(){
    readURL(this);
});

// ***************************

$(document).ready(function(){
	showcountry();
	function showcountry(){
var countryid = 'countryid';
		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{countryid},
			 datType:'html',
			 success:function(data){
			 	$("#country1").html(data);
			 	// $("#countryall").html(data);
			 }

		});
}
});

// ************************************

$("#country1").change(function(){

	var countrychange = $("#country1").val();
	
	$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{countrychange},
			 datType:'html',
			 success:function(data){
			 	$("#state1").html(data);
			 	

			 	
			 	
			 }

		});


    
});


$("#state1").change(function(){

	var statechange = $("#state1").val();
	
	$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{statechange},
			 datType:'html',
			 success:function(data){
			 	$("#city1").html(data);
			 	
			 	
			 }

		});


    
});





