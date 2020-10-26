<?php

use Lean\Load;

$class                = $args['class'] ?? '';
$hero_title           = $args['hero_title'] ?? '';
$hero_subtitle        = $args['hero_subtitle'] ?? '';
$hero_videos          = $args['hero_videos'] ?? '';
$section1_title       = $args['section1_title'] ?? '';
$section1_subtitle    = $args['section1_subtitle'] ?? '';
$section1_description = $args['section1_description'] ?? '';
$section2_title       = $args['section2_title'] ?? '';
$section2_subtitle    = $args['section2_subtitle'] ?? '';
$section2_description = $args['section2_description'] ?? '';
$grid_items           = $args['grid_items'] ?? [];
?>

<div
	id="home"
	data-template="home"
	class="<?php echo esc_attr( $class ); ?>">

	<?php
	Load::organism(
		'heroes/hero',
		[
			'title'    => $hero_title,
			'subtitle' => $hero_subtitle,
			'videos'   => $hero_videos,
		]
	);
	?>

	<div class="container">

		<div id="about-us">

			<?php
			Load::molecule(
				'headings/section/section',
				[
					'class'       => 'pb-16',
					'title'       => $section1_title,
					'subtitle'    => $section1_subtitle,
					'description' => $section1_description,
				]
			);
			?>

		</div>

		<div id="our-service">

			<?php
			Load::molecule(
				'headings/section/section',
				[
					'title'     => $section2_title,
					'subtitle'  => $section2_subtitle,
					'paragraph' => $section2_description,
				]
			);

			Load::organism(
				'grids/cards',
				[
					'grid_items' => $grid_items,
				]
			);
			?>

		</div>

	</div>

</div>
