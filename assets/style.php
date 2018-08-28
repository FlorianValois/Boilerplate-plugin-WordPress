#scrollTop{
  <?php 
    if(isset($data['stt_active'])){
      echo 'display: block;';
    }
    else{
      echo 'display: none;';
    }
  ?>
  position: fixed;
  background: <?php echo $data['stt_color_background']; ?>;
  width: 50px;
  height: 50px;
  <?php
    if($data['stt_position'] === 'right'){
      echo 'right: '.$data['stt_number_lr'].'px;';
    }
    else{
      echo 'left: '.$data['stt_number_lr'].'px;';
    }
  ?>
  bottom: 30px;
}