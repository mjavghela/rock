function check() {
	var condi=true;

var y=/\S+@\S+\.\S+/;
var x = $(".username").val();
		// console.log('test');
		if (x==" ") {
			$('#username').text("*Enter Email");
	  		$(".username").focus();

	   		 condi= false;
		}
		else if (!y.test(x)) {
			$('#username').text("*Invalid format");
	  		$(".username").focus();

	   		 condi= false;
			
		}
		else{
	   		$('#username').text("");
	  		$(".username").focus();
	  	}



	  	var x = $(".checkpassword").val();
		// console.log('test');
		if (x=="") {
			$('#checkpassword').text("*Enter Password");
	  		

	   		 condi =false;
		}
		else if(x.length<8){
	   		$('#checkpassword').text("*passwordlength less than 8");
	  		$(".checkpassword").focus();
	  		condi= false;
	  	}
	  	else{
	  		$('#checkpassword').text("");
	  		
	  	}
	  	return condi
}