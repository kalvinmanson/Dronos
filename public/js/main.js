$(document).ready(function() {
	var token = $('#token').val();
	$(".fancyb").fancybox();
	$(".fancya").fancybox({
		type: "ajax"
	});

	if($(".typeahead").length > 0) {
		$.get('/fields', function(data){
	    	$(".typeahead").typeahead({ source:data });
		},'json');
	}

	$('#flash-overlay-modal').modal();
	$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
});