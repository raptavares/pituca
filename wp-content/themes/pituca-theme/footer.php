<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pituca\'s_Theme
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-widgets">
				 <?php dynamic_sidebar( 'footer' ); ?>
			</div>
			<div class="footer-credits">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos_footer.png" alt="Pituca" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_javali_footer.png" alt="Criado por Javali Digital" />
			</div>
		</footer><!-- #colophon -->
	</div>
	<!-- END MAIN CONTAINER -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
