<?php
if ( function_exists( 'register_block_pattern_category' ) ) {
    register_block_pattern_category(
        'my-test-blocks',
        array( 'label' => 'My Test Blocks')
    );
}

if ( function_exists( 'register_block_pattern' ) ) {
    register_block_pattern(
        'my-test-blocks/my-text',
        array(
            'title'         => 'My Text',
            'categories'    => array( 'my-test-blocks' ),
            'viewportWidth' => 1440,
            'content'       => '<!-- wp:paragraph --><p>My Test</p><!-- /wp:paragraph -->',
        )
    );
}