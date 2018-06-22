<?php if ( have_rows( 'media_sections' ) ): ?>
	<?php while ( have_rows( 'media_sections' ) ) : the_row(); ?>

		<!-- HERO SECTION -->

		<?php if ( get_row_layout() == 'section_hero' ) : ?>
			<section class="dakar_hero-section full-width">
				<div class="bg-img-overlay"></div>
				<div href="" class="side-links">
					<a href="">Side Link 1</a>
					<a href="">Side Link 2</a>
				</div>
				<?php if ( get_sub_field( 'background_image' ) ) { ?>
					<img class="background-img" src="<?php the_sub_field( 'background_image' ); ?>" />
				<?php } ?>
				<div class="container">
					<div class="caption">
						<?php the_sub_field( 'heading' ); ?>
						<?php if ( have_rows( 'call_to_action' ) ) : ?>
							<?php while ( have_rows( 'call_to_action' ) ) : the_row(); ?>
								<?php $url = get_sub_field( 'url' ); ?>
								<?php if ( $url ) { ?>
									<a class='btn btn-xl' href="<?php echo $url['url']; ?>" target="<?php echo $url['target']; ?>"><?php the_sub_field( 'bouton' ); ?></a>
								<?php } ?>
							<?php endwhile; ?>
					</div>
					<div class="anim_mouse-scroll">
						<span></span>
					</div>
				</div>
			</section>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

		<!-- ABOUT SECTION -->

		<?php elseif ( get_row_layout() == 'section_About' ) : ?>
		<section class="testimonial-section light-bg animated bg-slide full-width">
			<div class="container bc-grid">
				<div class="bc-grid-col-half grid-centered-item">
					<div class="testimonial-slider">
						<div class="slides">

							<?php if ( have_rows( 'temoignage' ) ) : ?>
							<?php while ( have_rows( 'temoignage' ) ) : the_row(); ?>

							<div class="item">
								<i class="fas fa-user"></i>
								<b><?php the_sub_field( 'nom' ); ?></b>
								<p>
									<em>
										<?php the_sub_field( 'temoignage' ); ?>
									</em>
								</p>
							</div>

							<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						</div>
						<div class="dots">
							<div class="prev"><i class="fas fa-arrow-left"></i></div>

							<?php if ( have_rows( 'temoignage' ) ) : ?>
							<?php while ( have_rows( 'temoignage' ) ) : the_row(); ?>
							<span class="dot"></span>
							<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

							<div class="next"><i class="fas fa-arrow-right"></i></div>
						</div>
					</div>
    			</div>

			    <div class="bc-grid-col-half grid-centered-item">
			    	<?php the_sub_field( 'about' ); ?>
					
					<?php if ( have_rows( 'cta' ) ) : ?>
						<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
							<?php $url = get_sub_field( 'url' ); ?>
							<?php if ( $url ) { ?>
								<a class='btn' href="<?php echo $url; ?>">
									<?php the_sub_field( 'texte' ); ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
			    </div>
			</div>
		</section>
		
		<!-- TEXT SLAYOUT -->

		<?php elseif ( get_row_layout() == 'text_layout' ) : ?>
			<div class="text-layout bc-grid">
			<?php if ( have_rows( 'text_block' ) ) : ?>
				<?php while ( have_rows( 'text_block' ) ) : the_row(); ?>
					<div class="<?php the_sub_field( 'width' ); ?>">
						<?php the_sub_field( 'editor' ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif ?>
			</div>
		<!-- TEXT SECTION -->

		<?php elseif ( get_row_layout() == 'section_text' ) : ?>
				<div class="text-section">
					<div class="bc-grid">

						<?php if( get_sub_field('number_of_columns') == '1' ): ?>
							<!-- 1 col -->
							<div class="bc-grid-col-full">
								<?php the_sub_field( 'column_1' ); ?>
							</div>
						<?php endif; ?>					

						<?php if( get_sub_field('number_of_columns') == '2' ): ?>
							<!-- 2 col -->
							<div class="bc-grid-col-half">
								<?php the_sub_field( 'column_1' ); ?>
							</div>
							<div class="bc-grid-col-half">
								<?php the_sub_field( 'column_2' ); ?>
							</div>
						<?php endif; ?>

						<?php if( get_sub_field('number_of_columns') == '3' ): ?>
							<!-- 3 col -->
							<div class="bc-grid-col-1-of-3">
								<?php the_sub_field( 'column_1' ); ?>
							</div>
							<div class="bc-grid-col-1-of-3">
								<?php the_sub_field( 'column_2' ); ?>
							</div>
							<div class="bc-grid-col-1-of-3">
								<?php the_sub_field( 'column_3' ); ?>
							</div>
						<?php endif; ?>

						<?php if( get_sub_field('number_of_columns') == '4' ): ?>
							<!-- 4 col -->
							<div class="bc-grid-col-1-of-4">
								<?php the_sub_field( 'column_1' ); ?>
							</div>
							<div class="bc-grid-col-1-of-4">
								<?php the_sub_field( 'column_2' ); ?>
							</div>
							<div class="bc-grid-col-1-of-4">
								<?php the_sub_field( 'column_3' ); ?>
							</div>
							<div class="bc-grid-col-1-of-4">
								<?php the_sub_field( 'column_4' ); ?>
							</div>
						<?php endif; ?>

					</div>

				</div>


		<!-- ROOM SECTION -->

		<?php elseif ( get_row_layout() == 'section_rooms' ) : ?>
			<section class="full-width section-hotel-rooms">
				<div class="container">
					<h2><?php the_sub_field( 'section_title' ); ?></h2>
					<div class="rooms-slider-navigation">
						<div class="prev">
							<i class="fas fa-arrow-left"></i>
						</div>
						<div class="next">
							<i class="fas fa-arrow-right"></i>
						</div>
					</div>
				</div>	
			<?php if ( have_rows( 'chambres' ) ) : ?>
				<div class="container">
					<div class="gradient"></div>
					<div class="wrapper">
						<div class="slider-featured-rooms">

				<?php while ( have_rows( 'chambres' ) ) : the_row(); ?>
					<?php $post_object = get_sub_field( 'chambre' ); ?>

					<?php if ( $post_object ): ?>
						<?php $post = $post_object; ?>
						<?php setup_postdata( $post ); ?> 

							<div class="item <?php if ( get_sub_field( 'best_seller' ) == 1 ) { echo 'best-seller'; } else { } ?>">
								<div class="thumb">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="caption">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php echo excerpt(18); ?></p>
									<span class="category"></span>
									<a href="<?php the_permalink(); ?>" class="btn">Réserver</a> 
								</div>
							</div>


						<?php wp_reset_postdata(); ?>

					<?php endif; ?>
				<?php endwhile; ?>

						</div> <!-- Featured room -->
					</div> <!-- wrapper -->
				</div> <!-- container -->
				</section>

			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>

	
		<!-- VIGNETTE SLIDER SECTION -->

		<?php elseif ( get_row_layout() == 'section_vignette_slideshow' ) : ?>
			<section class="dakar_section-surrounding-slides bc-grid">
				<div class="bc-grid-col-half">
					<div class="description">
						<div>
							<?php the_sub_field( 'description' ); ?>
							<?php if ( have_rows( 'cta' ) ) : ?>
								<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
									<?php $url = get_sub_field( 'url' ); ?>
									<?php if ( $url ) { ?>
										<a class='btn' href="<?php echo $url; ?>"><?php the_sub_field( 'texte' ); ?></a>
									<?php } ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
					</div>
				
					<div class="slides-vignettes bc-grid">
					<?php $gallerie_images = get_sub_field( 'gallerie' ); ?>
					<?php if ( $gallerie_images ) :  ?>
						<?php $vnb = 0; ?>
						<?php foreach ( $gallerie_images as $gallerie_image ): ?>
							<div data-slide-nb="<?php echo $vnb++; ?>" class="vignette vignette-<?php echo $vnb++; ?> bc-grid-col-1-of-3">
							<img src="<?php echo $gallerie_image['sizes']['thumbnail']; ?>" alt="<?php echo $gallerie_image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="bc-grid-col-half slides-container">

					<div class="slides">
					<?php $gallerie_images = get_sub_field( 'gallerie' ); ?>
					<?php if ( $gallerie_images ) :  ?>
						<?php $nb = 0; ?>
						<?php foreach ( $gallerie_images as $gallerie_image ): ?>
							<div data-slide-nb="<?php echo $nb++; ?>" class="item item-<?php echo $nb++; ?>">
							<img src="<?php echo $gallerie_image['sizes']['large']; ?>" alt="<?php echo $gallerie_image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
					</div>

					<div class="slides-nav">
						<div class="prev"><i class="fas fa-arrow-left"></i></div>
						<div class="next"><i class="fas fa-arrow-right"></i></div>
					</div>

				</div>
			</section>

		<!-- INSTAFEED SECTION -->

		<?php elseif ( get_row_layout() == 'section_instafeed' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'access_token' ); ?>
		<?php elseif ( get_row_layout() == 'editeur' ) : ?>
			<?php the_sub_field( 'editor' ); ?>
			<?php if ( get_sub_field( 'largeur' ) == 1 ) { 
			 // echo 'true'; 
			} else { 
			 // echo 'false'; 
			} ?>
			<?php the_sub_field( 'bg_color' ); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>