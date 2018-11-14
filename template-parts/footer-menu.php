<?php
  $defaults = array(
    // 'theme_location'  => ,
    'menu'            => 'footer',
    // 'container'       => 'div',
    // 'container_class' => 'menu-container',
    // 'container_id'    => ,
    // 'menu_class'      => 'menu',
    // 'menu_id'         => ,
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    // 'before'          => ,
    // 'after'           => ,
    // 'link_before'     => ,
    // 'link_after'      => ,
    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'depth'           => 0,
    // 'walker'          =>
  );?>
  <?php wp_nav_menu($defaults) ?>
