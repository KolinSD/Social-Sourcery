<?php get_header (); ?>



	<!-- Home Section -->
	<section id="home" class="home container">

		<!-- Ful Screen Slider -->
		<div id="fullscreen">
			<!-- Slides -->
			<div class="slides-container relative">
				<!-- Slider Images -->
				<div class="background3 parallax"></div>
				<div class="background55 parallax"></div>
				<div class="background46 parallax"></div>
				 <!-- End Slider Images -->	 
			</div>
			<!-- End Slides -->

			<!-- Slider Controls -->
			<nav class="slides-navigation">
				<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
				<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
			</nav>

		</div>
		<!-- End Ful Screen Home -->

		<!-- Home Inner Details -->
		<div class="home-inner t-center" data-0="opacity:1;" data-600="opacity:0;">

			<!-- Home Text Slider -->
			<div class="home-text-slider relative">

				<!-- Home Text Slider -->
				<h1 class="white thin text-rotetor">

					<!-- Home Texts -->
					<span class="rotate">
						<?php echo get_bloginfo('name'); ?>
						
					</span>
					<!-- End Home Texts -->

				</h1>
				<!-- End Home Text Slider -->
				
				<!-- Home Fixed Text -->		
				<p class="home-fixed-text white thin t-center"> <?php echo get_bloginfo('description'); ?></p>

			</div>
			<!-- End Home Text Slider -->

			<!-- Home Button -->
			<a href="#about" class="home-button light-button thin scroll">Tell me more</a>

		</div>
		<!-- End Home Inner Details -->

		
	</section>
	<!-- End Home Section -->


	<!-- About Section -->
	<section id="about" class="container">

		<!-- About Inner -->
		<div class="inner t-center">

			<!-- Header -->
			<h1 class="header header-style-1 dark light animated" data-animation="fadeIn" data-animation-delay="200">
				<span class="semibold colored"> <?php
                $idObj = get_category_by_slug('s_about');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?> </span><?php echo category_description($id); ?>
			</h1>
			
			<?php
			// The Query to obtain posts by tag
			$about = new WP_Query( array ( 'tag' => 's_about_sub_header' ) );
			// The Loop
				if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post();  ?>
			<!-- Header Text -->		
			<p class="light animated" data-animation="fadeIn" data-animation-delay="200">
				<?php the_content(); ?> 
			</p>
			            <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query -->
			<!-- Boxes and Box Type -->
			<div class="boxes boxes-type-1 clearfix">			

				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about1 = new WP_Query( array ( 'tag' => 'rocket' ) );
				// The Loop
				if ( $about1->have_posts() ) : while ( $about1->have_posts() ) : $about1->the_post();  ?>
				<div class="col-xs-3 box animated" data-animation="fadeIn" data-animation-delay="300">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-rocket"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?> 
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?> 
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>

				</div>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about1-->
				<!-- End Box -->

				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about2 = new WP_Query( array ( 'tag' => 'desktop' ) );
				// The Loop
				if ( $about2->have_posts() ) : while ( $about2->have_posts() ) : $about2->the_post();  ?>
				<div class="col-xs-3 box animated" data-animation="fadeIn" data-animation-delay="350">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-desktop"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?> 
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?>
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about2-->
				</div>
				<!-- End Box -->
				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about3 = new WP_Query( array ( 'tag' => 'cog' ) );
				// The Loop
				if ( $about3->have_posts() ) : while ( $about3->have_posts() ) : $about3->the_post();  ?>
				<div class="col-xs-3 box animated" data-animation="fadeIn" data-animation-delay="400">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-cog"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?> 
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?>  
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about3-->
				</div>
				<!-- End Box -->
				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about4 = new WP_Query( array ( 'tag' => 'pencil' ) );
				// The Loop
				if ( $about4->have_posts() ) : while ( $about4->have_posts() ) : $about4->the_post();  ?>
				<div class="col-xs-3 box animated" data-animation="fadeIn" data-animation-delay="450">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-pencil"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?>
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?>
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about4-->
				</div>
				<!-- End Box -->
				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about5 = new WP_Query( array ( 'tag' => 'pencil2' ) );
				// The Loop
				if ( $about5->have_posts() ) : while ( $about5->have_posts() ) : $about5->the_post();  ?>
				<div class="col-xs-6 col-sm-6 box animated" data-animation="fadeIn" data-animation-delay="450">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-pencil"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?>
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?>
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about5-->
				</div>
				<!-- End Box -->
				<!-- Box -->
				<?php
				// The Query to obtain posts from category
				$about6 = new WP_Query( array ( 'tag' => 'diamond1' ) );
				// The Loop
				if ( $about6->have_posts() ) : while ( $about6->have_posts() ) : $about6->the_post();  ?>
				<div class="col-xs-6 col-sm-6 box animated" data-animation="fadeIn" data-animation-delay="450">
					<!-- Box Icon -->
					<div class="box-icon fullwidth t-center normal">
						<!-- Icon -->
						<a href="" class="changeable-icon">
							<!-- Icon Selector -->
							<i class="fa fa-diamond"></i>
						</a>
					</div>
					<!-- End Box Icon -->

					<!-- Box Header -->
					<h4 class="box-header uppercase no-padding">
						<?php the_title(); ?>
					</h4>

					<!-- Box Description -->
					<p class="no-padding no-margin">
						<?php the_content(); ?> 
					</p>

					<!-- Box Bottom Button -->
					<a href="" class="box-button circle">
						<i class="fa fa-plus"></i>
					</a>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $about6-->
				</div>
				<!-- End Box -->

						

			</div>
			<!-- End Boxes -->
		</div>
		<!-- End About Inner -->
	</section>
	<!-- End About Section -->









	<!-- Features Section -->
	<section id="features" class="container background5 parallax1">

		<!-- Features Inner -->
		<div class="inner t-center">

			<!-- Header -->
			<h2 class="header header-style-1 white semibold uppercase animated" data-animation="fadeIn" data-animation-delay="100">
				<?php
                $idObj = get_category_by_slug('s_features');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?> 
			</h2>
			<!-- Header Text -->
			<p class="light animated" data-animation="fadeIn" data-animation-delay="100">
				<?php echo category_description($id); ?>
			</p>

			<!-- Boxes  -->
			<div class="feature-boxes clearfix">

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature1 = new WP_Query( array ( 'tag' => 'rocket1' ) );
				// The Loop
				if ( $feature1->have_posts() ) : while ( $feature1->have_posts() ) : $feature1->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="100">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-rocket"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
						<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature1-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature2 = new WP_Query( array ( 'tag' => 'briefcase' ) );
				// The Loop
				if ( $feature2->have_posts() ) : while ( $feature2->have_posts() ) : $feature2->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="150">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-briefcase"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					    <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature2-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature3 = new WP_Query( array ( 'tag' => 'clock' ) );
				// The Loop
				if ( $feature3->have_posts() ) : while ( $feature3->have_posts() ) : $feature3->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="200">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-clock-o"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					    <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature3-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature4 = new WP_Query( array ( 'tag' => 'cloud' ) );
				// The Loop
				if ( $feature4->have_posts() ) : while ( $feature4->have_posts() ) : $feature4->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="250">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-cloud"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					     <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature4-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature5 = new WP_Query( array ( 'tag' => 'leaf' ) );
				// The Loop
				if ( $feature5->have_posts() ) : while ( $feature5->have_posts() ) : $feature5->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="300">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-leaf"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					    <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature5-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature6 = new WP_Query( array ( 'tag' => 'diamond' ) );
				// The Loop
				if ( $feature6->have_posts() ) : while ( $feature6->have_posts() ) : $feature6->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="350">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-diamond"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					    <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature6-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature7 = new WP_Query( array ( 'tag' => 'check' ) );
				// The Loop
				if ( $feature7->have_posts() ) : while ( $feature7->have_posts() ) : $feature7->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="400">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-check"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					  <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature7-->
				</div>
				<!-- End Box  -->

				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature8 = new WP_Query( array ( 'tag' => 'share' ) );
				// The Loop
				if ( $feature8->have_posts() ) : while ( $feature8->have_posts() ) : $feature8->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="450">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-share-alt"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					<?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature8-->
				</div>
				<!-- End Box  -->
				<!-- Box  -->
				<?php
				// The Query to obtain posts from category
				$feature9 = new WP_Query( array ( 'tag' => 'mobile' ) );
				// The Loop
				if ( $feature9->have_posts() ) : while ( $feature9->have_posts() ) : $feature9->the_post();  ?>
				<div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="500">
					<!-- Box Icon  -->
					<div class="f-left feature-icon">
						<i class="fa fa-mobile"></i>
					</div>
					<!-- Box Texts  -->
					<div class="feature-text f-left t-left white">
						<!-- Box Header  -->
						<h4 class="no-margin normal no-padding">
							<?php the_title(); ?>
						</h4>
						<!-- Box Description  -->
					
							<?php the_content(); ?>
						
					</div>
					 <?php endwhile; 
                         wp_reset_postdata();
                         else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?> <!-- End The Query $feature9-->
				</div>
				<!-- End Box  -->	
				

				

			</div>
			<!-- End Boxes  -->
		</div>
		<!-- End Features Inner  -->
	</section>
	<!-- End Features Section  -->


	<!-- Timeline Section -->
	<section id="timeline" class="container background42 parallax7 light-bg">

		<!-- Featured Works Inner -->
		<div class="inner t-center animated" data-animation="fadeIn" data-animation-delay="100">

			<!-- Header -->
			<h2 class="header header-style-1 dark semibold uppercase">
				<?php
                $idObj = get_category_by_slug('s_timeline');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?> 
			</h2>
			<!-- Header Text -->
			<p class="light"> <?php echo category_description($id); ?>
                
            </p>
          
		</div>

	</section>
	<!-- End Timeline -->


	<!-- Clients Section -->
	<section id="clients" class="background43 parallax6 dark-bg">
     
		<!-- Inner -->
		<div class="inner t-center clearfix">
			<!-- Header -->
			<h1 class="header strip header-style-2 white georgia t-center  animated" data-animation="fadeIn" data-animation-delay="100">
				<?php
                $idObj = get_category_by_slug('s_clients');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?> 
			</h1>
			<!-- Header Text -->
			<p class="normal t-center animated" data-animation="fadeIn" data-animation-delay="100">
				<?php echo category_description($id); ?></p>

			<div class="boxes boxes-type-4 light box-carousel clearfix animated" data-animation="fadeIn" data-animation-delay="500">

				<!-- Box -->
				<?php                    
				// The Query to publish client's quotes
				$client = new WP_Query( array ( 'category_name' => 's_clients', 'posts_per_page' => 3, ) );
				
				// The Loop
					if ( $client->have_posts() ) : while ( $client->have_posts() ) : $client->the_post();  ?>
				<div class="box white georgia">
					<!-- Box Image -->
					
					 <?php if ( has_post_thumbnail() ) { ?> <!-- Ability to publish client's photos from admin panel -->
                                
					<div class="box-image fullwidth t-center normal">
						<!-- Image -->
						<a href="#" class="changeable-image">
							<?php the_post_thumbnail();} ?>
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase ">
						<?php the_title(); ?>
					</h4>
					<!-- Position -->
					<h5 class="colored ">
						<?php the_content(); ?>
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						<?php the_excerpt(); ?>
					</p>
					<?php endwhile; 
					wp_reset_postdata();
					else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?> <!-- End The Query $client -->
				</div>
				<!-- End Box -->				

			</div>
			<!-- End Boxes -->
		</div>
		<!-- End Inner -->
	</section>
	<!-- End Clients -->



	<!-- Contact Section -->
	<section id="contact" class="relative contact">

		<div class="grayscale-bg absolute background5 parallax9 xdark-bg"></div>

		<!-- Inner -->
		<div class="inner t-center clearfix no-black-white animated" data-animation="fadeIn" data-animation-delay="800">
			<!-- Header -->
			<h1 class="header header-style-2 georgia t-center ">
				<?php
                $idObj = get_category_by_slug('s_contacts');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?> 
			</h1>
			<!-- Header Text -->
			<p class="light t-center">
				<?php echo category_description($id); ?> 
			</p>

			<!-- Address and Form -->
			<div class="fullwidth clearfix">

                <!-- Address -->
				<div class="address f-left t-left">

					<!-- Address Header -->
					<div class="address_head">
						<!-- Header -->
						<h3>
							
						</h3>
					</div>
					<!-- End Address Header -->


					<!-- Address Box -->
					<a href="tel:<?php $options=get_option('sample_theme_options');
                                echo $options['phonetext']; ?>" class="box light hover">
						<!-- Icon -->
						<div class="icon">
							<!-- Icon SRC -->
							<i class="fa fa-phone colored"></i>
						</div>
						<!-- Details -->
						<div class="details">
							<h4>
								Phone:
							</h4>
							<p>
								<?php $options=get_option('sample_theme_options');
                                echo $options['phonetext']; ?>
							</p>
						</div>
						
					</a>
					<!-- End Box -->

					
					<!-- Address Box -->
					<a href="mailto:<?php $options=get_option('sample_theme_options');
                                echo $options['emailtext']; ?>" class="box light hover">
						<!-- Icon -->
						<div class="icon">
							<!-- Icon SRC -->
							<i class="fa fa-envelope colored"></i>
						</div>
						<!-- Details -->
						<div class="details">
							<h4>
								E-Mail:
							</h4>
							<p>
								<?php $options=get_option('sample_theme_options');
                                echo $options['emailtext']; ?>
							</p>
						</div>
						
					</a>
					<!-- End Box -->


					<!-- Address Box -->
					<a href="#map" class="box light hover scroll">
						<!-- Icon -->
						<div class="icon">
							<!-- Icon SRC -->
							<i class="fa fa-map-marker colored"></i>
						</div>
						<!-- Details -->
						<div class="details">
							<h4>
								Address:
							</h4>
							<p>
								<?php $options=get_option('sample_theme_options');
                                echo $options['addresstext']; ?>
							</p>
						</div>
						
					</a>
					<!-- End Box -->


					<!-- Address Box -->
					<a href="#" class="box light hover scroll">
						<!-- Icon -->
						<div class="icon">
							<!-- Icon SRC -->
							<i class="fa fa-skype colored"></i>
						</div>
						<!-- Details -->
						<div class="details">
							<h4>
								Skype:
							</h4>
							<p>
								<?php $options=get_option('sample_theme_options');
                                echo $options['skypetext']; ?>
							</p>
						</div>
						
					</a>
					<!-- End Box -->

					<!-- Address Box -->
					<div class="socials">
                         <?php dynamic_sidebar('socials'); ?>
						

					</div>
					<!-- End Box -->

				</div>
				<!-- End Address -->

			<!-- End Contact, Address Area -->
		</div>
		<!-- End Inner -->
	</section>
	<!-- End Contact Section -->


	<!-- Map Section -->
	<section id="map" class="fullwidth">
		<!-- Google Map Script -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Google Map ID -->
		<div id="google_map"></div>
	</section>
	<!-- End Map Section -->


<?php get_footer(); ?>