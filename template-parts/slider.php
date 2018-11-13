<?php
// Define Query Arguments
$args = array(
			'post_type' 	 => 'product',
			'posts_per_page' => 3,
			'product_tag' 	 => 'slider'
			);

// Create the new query
$loop = new WP_Query( $args ); ?>
  <section class='slider-section'>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			global $post;
      // debug($post);
      ?>
      <a href="<?= $post->guid ?>">
        <div class="div-slider">
          <?php if (has_post_thumbnail( $loop->post->ID )):
            echo  get_the_post_thumbnail($loop->post->ID);
            endif  ?>
            <div class="slider-description">
              <h3><?= $post->post_title ?></h3>
              <p><?= $post->post_content ?></p>
            </div>
        </div>
      </a>
    <?php endwhile; ?>
  </section>
