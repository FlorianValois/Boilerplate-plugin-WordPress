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
    <input type="checkbox" name="stt_active" id="stt_active" value="stt_active_value" <?php if(isset($data['stt_active'])){echo 'checked="checked"';} ?>>
    <label for="stt_active"><span></span></label>
  </div>
      
  <br><br>      
  
  Positionnement:<br>
  <input type="radio" name="stt_position" value="left" <?php if($data['stt_position'] === 'left' ){echo 'checked';}?>> Left<br>
  <input type="radio" name="stt_position" value="right" <?php if($data['stt_position'] === 'right' ) {echo 'checked';}?>> Right
  
  <br><br>
  
  Ecart Right/Left (px):<br>
  <input type="number" name="stt_nmb_lr" value="<?php echo $data['stt_nmb_lr']; ?>">
  
  <br><br>
  
  Ecart Bottom (px):<br>
  <input type="number" name="stt_nmb_b" value="<?php echo $data['stt_nmb_b']; ?>">
  
  <br><br>
  
  Largeur (px):<br>
  <input type="number" name="stt_nmb_width" value="<?php echo $data['stt_nmb_width']; ?>">
  
  <br><br>
  
  Hauteur (px): <br>
  <input type="number" name="stt_nmb_height" value="<?php echo $data['stt_nmb_height']; ?>">
  
  <br><br>
  
  Radius (px): <br>
  <input type="number" name="stt_nmb_radius" value="<?php echo $data['stt_nmb_radius']; ?>" placeholder="">
  
  <br><br>
  Background:<br>
  <input type="text" name="stt_color_background" class="color-picker" data-alpha="true" value="<?php echo $data['stt_color_background']; ?>">
  
  <br><br>
  
  Icône:<br>
  <input type="text" name="stt_icone" value="\<?php echo $data['stt_icone']; ?>">
  
  <br><br>
  
  Couleur icône:<br>
  <input type="text" name="stt_color_icone" class="color-picker" data-alpha="true" value="<?php echo $data['stt_color_icone']; ?>">
  
  <button id="submit" type="submit" class="button button-primary">Enregistrer</button>
</form>

</div>
<?php
}
?>