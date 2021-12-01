$(document).ready(function (e) {
	$('#fechaNacimiento').datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: '-18y ',
	})
	$('#expedicion').datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: '-1d ',
	})

	$('#sedeLaboral').change(function () {
		let parametros = 'id= ' + $('#sedeLaboral').val()
		$.ajax({
			data: parametros,
			url: '../../municipio.php',
			type: 'post',
			beforeSend: function () {},
			success: function (response) {
				$('#municipioDeRecidencia').html(response)
			},
			error: function () {
				alert('error')
			},
		})
	})

	$('#municipioDeRecidencia').change(function () {
		let parametros = 'id_municipio= ' + $('#municipioDeRecidencia').val()
		$.ajax({
			data: parametros,
			url: '../../barrio.php',
			type: 'post',
			beforeSend: function () {},
			success: function (response) {
				$('#Barrio').html(response)
			},
			error: function () {
				alert('error')
			},
		})
	})
})

jQuery(document).ready(function () {
	// Listen for the input event.
	jQuery('#numeroDeDocumento').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	jQuery('#telefonoEmergencia').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	jQuery('#Movil').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	jQuery('#telefono').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})

	jQuery('#PrimerApellido').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})

	jQuery('#segundoNombre').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})

	jQuery('#segundoApellido').on('input', function (evt) {
		// Allow only numbers.
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})
})

jQuery('#primeroNombre').on('input', function (evt) {
	// Allow only numbers.
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^aA-zZ]/g, '')
	)
})
