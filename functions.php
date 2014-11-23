<?php
add_theme_support( 'post-thumbnails' ); 
function cove_scripts_basic()
{
    // Register the script like this for a theme:
    wp_register_script( 'cove-general-script', get_template_directory_uri() . '/js/script.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'cove-general-script' );
}
add_action( 'wp_enqueue_scripts', 'cove_scripts_basic' );
function cove_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'cove-general-style', get_template_directory_uri() . '/css/style.css', array(), '20120208', 'all' );
    wp_register_style( 'cove-grid', get_template_directory_uri() . '/css/grid.css', array(), '20120208', 'all' );
    wp_register_style( 'cove-reset', get_template_directory_uri() . '/css/reset.css', array(), '20120208', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'cove-reset' );
    wp_enqueue_style( 'cove-general-style' );
    wp_enqueue_style( 'cove-grid' );
    
}
add_action( 'wp_enqueue_scripts', 'cove_styles_with_the_lot' );

function cove_posted_on() {

	// Set up and print post meta information.023
	printf( '<time class="entry-date" datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}
function cove_meta_tags() 
{
    $t = get_the_tags($post->ID);
    
    if(is_array($t))
    {
         foreach ($t as &$tag)
         {
        $tag_link = get_tag_link($tag->term_id);
        printf('<a href = "%1$s">%2$s</a>  ', 
                $tag_link,
                $tag -> name
            );
        }
    }
}
function cove_comments()
{
  comments_popup_link( 'leave a comment', 'comment (1)', 'comments (%)');
}

?>