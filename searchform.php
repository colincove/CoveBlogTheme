<form action="<?php echo home_url( '/' ); ?>" method="get">
	<fieldset>
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
	</fieldset>
</form>