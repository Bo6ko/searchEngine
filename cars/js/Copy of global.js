var before = "";
$(document).ready(function() {
	$('#cars').change(function(){
		var car_id = $(this).val();
		$.ajax({
			url:"results.php",
			method:"POST",
			data:{"carId":car_id},
			dataType:"text",
			success:function(data)
			{
				$('#models').html(data);
			}
		});
	});
	// Get the modal
	var modal = document.getElementById('myModal');

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

$(document).ready(function() {
	$('#cars').change(function(){
		var car_id = $(this).val();
		$.ajax({
			url:"model_marques.php",
			method:"POST",
			data:{carId:car_id},
			dataType:"text",
			success:function(data)
			{
				$('#models').html(data);
			}
		});
	});
});


