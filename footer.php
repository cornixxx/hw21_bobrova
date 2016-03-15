<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container clearfix">
			<ul class="social-links">
				<li><a href="<?php echo get_theme_mod('social_links_facebook'); ?>"> <span class="fa fa-facebook-square "></span></a></li>
				<li><a href="<?php echo get_theme_mod('social_links_twitter'); ?>"> <span class="fa fa-tumblr-square "></span></a></li>
				<li><a href="<?php echo get_theme_mod('social_links_linkedin'); ?>"> <span class="fa fa-linkedin-square"></span></a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- wrapper -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
</body>
</html>
