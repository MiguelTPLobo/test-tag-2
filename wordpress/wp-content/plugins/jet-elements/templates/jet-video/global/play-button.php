<?php
/**
 * Play button template
 */

$this->add_render_attribute( 'play_button', 'class', 'jet-video__play-button' );
$this->add_render_attribute( 'play_button', 'role', 'button' );
$this->add_render_attribute( 'play_button', 'tabindex', 0 );

if ( isset( $settings['play_button_accessibility'] ) ) {
	$this->add_render_attribute( 'play_button', 'aria-label', $settings['play_button_accessibility'] );
} else {
	$this->add_render_attribute( 'play_button', 'aria-label', '' );
}

if ( ! empty( $settings['play_button_hover_animation'] ) ) {
	$this->add_render_attribute( 'play_button', 'class', 'jet-video__play-button--animation-' . esc_attr( $settings['play_button_hover_animation'] ) );
}
?>

<div <?php $this->print_render_attribute_string( 'play_button' ); ?>><?php
	if ( 'icon' === $settings['play_button_type'] ) {
		$this->_icon( 'play_button_icon', '<span class="jet-elements-icon jet-video__play-button-icon">%s</span>' );
	} elseif ( 'image' === $settings['play_button_type'] ) {
		echo jet_elements_tools()->get_image_by_url(
			$settings['play_button_image']['url'],
			array(
				'class' => 'jet-video__play-button-image',
				'alt'   => esc_html__( 'Play Video', 'jet-elements' ),
			)
		);
	} ?>
	<span class="elementor-screen-only"><?php esc_html_e( 'Play Video', 'jet-elements' ); ?></span>
</div>
