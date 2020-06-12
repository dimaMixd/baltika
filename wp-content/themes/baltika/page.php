<?php get_header(); ?>
<div class="section section--hero page" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <?php get_template_part( 'navigation' );  ?>
        <div class="hero-content">
            <h2><?php the_title() ?></h2>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content('Read the rest of this entry »'); ?>
                <?php endwhile; ?>

                <?php else : ?>
                    //Something that happens when a post isn’t found.
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>