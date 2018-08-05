var before = "";
$(document).ready(function() {
	$('#marque_id').on('change', function(){


		var marque_id = $(this).val();

		console.log(marque_id);

		var data = {
			marque_id : $(this).val()
		};
       
		/*
		$("#modele_id").prop('disabled', true);
		$.post("/ajax/modeles", data, function (json) {
			if (json.status) {
				$("#modele_id").html(json.html);
			} else {
				console.log(json.message);
			}
		}, 'json').fail(function (error) {
			console.log(error);
		}).always(function () {
			$("#modele_id").prop('disabled', false);
		});*/
		
		$.ajax({
			url		: "/ajax/modeles",   //ot controller papkata file ajax/method modeles
			type		: "POST",
			dataType	: "json",
			data		: {
				marque_id	: $(this).val()		//otiva v posta na ajax/modeles
			},
			success		: function( json ){

				console.log(json);

				if ( json.status ) {
					$("#modele_id").html(json.html); //json.html idva ot masiva podaden v ajax.php file method modeles
          
          //console.log(json.message)	//da se vidi kakva stoinost se vadi ot bd za6toto faila ot
		  //ajax.php method modeles se svyzva s modela na codeigniter koito e BD
				}else{
					console.log(json.message)
				}
			},
			error		: function(error) {
				console.log(error);
			}
		});

	});
	// Get the modal
	var modal = document.getElementById('#myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var modalImg = document.getElementById("img01");
	
	$('.myImg').click(function(){
	    modal.style.display = "block";
	    
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	        x[i].style.display = "none";  
	     }
	    
	    modalImg.style.display = "block";
	    before = $("#img01").attr('src');
	    
	    var i = 1;
	    if(i = 1) {
	    	modalImg.src = this.src;
	    	i++;
	    } else {
	    	modalImg.src = before;
	    }
	});
	

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}
	
	var del = document.getElementsByClassName("del");
	$('.w3-button').click(function(){
		del[0].src = before;
	});


});

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}


