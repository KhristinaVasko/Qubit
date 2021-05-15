<?php
require_once THEME_DIR . '/inc/classes/ThemeHeader.class.php';
global $temp_html_url;
$temp_html_dir = THEME_DIR_URI . '/qubitSite/';
$header = new ThemeHeader();
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
	<?php echo $header->get_header_top(); ?>

	<div class="container">
		<div class="header-row row">
			<?php echo $header->get_header_logo(); ?>
			<?php echo $header->get_header_menu(); ?>
			<?php echo $header->get_header_icons(); ?>
		</div>
	</div>
</header>
