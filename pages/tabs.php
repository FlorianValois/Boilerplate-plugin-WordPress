<?php
  if (!defined('ABSPATH')) {
      exit;
  }
  function tabs_page(){
?>
<div class="wrap">
<!--<h1>Réglages généraux</h1>-->

<section id="tabs">
  <aside id="navigation">
    <div id="logo">
      <span>Logo<br><em>200*200</em></span>
    </div>
    <nav>
      <ul>
        <li>
          <a href="#tabs-1">
            <div class="title">Lorem ipsum</div>
            <div class="description">Nunc tincidunt</div>
            <i class="fas fa-cog"></i>
          </a>
        </li>
        <li>
          <a href="#tabs-2">
            <div class="title">Lorem ipsum</div>
            <div class="description">Nunc tincidunt</div>
            <i class="fas fa-sliders-h"></i>
          </a>
        </li>
        <li class="comingsoon">
          <span>Coming soon...</span>
        </li>
      </ul>
    </nav>
  </aside>
  <div id="content">
    <div id="tabs-1">
      <div class="title">
        <i class="fas fa-cog"></i>
        <h2>Lorem ipsum</h2>
      </div>
      <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
    <div id="tabs-2">
      <h2>Content heading 2</h2>
      <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
  </div>
</section>

</div>
<?php
  }
?>