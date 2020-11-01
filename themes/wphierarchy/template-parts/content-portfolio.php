<article id="post<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1><?php the_title('<h2><a href="'. get_the_permalink() . '">', '</a></h2>') ?></h1>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>
    </header>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>

</article>