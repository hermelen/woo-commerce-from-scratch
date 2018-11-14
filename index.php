<?php get_header(); ?>
	<?php //the_content() ?>
	<?php
	$args = array(
		'orderby' => 'rand',
    'limit' => 6,
  );
  $products = wc_get_products( $args ); ?>
	<ul class="products columns-1"> <?php
		foreach ($products as $product) { ?>
		<li class="post-<?= $product->get_id() ?> product type-product status-<?= $product->get_status() ?> has-post-thumbnail product_cat-accessories first <?= $product->get_stock_status() ?> sale <?= $product->get_tax_status() ?> shipping-<?= $product->get_tax_status() ?> purchasable product-type-<?= $product->get_type() ?>">
			<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?= get_permalink( $product->get_id() ) ?>">
				<?php if ( !empty($product->get_sale_price() ) ) : ?>
				<span class="onsale">Sale!</span>
			  <?php endif ?>
				<img
				class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
				src="http://wordpress-projet-08/wp-content/uploads/2018/10/beanie-300x300.jpg"
				alt=""
				size="(max-width: 300px) 100vw, 300px"
				width="300"
				height="300">
				<h2 class="woocommerce-loop-product__title"><?= $product->get_title(); ?></h2>
				<span>
					<?= $product->get_purchase_note(); ?>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</span>
				<span class="price">
					<?php if ( !empty($product->get_sale_price() ) ) : ?>
					<del>
						<span class="woocommerce-Price-amount amount">
							<?= $product->get_regular_price(); ?>
							<span class="woocommerce-Price-currencySymbol">€</span>
						</span>
					</del>
					<ins>
						<span class="woocommerce-Price-amount amount">
							<?= $product->get_sale_price(); ?>
							<span class="woocommerce-Price-currencySymbol">€</span>
						</span>
					</ins>
				<?php else: ?>
					<span class="woocommerce-Price-amount amount">
						<?= $product->get_price(); ?>
						<span class="woocommerce-Price-currencySymbol">€</span>
					</span>
				<?php endif ?>
				</span>
			</a><?php
			// echo 'get_type   ====>   '.$product->get_type().'<br>';
			// echo 'get_name   ====>   '.$product->get_name().'<br>';
			// echo 'get_slug   ====>   '.$product->get_slug().'<br>';
			// echo 'get_date_created   ====>   '.$product->get_date_created().'<br>';
			// echo 'get_date_modified   ====>   '.$product->get_date_modified().'<br>';
			// echo 'get_status   ====>   '.$product->get_status().'<br>';
			// echo 'get_featured   ====>   '.$product->get_featured().'<br>';
			// echo 'get_catalog_visibility   ====>   '.$product->get_catalog_visibility().'<br>';
			// echo 'get_description   ====>   '.$product->get_description().'<br>';
			// echo 'get_short_description   ====>   '.$product->get_short_description().'<br>';
			// echo 'get_sku   ====>   '.$product->get_sku().'<br>';
			// echo 'get_menu_order   ====>   '.$product->get_menu_order().'<br>';
			// echo 'get_virtual   ====>   '.$product->get_virtual().'<br>';
			// echo 'get_permalink   ====>   '.get_permalink( $product->get_id() ).'<br>';
			// echo 'get_price   ====>   '.$product->get_price().'<br>';
			// echo 'get_regular_price   ====>   '.$product->get_regular_price().'<br>';
			// echo 'get_sale_price   ====>   '.$product->get_sale_price().'<br>';
			// echo 'get_date_on_sale_from   ====>   '.$product->get_date_on_sale_from().'<br>';
			// echo 'get_date_on_sale_to   ====>   '.$product->get_date_on_sale_to().'<br>';
			// echo 'get_total_sales   ====>   '.$product->get_total_sales().'<br>';
			// echo 'get_tax_status   ====>   '.$product->get_tax_status().'<br>';
			// echo 'get_tax_class   ====>   '.$product->get_tax_class().'<br>';
			// echo 'get_manage_stock   ====>   '.$product->get_manage_stock().'<br>';
			// echo 'get_stock_quantity   ====>   '.$product->get_stock_quantity().'<br>';
			// echo 'get_stock_status   ====>   '.$product->get_stock_status().'<br>';
			// echo 'get_backorders   ====>   '.$product->get_backorders().'<br>';
			// echo 'get_sold_individually   ====>   '.$product->get_sold_individually().'<br>';
			// echo 'get_purchase_note   ====>   '.$product->get_purchase_note().'<br>';
			// echo 'get_shipping_class_id   ====>   '.$product->get_shipping_class_id().'<br>';
			// echo 'get_weight   ====>   '.$product->get_weight().'<br>';
			// echo 'get_length   ====>   '.$product->get_length().'<br>';
			// echo 'get_width   ====>   '.$product->get_width().'<br>';
			// echo 'get_height   ====>   '.$product->get_height().'<br>';
			// echo 'get_upsell_ids   ====>   ';
			// print_r($product->get_upsell_ids());
			// echo '<br>';
			// echo 'get_cross_sell_ids   ====>   ';
			// print_r($product->get_cross_sell_ids());
			// echo '<br>';
			// echo 'get_parent_id   ====>   '.$product->get_parent_id().'<br>';
			// echo 'get_attributes   ====>   ';
			// print_r($product->get_attributes());
			// echo '<br>';
			// echo 'get_category_ids   ====>   ';
			// print_r($product->get_category_ids());
			// echo '<br>';
			// echo 'get_tag_ids   ====>   ';
			// print_r($product->get_tag_ids());
			// echo '<br>';
			// echo 'get_downloads   ====>   ';
			// print_r($product->get_downloads());
			// echo '<br>';
			// echo 'get_download_expiry   ====>   '.$product->get_download_expiry().'<br>';
			// echo 'get_downloadable   ====>   '.$product->get_downloadable().'<br>';
			// echo 'get_download_limit   ====>   '.$product->get_download_limit().'<br>';
			// echo 'get_image_id   ====>   '.$product->get_image_id().'<br>';
			// echo 'get_the_post_thumbnail_url   ====>   '.get_the_post_thumbnail_url( $product->get_id(), 'full' ).'<br>';
			// echo 'get_gallery_image_ids   ====>   ';
			// print_r($product->get_gallery_image_ids());
			// echo '<br>';
			// echo 'get_reviews_allowed   ====>   ';
			// print_r($product->get_reviews_allowed());
			// echo '<br>';
			// echo 'get_rating_counts   ====>   ';
			// print_r($product->get_rating_counts());
			// echo '<br>';
			// echo 'get_average_rating   ====>   '.$product->get_average_rating().'<br>';
			// echo 'get_review_count   ====>   '.$product->get_review_count().'<br>';
			?>
		</li>
	  <?php } ?>
	</ul>
<?php get_footer();

// source: https://docs.woocommerce.com/wc-apidocs/class-WC_Product.html
