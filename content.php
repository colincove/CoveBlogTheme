<article id="post-<?php the_ID(); ?>" class="col-5of5 <?php post_class();?>">

	<section class="post-content col-4of5"  >
		<header class="col-4of4">
            <?php
                if ( is_single() ) :
                    the_title( '<h1>', '</h1>' );
                else :
                    the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                endif;
            ?>
		
			<section>
				<ul>
					<li>
						<?php cove_posted_on(); ?>
					</li>
                    <?php if (get_the_tags($post->ID)) : ?>
					<li>
						tags: <?php cove_meta_tags(); ?>
					</li>
                    <?php endif; ?>
					<li>
                        <?php cove_comments(); ?>
					</li>
				</ul>
			</section>
		<?php 
            if(is_single() || get_post_format( $post->ID ) == "image"):
            $thumb = get_the_post_thumbnail($post->ID);
            print($thumb);
            else:
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
            //print($thumb[0]);
            if($thumb):
        ?>
        <div class="featured-img col-3of4" style="background-image: url('<?php echo $thumb[0]; ?>')">
		  </div>
            <?php endif;endif; ?>
        </header>
		<!--<div class="featured-img col-3of4">
		</div>-->
		<div class="col-4of4 text-content"> 
			<?php the_content(""); ?>
		
		<footer class="col-4of4">
            
            <?php if( strpos( $post->post_content , "<!--more-->" ) != false ) { ?>
                <a href="<?php the_permalink(); ?>">continue reading</a>
            <?php } ?>
		</footer>
    
	</section>
	<img class="col-1of5" src='<?php echo cove_category_img_src(); ?>' >
            
</article>

