<div class="search-form">
	<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input class='searchform__input' type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search">
        <!--<input type="submit"  value="GO" />-->
    </form>
</div>