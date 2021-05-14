<?php
global $temp_html_url;
$temp_html_dir = THEME_DIR_URI . '/qubitSite/';
?>


<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
	<div class="header-top">
		<h4 class="header-top_text">Handmade - 100% All Natural And Organic Body Care Products</h4>
	</div>

	<div class="container">
		<div class="header-row row">
			<div class="header-left col-sm-3">
				<img src="<?php echo $temp_html_dir; ?>img/logo.png" alt="" class="header-logo">
			</div>

			<div class="header-navigation col-sm-5">
				<nav class="header-nav-list">
					<a href="#" class="header-nav-list__item">Home</a>
					<a href="#" class="header-nav-list__item">Shop</a>
					<a href="#" class="header-nav-list__item">Blog</a>
					<a href="#" class="header-nav-list__item">Contacts</a>
				</nav>
			</div>

			<div class="header-right col-sm-4">
				<div class="header-search">
					<a href="" class="header-right-item"><i class="fas fa-search"></i></a>
					<input type="text" class="header-input">
				</div>
				<a href="" class="header-right-item"><i class="far fa-heart"></i></a>
				<a href="" class="header-right-item"><i class="fas fa-user-alt"></i></a>
				<a href="" class="header-right-item"><i class="fas fa-shopping-cart"></i></a>
			</div>

		</div>
	</div>
</header>
