

$(document).ready(function() {
	$('#year').on('change', function(){
		
	var year = $(this).val();	//proverka dali vra6ta stoinostta za izbrana godina ... no ne vliza v success -a

		console.log(year);

		var data = {
			year : $(this).val()
		};	
		
	$.ajax({
			url		: "/ajax/statistic",   //ot controller papkata file ajax/method modeles
			type		: "POST",
			dataType	: "json",
			data		: {
				year	: $(this).val()		//??? kyde otiva
			},
			success		: function( json ){

				if ( json.status ) {
					//$("#year").html(json.html); //json.html idva ot masiva podaden v ajax.php file method modeles
          
			console.log(json.html)

          
          //console.log(json.message)	//da se vidi kakva stoinost se vadi ot bd za6toto faila ot
		  //ajax.php method modeles se svyzva s modela na codeigniter koito e BD
				}else{
					//console.log(json.message)
				}
			},
			error		: function(error) {
				console.log(error);
			}
		});

	});
});