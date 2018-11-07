<?php
// Define Query Arguments
$args = array(
			'post_type' 	 => 'product',
			'posts_per_page' => 3,
			'product_tag' 	 => 'slider'
			);

// Create the new query
$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			global $post;
      debug($post);
    endwhile;
