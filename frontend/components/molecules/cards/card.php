<?php

$class       = $args['class'] ?? '';
$card_title  = $args['title'] ?? '';
$description = $args['description'] ?? '';
$image_url   = $args['image_url'] ?? '';
?>

<div
	data-molecule="cards/card"
	class="grid_card <?php echo esc_attr( $class ); ?>">

	<div class="grid_card__image">

		<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $card_title ); ?>">

	</div>

	<div class="grid_card__desc">

		<h6><?php echo esc_html( $card_title ); ?></h6>

		<p>
			<?php echo esc_html( $description ); ?>
		</p>

	</div>

</div>
