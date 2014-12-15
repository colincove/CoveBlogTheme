<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="site-container centered-container">
    <?php get_sidebar(); ?>
    <section id="main-container" class="col-5of7 padded">
        <div class="top-devider col-5of5">
            <?php include("nav.php"); ?>
        </div>
        <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    if($_GET["category"]):
                     query_posts("category_name=".$_GET["category"]);
                    endif;
                   
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
?>
        <div class = "pagination-single col-4of5">
            <div><?php previous_post_link('« %link');?></div><div><?php next_post_link('%link »');   ?> </div>
        </div>
                        
        <?php
                        if ( comments_open() || get_comments_number() ) 
                        {
                                 comments_template();
                        }

                    endwhile;
                    // Previous/next post navigation.
                    //twentyfourteen_paging_nav();

                else :
                    // If no content, include the "No posts found" template.
                    //get_template_part( 'content', 'none' );

                endif;
            ?>
         
    </section>
</div>
<?php
get_footer();
?>