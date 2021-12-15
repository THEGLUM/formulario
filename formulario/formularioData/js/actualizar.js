/* FUNCIONES PARA QUE SOLAMENTE EL TEXBOX SOLO TENGA NUMEROS */
jQuery('#telefonoFijo').on('input', function (evt) {
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})
jQuery('#movil').on('input', function (evt) {
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})
jQuery('#telefonoEmergencia').on('input', function (evt) {
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})

jQuery('#ingreseCedula').on('input', function (evt) {
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^0-9]/g, '')
	)
})

/* FUNCION PARA QUE EL COMBO BOX ACTIVE CUANDO HALLA UN CAMBIO */
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
// esta funcion es el seguimiento de la funcion de arriba para cuando escuche un evento
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
