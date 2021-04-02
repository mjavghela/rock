$(document).ready(function(){
		showdata();
		// selected();

});

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
		
		console.log(selected);

			$.ajax({
				method:"post",
				 url: "confi.php",
				 data: {selected} ,
				 datType:'html',
				 success:function(data){
				 	$("#allimg").html(data);
	// 			 	// $("#cate1").html(data);
				 }

			});

			
		
		}



		
	// *********************************************

	$('#cate').on('change',function(){
		var selected = $("#cate").val();
		console.log(selected);

		$.ajax({
				method:"post",
				 url: "confi.php",
				 data:{selected},
				 datType:'html',
				 success:function(data){
				 	$("#allimg").html(data);
	// 			 	// $("#cate1").html(data);
				selected();
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
			$("#addimg").hide();
		});

		
		$('#btnimg').click(function(){
			// $("#abc").load("addcate.php");
			$("#addcate").hide();
			$("#addimg").show();
		});

		$('#saveimg').click(function(){

			$("#addimg").hide();
			selected();
		});



	// ****************** add category add in database button****************

		$('#save').click(function(){
			
			var category = $('#category').val();
			
			$.ajax({
				method:"POST",
				 url: "confi.php",
				 data:{category},
				 datType:'html',
				 success:function(data){
					showdata();
				 		selected();
				 	$("#addcate").hide();
					var mesacate="<h3>Category add Successfully.</h3>";
				 	$("#mescate").html(mesacate);
				 	// $("#cate").html(data);
				 }

			});
		
		});

	// ****************** add image and category  button****************

		


		$("#uploadimage").on('submit',function(e) {
			e.preventDefault();
			
			var catefield = $('#cate').val();
			
			
			
					$.ajax({
					url: "confi.php", 
					type: "POST",             
					data: new FormData(this), 
					contentType: false,      
					cache: false,             
					processData:false,        
					success: function(data)   
					{
						// showdata();
						
						
						var mesacate="<h3>Images add Successfullysadasdadasdasd.</h3>";
						$("#mescate").html(mesacate);
						// $("#msg").html(data);
						selected();
					}
			
				});
		
		});

