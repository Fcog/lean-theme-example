<?php

$class         = $args['class'] ?? '';
$section_title = $args['title'] ?? '';
$subtitle      = $args['subtitle'] ?? '';
$description   = $args['description'] ?? '';

if ( empty( $section_title ) ) {
	return;
}
?>

<div
	data-molecule="section"
	class="section <?php echo esc_attr( $class ); ?>">

	<div class="row">

		<div class="col-md-7">

			<h3><?php echo esc_html( $section_title ); ?></h3>

			<?php if ( $subtitle ) : ?>

				<h5><?php echo esc_html( $subtitle ); ?></h5>

			<?php endif; ?>

			<?php if ( $description ) : ?>

				<div class="section__desc">
					<?php echo esc_html( $description ); ?>
				</div>

			<?php endif; ?>

		</div>

	</div>

</div>
