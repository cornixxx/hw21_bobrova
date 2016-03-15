
<form role="search" method="get" id="searchform"
      class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search" />
        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
    </div>
</form>