<?php
  if (!defined('ABSPATH')) {
      exit;
  }
  $data = get_option('boilerplate_plugin');

function styles_page(){

?>

<div class="wrap">
  
<h1>Style</h1>
<br><br>

<h2>Input (Checkbox)</h2>

<ul class="list-style">
  <li>
    <span>
      <div class="input-checkbox-001">
        <input type="checkbox" id="input-checkbox-001">
        <label for="input-checkbox-001">
          <span data-active="On" data-inactive="Off"></span>
        </label>
      </div>
      <h3>Style 001</h3>
    </span>
  </li>
  <li>
    <span>
      <div class="input-checkbox-002">
        <input type="checkbox" id="input-checkbox-002">
        <label for="input-checkbox-002">
          <span></span>
        </label>
      </div>
      <h3>Style 002</h3>
    </span>
  </li>
  <li>
    <span>
      <div class="input-checkbox-003">
        <input type="checkbox" id="input-checkbox-003">
        <label for="input-checkbox-003">
          <span></span>
        </label>
      </div>
      <h3>Style 003</h3>
    </span>
  </li>
</ul>

<h2>Input (Radio)</h2>

<ul class="list-style">
  <li>
    <span>
      <ul class="input-radio-001">
       <li>
        <input type="radio" id="item-1" name="input-radio-001">
        <label for="item-1">Item 1</label>
       </li>
       <li>
        <input type="radio" id="item-2" name="input-radio-001">
        <label for="item-2">Item 2</label>
       </li>
       <li>
        <input type="radio" id="item-3" name="input-radio-001">
				<label for="item-3">Item 3</label>
       </li>
      </ul>
      <h3>Style 001</h3>
    </span>
  </li>
</ul>




</div>
<?php
}
?>