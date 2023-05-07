$(document).ready(function() {

	$('.add-song').click(function(event) {
	  event.preventDefault(); 
  
	  const parentDiv = $(this).closest('.item');
  
	  const h3Element = parentDiv.find('h3');
  
	  const songName = h3Element.text();
  
	  $.ajax({
		url: 'addsongtoplaylist.php',
		method: 'POST',
		data: { songName: songName },
		success: function(response) {
		  console.log(response); 
		},
		error: function(xhr, status, error) {
		  console.log(error); 
		}
	  });
	});
  });