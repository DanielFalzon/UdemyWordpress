<?php get_header(); ?>

<div id="primary" class="content-area extended ">

    <main id="main" class="site-main" role="main">

        <h1><?php the_archive_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--TEMP: Since this will only load the template parts with content-posts in the name
            a new file is created call content-posts-gallery-->
            <?php get_template_part( 'template-parts/content', 'portfolio' )?>

        <?php endwhile; else :  ?>

            <?php get_template_part( 'template-parts/content', 'none' )?>

        <?php endif; ?>

        <?php echo paginate_links(); ?>

        <p style="width:100%; display:inline-block;">Template: taxonomy-skills.php</p>

    </main>


</div>

<?php get_footer(); ?>