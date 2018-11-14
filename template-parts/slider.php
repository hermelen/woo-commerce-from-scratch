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
		<button href="#" id="slider-left" class="arrow-click">
			<i  class="fas fa-angle-left"></i>
		</button>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			global $post;
      // debug($post);
      ?>
      <div class="div-slider">
        <?php if (has_post_thumbnail( $loop->post->ID )):
          echo  get_the_post_thumbnail($loop->post->ID);
          endif  ?>
          <div class="slider-description">
            <h3><?= $post->post_title ?></h3>
            <p><?php echo substr($post->post_content, 0, 45) ?>...</p>
						<a href="<?= $post->guid ?>">LEARN MORE</a>
          </div>
      </div>
    <?php endwhile; ?>
		<button id="slider-right" href="#" class="arrow-click">
			<i  class="fas fa-angle-right"></i>
		</button>
  </section>
