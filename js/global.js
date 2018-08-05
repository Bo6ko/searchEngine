var before = "";
$(document).ready(function() {
	$('#marque_id').on('change', function(){


		var marque_id = $(this).val();

		console.log(marque_id);

		var data = {
			marque_id : $(this).val()
		};
		
		$.ajax({
			url		: "/ajax/modeles",   //ot controller papkata file ajax/method modeles
			type		: "POST",
			dataType	: "json",
			data		: {
				marque_id	: $(this).val()		//otiva v posta na ajax/modeles
			},
			success		: function( json ){

				//console.log(json);

				if ( json.status ) {
					$("#modele_id").html(json.html); 
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



