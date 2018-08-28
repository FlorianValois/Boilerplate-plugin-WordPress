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
    <input type="checkbox" name="stt_active" id="stt_active" value="active" <?php (isset($data['stt_active']) ? 'checked' : ''); ?>>
    <label for="stt_active"><span></span></label>
  </div>
      
  <br><br>      
  
  Positionnement :<br>
  <input type="radio" name="stt_position" value="left" <?php (isset($data['stt_position']) === 'left' ? 'checked="checked"' : '');?>> Left<br>
  <input type="radio" name="stt_position" value="right" <?php (isset($data['stt_position']) === 'right' ? 'checked="checked"' : '');?>> Right
  
  <br><br>
  
  <input type="number" name="stt_number_lr" value="<?php echo $data['stt_number_lr']; ?>">
  
  <br><br>
  
  <input type="text" name="stt_color_background" class="color-picker" data-alpha="true" value="<?php echo $data['stt_color_background']; ?>">
  
  <br><br>
  
  <button id="submit" type="submit" class="button button-primary">Enregistrer</button>
</form>

</div>
<?php
}
?>