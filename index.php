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
Hello From home page
<div class="site-container centered-container">
    <?php get_sidebar(); ?>
    <section id="main-container" class="col-5of7 padded">
        <div class="top-devider col-5of5">
            <nav class="blog-nav">
                <ul>
                    <li class="selected"><a href="index.php">all</a></li>
                    <li><a href="index.php">sketchbook</a></li>
                    <li><a href="index.php">technical</a></li>
                    <li><a href="index.php">opinion</a></li>
                    <li><a href="index.php">search</a></li>
                </ul>
            </nav>
        </div>
        <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );

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