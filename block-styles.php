<?php
if ( function_exists( 'register_block_style' ) ) {
	function my_theme_register_block_styles() {
		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'paragraph_text_red',
				'label' => "赤文字",
			)
		);
    }
    add_action( 'init','my_theme_register_block_styles' );
}