<article id="post<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID )?>"></span>

    <h1><?php the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</h2>') ?></h1>
    
    <div class="byline">
        <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
    </div>

    </header>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>

</article>