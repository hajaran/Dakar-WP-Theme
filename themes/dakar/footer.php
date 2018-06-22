<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dakar
 */

?>

	
	<?php //Instagram feed ?>
	<?php if ( have_rows( 'instafeed', 'option' ) ) : ?>
		<?php while ( have_rows( 'instafeed', 'option' ) ) : the_row(); ?>
			<?php if (get_sub_field( 'access_token' )): ?>
			<section class="instafeed-section full-width">
	        	<div id="instafeed"></div>
	        	<div class="description">
	        		<div class="container">
	        			<a target="_blank" href="<?php the_sub_field( 'instagram_profile_page_link' ); ?>" class="btn btn-xs light">Suivre <?php echo get_bloginfo('name'); ?> sur Instagram <i class="fas fa-user-plus"></i></a>
	        		</div>
	        	</div>
	        	<script>
	        		jQuery(function(){
	                    // first script to pull posts
	                    var accessToken = '<?php the_sub_field( 'access_token' ); ?>'; // use your own token
	                    jQuery.getJSON('https://api.instagram.com/v1/users/self/media/recent/?access_token='+accessToken+'&callback=?',function (insta) {
	                    	jQuery.each(insta.data,function (photos,src) {
	                    		if ( photos === 10 ) { return false; }
	                    		jQuery('<a target="_blank" class="post" href="<?php the_sub_field( 'instagram_profile_page_link' ); ?>"> <img src=" '
	                    			+ this.images.standard_resolution.url + 
	                    			'" /> <div class="meta">'
	                    			+ this.likes.count +
	                    			' <i class="fas fa-heart"></i></div></a>'
	                    			).appendTo('#instafeed');
	                    	}); 
	                    });
	                });
	            </script> 
	        </section>
	    <?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>

 		

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="full-width footer-social">
			<div class="container">
				<a href=""><i class="fab fa-facebook"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-linkedin"></i></a>
				<a href=""><i class="fab fa-google-plus"></i></a>
			</div>
		</div>
		<div class="container bc-grid"> 
			<div class="bc-grid-col-1-of-4">
				<?php if (has_custom_logo()): ?>
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->
				<?php else: ?>
				<div class="site-branding">
					<a class="custom-logo-link" href="<?php echo get_home_url(); ?>">
					<img class="custom-logo" src="<?php echo get_template_directory_uri(); ?>/img/dakar.png" alt="">
					</a>
				</div><!-- .site-branding -->
				<?php endif; ?>
			</div>
			<div class="bc-grid-col-1-of-4">
				<h3>
					La Girafe
				</h3>
				<a href="">Lorem Ipsum</a> <br>
				<a href="">Lorem Ipsum</a> <br>
				<a href="">Lorem Ipsum</a> <br>
			</div>
			<div class="bc-grid-col-1-of-4">
				<h3>
					A propos
				</h3>
				<a href="">Lorem Ipsum</a> <br>
				<a href="">Lorem Ipsum</a> <br>
				<a href="">Lorem Ipsum</a> <br>
			</div>
			<div class="bc-grid-col-1-of-4">
				<h3>
					Suivez-nous
				</h3>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				Copyright© Hotel La Girafe | Réalisation <a href="https://becreativeconcept.fr">Be Creative</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
