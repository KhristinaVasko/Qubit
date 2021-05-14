<?php

function get_theme_page_title_block($title, $has_breadcrumbs = true)
{
	$breadcrumbs = yoast_breadcrumb('<div id="breadcrumbs">', '</div>', false);

	$html_breadcrumbs = ($has_breadcrumbs) ? '<div class="col-12">' . $breadcrumbs . '</div>' : null;

	$block = <<<HTML
<div class="post-breadcrums">
	<h3 class="single-title">{$title}</h3>
	{$html_breadcrumbs}
</div>
HTML;

	return $block;
}
