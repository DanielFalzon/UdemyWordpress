<?php 
    if( ! is_active_sidebar( 'main-sidebar') ) {
        return;
    }
?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php 
        $args = [
        'type'              => 'yearly',
        'limit'             => 3,
        'show_post_count'   => true
        ];

        wp_get_archives( $args) ;
    ?>
    <?php dynamic_sidebar( 'main-sidebar' ); echo("test")?>
</aside>