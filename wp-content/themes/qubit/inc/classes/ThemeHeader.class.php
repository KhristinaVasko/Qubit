<?php
class ThemeHeader {

	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');

	}
	/**
	 * Header top
	 */
	function get_header_top() {
		global $temp_html_dir;
		$block = <<<HTML
<div class="header-top">
	<h4 class="header-top_text">Handmade - 100% All Natural And Organic Body Care Products</h4>
</div>
HTML;
		return $block;
	}

	/**
	 * LOGO
	 */
	function get_header_logo() {
		$logo_url = home_url('/');
		$logo_image = $this->acf_fields['logo']['url'];
		global $temp_html_dir;
		$block = <<<HTML
<div class="header-left col-sm-3">
<a href="{$logo_url}">
	<img src="{$logo_image}" alt="" class="header-logo">
</a>

</div>
HTML;
		return $block;
	}

	/**
	 * Main icons
	 */
	function get_header_icons() {
		global $temp_html_dir;
		$block = <<<HTML
<div class="header-right col-sm-4">
	<div class="header-search">
		<a href="" class="header-right-item"><i class="fas fa-search"></i></a>
		<input type="text" class="header-input">
	</div>
	<a href="" class="header-right-item"><i class="far fa-heart"></i></a>
	<a href="" class="header-right-item"><i class="fas fa-user-alt"></i></a>
	<a href="" class="header-right-item"><i class="fas fa-shopping-cart"></i></a>
</div>

HTML;
		return $block;
	}

	/**
	 * Main menu
	 */
	function get_header_menu() {
		global $temp_html_dir;
		$block = <<<HTML
<div class="header-navigation col-sm-5">
	<nav class="header-nav-list">
		<a href="#" class="header-nav-list__item">Home</a>
		<a href="#" class="header-nav-list__item">Shop</a>
		<a href="#" class="header-nav-list__item">Blog</a>
		<a href="#" class="header-nav-list__item">Contacts</a>
	</nav>
</div>
HTML;
		return $block;
	}


}
