function initAjaxForm() {
	var $ajaxForm = $('.ajax-form');
	
	$ajaxForm.on('submit', function (event){
		event.preventDefault();
		var data = $(this).serializeArray(),
			actionURL = $(this).attr('action'),
			actionMethod  = $(this).attr('method');
			$.ajax({
				URL: actionURL,
				method: actionMethod,
				data: data
			})
	}	
}