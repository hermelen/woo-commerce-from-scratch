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
      <h3>ABOUT</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
