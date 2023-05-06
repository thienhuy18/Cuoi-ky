$(document).ready(function() {
	$('#display-link').click(function(event) {
	  event.preventDefault(); // prevent the default link behavior
	  $.ajax({
		url: 'fetch_artists.php',
		type: 'GET',
		dataType: 'json',
		success: function(data) {
		  // data is an array of artist objects, each containing an id and name
		  var html = '<ul>';
		  $.each(data, function(index, artist) {
			html += '<li>' + artist.name + '</li>';
		  });
		  html += '</ul>';
		  $('#artist-list').html(html);
		},
		error: function(xhr, status, error) {
		  console.log('Error:', error);
		}
	  });
	});
  });
  