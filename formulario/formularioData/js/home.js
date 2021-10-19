jQuery('#ingreseCedula').on('input', function (evt) {
	// Allow only numbers.
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})

$(document).ready(function (e) {
	$('#fechanacimiento').datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: '-15y ',
	})
})
