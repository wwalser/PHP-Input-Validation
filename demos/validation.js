$(document).ready(function() {

	$('form').submit(function() {
		var form = $(this);
		$.ajax({
			type: 'POST',
			url: form.attr('action'),
			data: (function() {
				var data = {};
				form.find('input:not([type="submit"])').each(function() {
					data[$(this).attr('name')] = $(this).val();
				});
				return data;
			})(),
			success: function(data) {
				// did validation pass?
				if (data.valid) {
					return true;
				} else {
					return false;
				}
			}
		});
		return false;
	});
	
});