// By Florian VALOIS

//https://stackoverflow.com/questions/5904437/jquery-how-to-remove-blank-fields-from-a-form-before-submitting

jQuery(document).ready(function ($) {
  /* Color Picker WordPress */
  $('.color-picker').wpColorPicker();

  /* Value dynamique de l'input range */
  $('.range').on('input', function (e) {
    $(this).find('span').html($(this).find('input').val());
  });

  /* Suppression des values vides pour l'enregistrement */
  function getFormData($form, no_empty) {
    var formData = $('.formAjax').serializeArray();
    var formData_array = {};

    $.each(formData, function (i, item) {
      formData_array[item['name']] = item['value'];
    });

    if (no_empty) {
      $.each(formData_array, function (key, value) {
        if ($.trim(value) === "" || $.trim(value) === "0") delete formData_array[key];
      });
    }
    return formData_array;
  }

  /* Enregistrement des options en Ajax */
  $('.formAjax').on('submit', function (e) {
    console.log($(this));
    e.preventDefault();
    var json = $.param(getFormData($('.formAjax'), true));
    var postData = {
      action: 'wpa_49691',
      data: json
    }
    $.ajax({
      type: "POST",
      data: postData,
      dataType: "json",
      url: bpw_ajax.ajaxurl,
      success: function (postData) {
        console.log(postData.update);
        if (postData.update) {
          swal({
            position: 'center',
            type: 'success',
            title: 'Sauvegardé !',
            text: 'Vos modifications ont été sauvegardées avec succès.',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        } else if (postData.delete) {
          swal({
            position: 'center',
            type: 'success',
            title: 'Supprimé !',
            text: 'Tous les champs ont été vidés avec succès !',
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

  /* Rafraichissement automatique de l'aperçu image */
  $('.image-url').keyup(function () {
    var $image = $(this).siblings('.image-preview');
    $image.attr('src', $(this).val());
  });


  $("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
  $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");

});
