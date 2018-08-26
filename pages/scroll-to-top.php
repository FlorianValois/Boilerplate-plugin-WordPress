<?php
  if (!defined('ABSPATH')) {
      exit;
  }

function scroll_to_top_page(){
  
  $data = get_option('boilerplate_plugin');

?>

<div class="wrap">
  
<h1>Scrool To Top</h1>

<br><br>

<form id="ScroolToTopFormAjax" class="formAjax" method="post" action="">

  Activé :<br>
  
  
  <div class="input-checkbox-003">
    <input type="checkbox" name="stt_active" id="stt_active" value="stt_active_value" <?php (isset($data['stt_active']) ? 'checked' : ''); ?>>
    <label for="stt_active"><span></span></label>
  </div>
      
  <br><br>      
  
  Positionnement :<br>
  <input type="radio" name="stt_position" value="left" <?php (isset($data['gender']) === 'left' ? 'checked="checked"' : '');?>> Left<br>
  <input type="radio" name="stt_position" value="right" <?php (isset($data['gender']) === 'right' ? 'checked="checked"' : '');?>> Right
  
  <br><br>
  
  <button id="submit" type="submit" class="button button-primary">Enregistrer</button>
</form>

</div>
<?php
}
?>