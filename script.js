// By Florian VALOIS

//https://stackoverflow.com/questions/5904437/jquery-how-to-remove-blank-fields-from-a-form-before-submitting

jQuery(document).ready(function ($) {
  /* Color Picker WordPress */
  $('.color-field').wpColorPicker();

  $('#range').on('input', function (e) {
    $('#rangValue').html($('#range').val());
  });


  /* Enregistrement des options en Ajax */
  $('#formAjax').on('submit', function (e) {
    e.preventDefault();

    var postData = {
      action: 'wpa_49691',
      data: $(this).serialize()
    }


    $.ajax({
      type: "POST",
      data: postData,
      dataType: "json",
      url: youruniquejs_vars.ajaxurl,
      success: function (postData) {
        if (postData.update) {
          swal({
            position: 'center',
            type: 'success',
            title: 'Sauvegardé !',
            text: 'Vos modifications ont été sauvegardées avec succès.',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        } else {
          swal({
            position: 'center',
            type: 'info',
            title: 'Sauvegarde non effectuée !',
            text: 'Aucun champs n\'a été modifié.',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        }
      }
    });
  });
  /* #formAjax */

  /* Upload des fichier images */
  $('.upload-image-btn').on('click', function (e) {
    e.preventDefault();

    var $image = $(this).siblings('.image-preview');
    var $input = $(this).siblings('.image-url');

    var image = wp.media({
        title: 'Choisir une image',
        button: {
          text: 'Sélectionner'
        },
        multiple: false
      }).open()
      .on('select', function (e) {
        var uploaded_image = image.state().get('selection').first();
        console.log(uploaded_image);
        var image_url = uploaded_image.toJSON().url;
        $input.val(image_url);
        $image.attr('src', image_url);
      });
  });

  $('.image-url').keyup(function () {
    var $image = $(this).siblings('.image-preview');
    $image.attr('src', $(this).val());
  });

});
