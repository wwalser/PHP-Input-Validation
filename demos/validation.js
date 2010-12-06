(function(){

$(document).ready(function() {
	var messageBox = $('#messageBox');

	$('form').submit(function() {
		var form = $(this);
		$.ajax({
			type: 'POST',
			url: form.attr('action'),
			data: (function() {
				var data = {validate: 1};
				form.find('input:not([type="submit"])').each(function() {
					data[$(this).attr('name')] = $(this).val();
				});
				return data;
			})(),
			success: function(data) {
				// did validation pass?
				data = $.parseJSON(data);
				messageBox.text('');
				messageBox.append($('<p>' + data.global + '</p>'));
				if (data.valid) {
					form.remove();
				} else {
					$.each(data.details, function(input, errorMessage){
						messageBox.append(errorMessage);
					});
				}
				messageBox.show();
			}
		});
		return false;
	});
	
});

})();