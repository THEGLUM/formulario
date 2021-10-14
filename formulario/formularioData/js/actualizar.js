jQuery("#telefonoFijo").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });
    jQuery("#movil").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });
    jQuery("#telefonoEmergencia").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });

  $("#sedeLaboral").change(function(){
      let parametros = "id= "+$("#sedeLaboral").val()
      $.ajax({
        data: parametros,
        url:  '../../municipio.php',
        type: 'post',
        beforeSend: function(){},
        success: function(response){
          $("#municipioDeRecidencia").html(response)
        },
        error: function(){
          alert("error")
        }
      }) 
    })

    $("#municipioDeRecidencia").change(function(){
      let parametros = "id_municipio= "+$("#municipioDeRecidencia").val()
      $.ajax({
        data: parametros,
        url:  '../../barrio.php',
        type: 'post',
        beforeSend: function(){},
        success: function(response){
          $("#Barrio").html(response)
        },
        error: function(){
          alert("error")
        }
      })
    })