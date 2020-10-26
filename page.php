<?php

use Lean\Load;

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		Load::template(
			'page/page',
			[
				'title'   => get_the_title(),
				'content' => get_the_content(),
			]
		);
	}
}

get_footer();
