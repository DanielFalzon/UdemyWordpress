<article id="post<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID )?>"></span>
    <?php esc_html_e("Content gallery template test!!", 'wphierarchy'); ?>

    <h1><?php the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</h2>') ?></h1>
    
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>


</article>