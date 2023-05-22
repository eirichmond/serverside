<?php
/*
Plugin Name: My Block Plugin
Description: Custom block plugin with server-side rendering using JSX.
Version: 1.0.0
Author: Your Name
*/

// Register the block assets
function my_block_plugin_register_block() {
    if ( ! function_exists( 'register_block_type' ) ) {
        // Gutenberg is not active, do not register the block
        return;
    }

    // Enqueue block editor assets
    wp_enqueue_script(
        'my-block-plugin-editor-script',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
    );

    // Register the block
    register_block_type( 'my-block-plugin/my-block', array(
        'editor_script' => 'my-block-plugin-editor-script',
        'editor_style'  => 'my-block-plugin-editor-style',
        'script'        => 'my-block-plugin-script',
        'style'         => 'my-block-plugin-style',
        'render_callback' => 'my_block_plugin_render',
    ) );
}
add_action( 'init', 'my_block_plugin_register_block' );

// Server-side rendering callback
function my_block_plugin_render( $attributes ) {
    ob_start();
    global $wpdb;
    var_dump($wpdb);
    ?>
    <div class="my-block">
        <h2><?php echo esc_html( 'foobar' ); ?></h2>
        <p><?php echo esc_html( 'bazfax' ); ?></p>
    </div>
    <?php
    return ob_get_clean();
}
