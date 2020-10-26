<?php

$class      = $args['class'] ?? '';
$hero_title = $args['title'] ?? '';
$subtitle   = $args['subtitle'] ?? '';
$videos     = $args['videos'] ?? [];
?>

<div
	data-organism="hero"
	class="hero <?php echo esc_attr( $class ); ?>">

	<div class="hero__title">
		<h1><?php echo esc_html( $hero_title ); ?></h1>
		<h3><?php echo esc_html( $subtitle ); ?></h3>
	</div>

	<div class="mobile__image">
	</div>

	<div id="carouselControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">

			<?php $i = 0; ?>

			<?php foreach ( $videos as $video ) : ?>

				<div class="carousel-item carousel__item
					<?php if ( 0 === $i ) : ?>
					active
					<?php endif; ?>">

					<video autoplay muted loop width="100%">
						<source src="<?php echo esc_url( $video ); ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>

				</div>

				<?php $i = + 1; ?>

			<?php endforeach; ?>

		</div>

		<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>

</div>
