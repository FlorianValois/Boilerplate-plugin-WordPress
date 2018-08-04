<?php
  $data = get_option('myhack_extraction_length');
?>
<pre>
  <code>
    <?php var_dump($data); ?>
  </code>
</pre>

<div class="wrap">
  
<h1>Ajax submit</h1>

<form id="formAjax" method="post" action="">
  <input type="text" name="prenom" id="prenom" value="<?php echo $data['prenom']; ?>">
  
  <br><br>
  
  <input type="text" name="nom" id="prenom" value="<?php echo $data['nom']; ?>">
  
  <br><br>
  
  <input type="text" name="color1" id="color1" class="color-field" value="<?php echo $data['color1']; ?>">
  
  <br><br>
  
  <input type="text" name="color2" id="color2" class="color-field" value="<?php echo $data['color2']; ?>">
  
  <br><br>
  
  <div class="upload-image">
    <img src="<?php echo $data['image_url_1']; ?>" class="image-preview" style="width: 150px; height: auto;">
    <input type="text" name="image_url_1" class="image-url" value="<?php echo $data['image_url_1']; ?>" style="display: block; width: 100%;">
    <button type="button" name="upload-btn" id="upload-btn-2" class="upload-image-btn button-secondary">Choisir une image</button>
  </div>
  
  <br><br>
  
  <div class="upload-image">
    <img src="<?php echo $data['image_url_2']; ?>" class="image-preview" style="width: 150px; height: auto;">
    <input type="text" name="image_url_2" class="image-url" value="<?php echo $data['image_url_2']; ?>" style="display: block; width: 100%;">
    <button type="button" name="upload-btn" id="upload-btn-2" class="upload-image-btn button-secondary">Choisir une image</button>
  </div>
  
  <br><br>
   
  <input id="checkbox_1" type="checkbox" name="checkbox_1" value="checkbox_1_value" <?php (isset($data['checkbox_1']) ? 'checked' : ''); ?>>
  <label for="checkbox_1">Checkbox 1</label>
  
  <br>
   
  <input id="checkbox_2" type="checkbox" name="checkbox_2" value="checkbox_2_value" <?php (isset($data['checkbox_2']) ? 'checked' : ''); ?>>
  <label for="checkbox_2">Checkbox 2</label>
  
  <br><br>
  
  <input type="radio" name="gender" value="male" <?php (isset($data['gender']) === 'male' ? 'checked="checked"' : '');?>> Male<br>
  <input type="radio" name="gender" value="female" <?php (isset($data['gender']) === 'female' ? 'checked="checked"' : '');?>> Female<br>
  <input type="radio" name="gender" value="other" <?php (isset($data['gender']) === 'other' ? 'checked="checked"' : '');?>> Other 
  
  <br><br>
  
  <button id="submit" type="submit" class="button button-primary">Enregistrer</button>
</form>

</div>

