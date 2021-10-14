jQuery('#ingreseCedula').on('input', function (evt) {
	// Allow only numbers.
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})

jQuery('#ingreseMovil').on('input', function (evt) {
	// Allow only numbers.
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})
