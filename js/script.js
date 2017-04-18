$(document).ready(function(){
	$('.checked').click(function(){
		var state = $(this).attr('is-checked');
		if (state == 'no'){			
			$(this).addClass('active');
			$('.glyphicon-ok').show();
			$(this).attr('is-checked', 'yes');
		} else {
			$(this).removeClass('active');
			$('.glyphicon-ok').hide();
			$(this).attr('is-checked', 'no');
		}
	});

	$('#login').click(function() {
		var val = $(this).val();
		if(val == ''){
			$(this).attr('placeholder', '');
		}
	});

	$('#password').click(function() {
		var val = $(this).val();
		if(val == ''){
			$(this).attr('placeholder', '');
		}
	});
})