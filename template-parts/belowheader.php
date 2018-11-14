<?php
$defaults = array(
  // 'theme_location'  => ,
  // 'menu'            => 'nav',
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
);
?>
<div class="nav-container">
	<section class="title">
		<h2 class="header-h"><?php echo strtoupper(get_bloginfo('name')) ?></h1>
	</section>
	<nav>
		<?php wp_nav_menu( $defaults ) ?>
	</nav>
	<section class="icons">
		<i class="fas fa-shopping-basket"></i>
		<i class="far fa-user"></i>
		<i class="fas fa-search"></i>
	</section>
</div>
