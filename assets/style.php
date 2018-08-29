#scrollTop{
  position: fixed;
  z-index: 999;
  padding: 0;
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
    else{
      echo 'background: #000000;';
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
    if($data['stt_position'] === 'left'){
      echo 'left: '.$data['stt_nmb_lr'].'px;';
    }
    // Positionnement (bottom)
    if(isset($data['stt_nmb_b'])){
      echo 'bottom: '.$data['stt_nmb_b'].'px;';
    }
    else{
      echo 'bottom: '.$data['stt_nmb_b'].'px;';
    }
    // Positionnement (bottom)
    if(isset($data['stt_nmb_radius'])){
      echo 'border-radius: '.$data['stt_nmb_radius'].'px;';
    }
    else{
      echo 'border-radius: 0px';
    }
  ?>
}

#scrollTop:before{
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  <?php
  if(isset($data['stt_icone'])){
      echo 'content: "\\'.$data['stt_icone'].'";';
    }
    else{
      echo 'content: "\f0d8";';
    }
  ?>
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  <?php
  if(isset($data['stt_color_icone'])){
      echo 'color: '.$data['stt_color_icone'].';';
    }
    else{
      echo 'color: "#000000"';
    }
  ?>
}