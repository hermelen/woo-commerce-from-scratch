<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
      </div>
        <a class="show-all" href="/products/">Show All</a>
    </div>
  </main>
	<footer id="footer">
    <div class="footer-div">
      <h3>HELP</h3>
      <?php get_template_part('template-parts/footer-menu') ?>
    </div>
    <div class="footer-div">
      <?php $about_page = get_post(79); ?>
      <a href="<?= $about_page->guid ?>">
        <h3><?= strtoupper($about_page->post_title) ?></h3>
        <p><?= substr($about_page->post_content, 0, 200) ?>...</p>
      </a>
    </div>
    <div class="footer-div newsletter">
      <h3>NEWSLETTER</h3>
      <form>
        <label class="sr-only" for="inlineFormInput">Email</label>
        <input type="text" placeholder="Your email address">
        <button class="" type="submit">Sign up</button>
      </form>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
