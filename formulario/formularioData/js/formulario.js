/* JAVASCRIPT DEL FORMULARIO PRINCIPAL */

/* funcion que procede a dar un calendario en formato que lo pueda leer SQL
	esto tiene un formato de yy-mm-dd
*/
$(document).ready(function (e) {
	$('#fechaNacimiento').datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: '-18y ',
	})
	/* esta es para la fecha de expedicion */
	$('#expedicion').datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: '-1d ',
	})

	/* funcion que maneja todo el apardo del combo box ya que esto cambia segun escucha un evento  */
	/* SEDE LABORAL PARA SACAR EL MUNICIPIO*/
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

	/* MUNICIPIO DE RECIDENCIA PARA SACAR EL BARRIO */

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

/* funciones para los campos de texto se introdusca correctamente los valores designado */
jQuery(document).ready(function () {
	// numero de documento
	jQuery('#numeroDeDocumento').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	// telefono de emergencia
	jQuery('#telefonoEmergencia').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	//movil
	jQuery('#Movil').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})
	//telefono
	jQuery('#telefono').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^0-9]/g, '')
		)
	})

	//primer apellido
	jQuery('#PrimerApellido').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})

	//segundo nombre
	jQuery('#segundoNombre').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})

	//segundo apellido
	jQuery('#segundoApellido').on('input', function (evt) {
		jQuery(this).val(
			jQuery(this)
				.val()
				.replace(/[^aA-zZ]/g, '')
		)
	})
})

//primer nombre
jQuery('#primeroNombre').on('input', function (evt) {
	jQuery(this).val(
		jQuery(this)
			.val()
			.replace(/[^aA-zZ]/g, '')
	)
})

//seleccion multiple
$(function () {
	$('#multipleSelect').selectpicker()
})
$(function () {
	$('#lugarDeExpedicionDeLaCedula').selectpicker()
})
