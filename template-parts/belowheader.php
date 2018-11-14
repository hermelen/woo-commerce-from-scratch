<?php
  $args = array(
         'taxonomy'     => 'product_cat',
         'orderby'      => 'name',
         'show_count'   => 0,
         'pad_counts'   => 0,
         'hierarchical' => 1,
         'title_li'     => '',
         'hide_empty'   => 1
  );
  $all_categories = get_categories( $args ); ?>
  <div class="cat-div">
    <ul class='cat-ul'>
      <?php foreach ($all_categories as $cat) { ?>
        <li><a href="/product-category/<?= $cat->slug ?>"><?= $cat->name ?></a></li>
      <?php } ?>
    </ul>
    <ul class='cat-ul'>
      <li><a href="/products/">Products</a></li>
    </ul>
  </div>
