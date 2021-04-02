$(document).ready(function(){
	showdata();
	function showdata(){
		$("#addcate").hide();
		$("#addimg").hide();
		var id = 'cateid';
		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{id},
			 datType:'html',
			 success:function(data){
			 	$("#cate").html(data);
			 	$("#cate1").html(data);
			 }

		});
	}

// ****************************************
selected();
function selected(){


	var selected = $("#cate").val();
	// console.log(selected);
	if (selected=="select") {

		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{selected},
			 datType:'html',
			 success:function(data){
			 	$("#allimg").html(data);
// 			 	// $("#cate1").html(data);
			 }


		});

		
	}
	else{

		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{selected},
			 datType:'html',
			 success:function(data){
			 	$("#allimg").html(data);
// 			 	// $("#cate1").html(data);
			 }


		});
	}
}
// *********************************************

$('#cate').on('change',function(){
	var selected = $("#cate").val();
	// console.log(selected);

	$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{selected},
			 datType:'html',
			 success:function(data){
			 	$("#allimg").html(data);
// 			 	// $("#cate1").html(data);
			 }

		});

		
});



// *********************************
	// $('#btn').click(function(){

	// 	var add ='add';
	// 	$.ajax({
	// 		method:"POST",
	// 		 url: "confi.php",
	// 		 data:{add},
	// 		 datType:'html',
	// 		 success:function(data){
	// 		 	$("#addcate").html(data);
	// 		 }

	// 	});
	
	// });

// ****************** add category button****************
	$('#btn').click(function(){
		$("#addcate").show();
		$("#mescate").hide();
		$("#addimg").hide();
	});

	
	$('#btnimg').click(function(){
		// $("#abc").load("addcate.php");
		$("#mescate").hide();
		$("#addcate").hide();
		$("#addimg").show();
	});

	// $('#saveimg').click(function(){

	// 	$("#addimg").hide();
	// 	selected();
	// });



// ****************** add category add in database button****************

	$('#save').click(function(){
		var condi=true;
			 // console.log('data');
		var category = $('#category').val();
		if (category=="") {
			$("#mescate").text("invail category");	
				condi=false;
				}
		else{

		$.ajax({
			method:"POST",
			 url: "confi.php",
			 data:{category},
			 datType:'html',
			 success:function(data){
				showdata();
			 	$("#addcate").hide();
				var mesacate="<h3>Category add Successfully.</h3>";
			 	$("#mescate").html(mesacate);
	 			$("#mescate").show();
	 			selected();

			 	// $("#cate").html(data);
			 }

		});
	
		}
		return condi
	});

// ****************** add image and category  button****************

	


	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		var condi=true;
		var ab=$('#cate1').val();
		var abc=$('#file').val();
		
		if (ab=="select" )
		 {
		 	$('#mescate').text("Please Select Category or image");
			condi=false;
		}
		else{	



					$.ajax({
					url: "confi.php", 
					type: "POST",             
					data: new FormData(this), 
					contentType: false,      
					cache: false,             
					processData:false,       

					success: function(data)   
					{
						var mesacate="<h3>Images add Successfully.</h3>";
						$("#mescate").html(data);
						$("#mescate").show();

						$("#mescate").html(mesacate);

						$("#addimg").hide();
						selected();

					}
				});
		}
		return condi
}));

// ****************************** countrys*************

		$("#countryshow").hide();
		$("#stateshow").hide();
		$("#cityshow").hide();


	$('#countrys').click(function(){
		
		$("#countryshow").show();
		// $("#countryshow").hide();
		$("#stateshow").hide();
		$("#cityshow").hide();
		$("#messageshow").hide();
	});





	$('#states').click(function(){
		
		$("#stateshow").show();
		$("#countryshow").hide();
		// $("#stateshow").hide();
		$("#messageshow").hide();
		$("#cityshow").hide();

		var countryid = 'countryid';
		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{countryid},
			 datType:'html',
			 success:function(data){
			 	$("#countrylist").html(data);
			 	// $("#cate1").html(data);
			 }

		});





	});

	$('#citys').click(function(){
		
		$("#cityshow").show();
		$("#countryshow").hide();
		$("#stateshow").hide();
		$("#messageshow").hide();
		// $("#cityshow").hide();

		var stateid = 'stateid';
		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{stateid},
			 datType:'html',
			 success:function(data){
			 	$("#statelist").html(data);
			 	// $("#cate1").html(data);
			 }

		});



	});
// *******************************************


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
			 	// $("#country1").html(data);
			 	$("#countryall").html(data);
			 }

			});
		}
	

	$("#countryall").change(function(){

	var countrychange = $("#countryall").val();
	
	$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{countrychange},
			 datType:'html',
			 success:function(data){
			 	$("#stateall").html(data);
			 	

			 	
			 	
			 }

		});


    
});


	$("#stateall").change(function(){

	var statechange = $("#stateall").val();
	
	$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{statechange},
			 datType:'html',
			 success:function(data){
			 	$("#cityall").html(data);
			 	

			 	
			 	
			 }

		});


    
});

// ****************** countrys add button***************

$('#countrysave').click(function(){
		var condi=true;
		var country = $('#inputcountry').val();
			 console.log(country);
		if (country=="")
		 {
			$("#messageshow").text("Please enter Country");	
	 			$("#messageshow").show();
				condi=false;
				}
		else
		{

		$.ajax({
			method:"POST",
			 url: "confi.php",
			 data:{country},
			 datType:'html',
			 success:function(data)
			 {
			 	showcountry();
				
			 	$("#countryshow").hide();
				
			 	$("#messageshow").html(data);
			 	
	 			$("#messageshow").show();
	 			
	 			document.getElementById("inputcountry").value = "";
			 	// $("#cate").html(data);
			 }

		});
	}
});
});

// ********************************************


$('#statesave').click(function(){
	var condi=true;
	var state =$('#inputstate').val();
	var s_country =$('#countrylist').val();
	console.log(s_country);
	if (state==""|| s_country=="Select country" )
		 {
		 	if (state=="") {

		 	$('#messageshow').text("Please enter State");
	 		$("#messageshow").show();
			condi=false;
		 	} 
		 	else 
		 	{
		 		$('#messageshow').text("Please Select Country");
	 		$("#messageshow").show();
			condi=false;
		 	}
		}	
		else{


		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{s_country , state},
			 datType:'html',
			 success:function(data){
			 	// $("#countrylist").html(data);
			 	// $("#cate1").html(data);
			 	showcountry();
			 	$("#messageshow").html(data);
	 			$("#messageshow").show();
	 			$("#stateshow").hide();
	 			document.getElementById("inputstate").value = "";
			 }

		});


	}
});


// ****************************************************

$('#citysave').click(function(){
	var condi =true;
	var city =$('#inputcity').val();
	var c_state =$('#statelist').val();
	console.log(c_state);
	console.log(city);

	if (city=="" ||c_state=="Select state")
		 {
		 	if (city=="") {

		 	$('#messageshow').text("Please enter City");
	 		$("#messageshow").show();
			condi=false;
		 	} 
		 	else 
		 	{
		 	$('#messageshow').text("Please Select State");
	 		$("#messageshow").show();
			condi=false;
		 	}
		}
		else{

		$.ajax({
			method:"post",
			 url: "confi.php",
			 data:{city, c_state},
			 datType:'html',
			 success:function(data){
			 	// $("#countrylist").html(data);
			 	// $("#cate1").html(data);
			 	showcountry();
			 	$("#messageshow").html(data);
	 			$("#messageshow").show();
	 			$("#cityshow").hide();
	 			document.getElementById("inputcity").value = "";
			 }

		});

		}
		return condi

	});


});