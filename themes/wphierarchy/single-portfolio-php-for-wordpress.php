<?php get_header( 'splash' ); ?>

<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!--This will first load all the files starting with content then select the
            right file depending on the post format returned...-->
                <article id="post<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">
                        <h1><?php the_title('<h1>', '</h1>') ?></h1>

                    </header>

                    <div class="entry-content">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>

                        <?php the_content(); ?>
                        
                        <P>
                            Skills:
                            <?php the_terms( $post->ID, 'skills'); ?>

                        </P>


                        <p>
                            <a class="button" href="<?php the_field( 'url' )?>">
                                <?php esc_html_e('Visit the Site', 'wphierarchy')?>
                            </a>
                        </p>
                    </div>

                </article>
        <?php endwhile;
        endif; ?>

        <p>Template: single-portfolio-php-for-wordpress.php</p>
    </main>

</div>
<?php get_footer( 'splash' ); ?>