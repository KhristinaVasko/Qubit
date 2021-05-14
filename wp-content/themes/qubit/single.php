<?php get_header(); ?>
<?php
global $temp_html_url;
$title = get_the_title();
$date = get_the_date();
$author = get_the_author();
$content = get_the_content();
$thumbnail_url = get_the_post_thumbnail_url();
$html_thumbnail = get_the_post_thumbnail();
echo get_theme_page_title_block($title, true);
?>

<div class="post-container container">
	<div class="row">
		<div>
			<?php echo $html_thumbnail; ?>
			<h5 class="single-info"><?php echo $date ?> , written by <?php echo $author; ?></h5>
			<div class="post-subtitle"><?php the_category();?></div>
			<p class="post-text">
				<?php echo $content; ?>
			</p>
			<div class="post-author">
				<a href="#" class="author-link">Laura Craft</a>
			</div>

			<div class="comments-form">
				<h4>Leave a comment</h4>
				<div class="row">
					<form action="" method="get" class="comment-form row">

						<div class="clearfix"></div>
						<div class="com-textarea">
							<textarea name="" cols="50" rows="10" placeholder="Whats in your mind" class="com-textarea"></textarea>
						</div>
						<div class="text-center">
							<input class="post-com" name="" type="button" value="Post Comment">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>



<?php get_footer(); ?>
