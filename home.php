<?php
  $data = get_option('myhack_extraction_length');
?>

<div class="wrap">
  
<h1>Boilerplate plugin</h1>
<br><br>
<form id="formAjax" method="post" action="">
 
  Input (Text) :<br>
  <input type="text" name="prenom" id="prenom" value="<?php echo $data['prenom']; ?>">
  
  <br><br>
  
  Input (Date) :<br>
  <input type="date" name="date" id="date" value="<?php echo $data['date']; ?>">
  
  <br><br>
  
  Input (Time) :<br>
  <input type="time" name="time" id="time" value="<?php echo $data['time']; ?>">
  
  <br><br>
  
  Input (Range) :<br>
  <div class="range">
    <input type="range" list="tickmarks" name="range_1" id="range" value="<?php if(isset($data['range_1'])){echo $data['range_1'];}else{echo '0';} ?>" min="0" max="100">
    <span><?php if(isset($data['range_1'])){echo $data['range_1'];}else{echo '0';} ?></span>
  </div>
  
  <br><br>
  
  Input (Color) :<br>
  <input type="text" name="color1" id="color1" class="color-picker" data-alpha="true" value="<?php echo $data['color1']; ?>">
  
  <br><br>
  
  Input (Checkbox) :<br>
  <input id="checkbox_1" type="checkbox" name="checkbox_1" value="checkbox_1_value" <?php (isset($data['checkbox_1']) ? 'checked' : ''); ?>>
  <label for="checkbox_1">Checkbox 1</label>
  
  <br><br>
  
  Input (Radio) :<br>
  <input type="radio" name="gender" value="male" <?php (isset($data['gender']) === 'male' ? 'checked="checked"' : '');?>> Male<br>
  <input type="radio" name="gender" value="female" <?php (isset($data['gender']) === 'female' ? 'checked="checked"' : '');?>> Female<br>
  <input type="radio" name="gender" value="other" <?php (isset($data['gender']) === 'other' ? 'checked="checked"' : '');?>> Other 
  
  <br><br>
  
  Upload image :<br>
  <div class="upload-image">
    <img src="<?php echo $data['image_url_1']; ?>" class="image-preview" style="width: 150px; height: auto;">
    <input type="text" name="image_url_1" class="image-url" value="<?php echo $data['image_url_1']; ?>" style="display: block; width: 100%;">
    <button type="button" name="upload-btn" id="upload-btn-2" class="upload-image-btn button-secondary">Choisir une image</button>
  </div>
  
  <br><br>
   
  Textarea : <br>
  <textarea name="text_widget" id="" cols="100" rows="6"><?php echo $data['text_widget']; ?></textarea>
  
  <br><br>
  
  <button id="submit" type="submit" class="button button-primary">Enregistrer</button>
</form>

</div>

