	$(document).ready(function() {

	    $.ajax({
	        async: false,
	        url: '/php/my_events.php',
	        type: 'post',
	        success: function(data) {
	            if (isJson(data)) {
	                data = $.parseJSON(data);
	                data = data[0];
	                personal_url = data['url'];
	            }
	        }
	    });
	});