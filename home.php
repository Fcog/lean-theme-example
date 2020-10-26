<?php

use Lean\Load;

get_header();

$grid_items = [
	[
		'image_url'   => get_stylesheet_directory_uri() . '/frontend/static/images/service/sample-01.jpg',
		'title'       => 'FOOD',
		'description' => 'Pelet ikan, cacing sutra, kedelai, remah-remah roti, ganggang, vitamin.',
	],
	[
		'image_url'   => get_stylesheet_directory_uri() . '/frontend/static/images/service/sample-02.jpg',
		'title'       => 'POND',
		'description' => 'Pelet ikan, cacing sutra, kedelai, remah-remah roti, ganggang, vitamin.',
	],
	[
		'image_url'   => get_stylesheet_directory_uri() . '/frontend/static/images/service/sample-03.jpg',
		'title'       => 'BREED',
		'description' => 'Pelet ikan, cacing sutra, kedelai, remah-remah roti, ganggang, vitamin.',
	],
	[
		'image_url'   => get_stylesheet_directory_uri() . '/frontend/static/images/service/sample-01.jpg',
		'title'       => 'VARIETY',
		'description' => 'Pelet ikan, cacing sutra, kedelai, remah-remah roti, ganggang, vitamin.',
	],
];

Load::template(
	'home/home',
	[
		'hero_title'           => get_bloginfo( 'title' ),
		'hero_subtitle'        => get_bloginfo( 'description' ),
		'hero_videos'          => [
			get_stylesheet_directory_uri() . '/frontend/static/videos/koi-video.mp4',
			get_stylesheet_directory_uri() . '/frontend/static/videos/koi-video2.mp4',
		],
		'section1_title'       => 'Our Story',
		'section1_subtitle'    => 'Selamat Datang di Berkah Alam',
		'section1_description' => 'Website khusus pecinta ikan koi.',
		'section2_title'       => 'OUR SERVICE',
		'section2_subtitle'    => 'Kami menyediakan segala kebutuhan koi',
		'grid_items'           => $grid_items,
	]
);

get_footer();
