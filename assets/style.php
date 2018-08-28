#scrollTop{
  position: fixed;
  <?php 
    // Activation
    if(isset($data['stt_active'])){
      echo 'display: block;';
    }
    else{
      echo 'display: none;';
    }
    // Background
    if(isset($data['stt_color_background'])){
      echo 'background: '.$data['stt_color_background'].';';
    }
    // Largeur
    if(isset($data['stt_nmb_width'])){
      echo 'width: '.$data['stt_nmb_width'].'px;';
    }
    // Hauteur
    if(isset($data['stt_nmb_height'])){
      echo 'height: '.$data['stt_nmb_height'].'px;';
    }
    // Positionnement (right or left)
    if($data['stt_position'] === 'right'){
      echo 'right: '.$data['stt_nmb_lr'].'px;';
    }
    else{
      echo 'left: '.$data['stt_nmb_lr'].'px;';
    }
    // Positionnement (bottom)
    if(isset($data['stt_nmb_b'])){
      echo 'bottom: '.$data['stt_nmb_b'].'px;';
    }
    else{
      echo 'bottom: '.$data['stt_nmb_b'].'px;';
    }
  ?>
}