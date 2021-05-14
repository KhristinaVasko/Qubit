<?php $temp_html_dir = THEME_DIR_URI . '/qubitSite/'; ?>

<?php get_header(); ?>

<div class="blog-container container">
	<div class="row">

		<div class="blog-sidebar col-xl-4">

			<div class="sidebar-categories">
				<h3 class="sidebar-cat-title">Categories</h3>
				<div class="sidebar-cat-content">

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir; ?>img/categ1.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">advice</p>
							<p class="sidebar-cat-number">7</p>
						</a>
					</div>

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir?>img/categ2.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">bodycare</p>
							<p class="sidebar-cat-number">6</p>
						</a>
					</div>

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir; ?>img/categ3.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">cosmetics</p>
							<p class="sidebar-cat-number">8</p>
						</a>
					</div>

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir; ?>img/categ4.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">fregrance</p>
							<p class="sidebar-cat-number">12</p>
						</a>
					</div>

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir; ?>img/categ5.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">haircare</p>
							<p class="sidebar-cat-number">6</p>
						</a>
					</div>

					<div class="sidebar-cat-content__item">
						<a href="#"><img src="<?php echo $temp_html_dir; ?>img/categ6.jpg" alt="" class="category-img">
							<p class="sidebar-cat-text">skincare</p>
							<p class="sidebar-cat-number">4</p>
						</a>
					</div>
				</div>
			</div>
			<!-- ! categories -->



			<div class="sidebar-about__container">
				<h3 class="sidebar-about-title">About me</h3>
				<img src="<?php echo $temp_html_dir; ?>img/about.jpg" alt="about me" class="sidebar-about-img">
				<p class="sidebar-about-text">Welcome to products of the week,
					every Thursday I'll be talking about a
					new product. On that page, you can read about skin car
					e solutions for all...</p>
			</div>
			<!-- ! about me -->-->
			<div class="sidebar-recent-com">
				<h3 class="sidebar-com-title">Recent Comments</h3>
				<div class="sidebar-recent-com__item">
					<h4 class="sidebar-com__item-text">Summer Body Oils for Soft and Glowing Skin</h4>
					<div class="sidebar-com-author">by <span>Laura Craft</span></div>
				</div>

				<div class="sidebar-recent-com__item">
					<h4 class="sidebar-com__item-text">Rodarte Paris Couture Week with Morgan Taylor</h4>
					<div class="sidebar-com-author">by <span>Laura Craft</span></div>
				</div>
			</div>
		</div>




		<div class="blog-list col-xl-8">
			<div class="blog__list-container">
				<div class="blog-item">
					<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="blog-list__container">
							<a class="blog-item__permalink" href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('medium');?>
								<p class="blog-item__title"><?php the_title() ?></p>
								<p class="blog-item__excerpt"><?php the_excerpt(); ?></p>
								<p><?php get_the_date('d')?></p>
							</a>
						</div>


					<?php endwhile; else : ?>
						<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
					<?php endif; ?>
				</div>
			</div>


		</div>
	</div>
</div>


<?php wp_footer(); ?>
<?php get_footer(); ?>
