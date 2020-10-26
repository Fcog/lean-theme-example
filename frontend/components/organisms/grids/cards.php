<?php

use Lean\Load;

$class      = $args['class'] ?? '';
$grid_items = $args['grid_items'] ?? [];

if ( empty( $grid_items ) ) {
	return;
}
?>

<div
	data-organism="grids/cards"
	class="<?php echo esc_attr( $class ); ?>">

	<div class="row">

		<?php
		foreach ( $grid_items as $item ) {
			Load::molecule(
				'cards/card',
				array_merge(
					$item,
					[
						'class' => 'col-md-3',
					]
				)
			);
		}
		?>

	</div>

</div>
