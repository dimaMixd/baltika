<?php
/*
* Template Name: Baltika pages
*/
?>
<?php get_header(); ?>
<div class="section section--hero page" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <?php get_template_part( 'navigation' );  ?>
        <div class="hero-content">
            <h2><?php the_title() ?></h2>
        </div>
    </div>
</div>
<div class="banner">
    <div class="container">
        <h2>
            <?php echo get_field('banner'); ?>
        </h2>
    </div>
</div>
<div class="content-block">
    <div class="tabs">
        <div class="tab" id="jobs" data-tab="jobs-content">
            <div class="tab-inner">
                Job offers
            </div>
        </div>
        <div class="tab" id="internship" data-tab="internship-content">
            <div class="tab-inner">
                Internships
            </div>
        </div>
    </div>
    <div class="content-inner">
        <div class="video-block">
        <video controls poster="<?php echo get_field('video_poster'); ?>">
            <?php $video = get_field('video'); ?>
            <?php if( $video['video_mp4'] ): ?>
                <source src="<?php echo $video['video_mp4']; ?>" type="video/mp4">
            <?php endif; ?>
            <?php if( $video['video_webm'] ): ?>
                <source src="<?php echo $video['video_webm']; ?>" type="video/webm">
            <?php endif; ?>
            Your browser does not support the video tag.
        </video>
        </div>
        <div class="tabs-content">
            <div id="jobs-content" class="tab-inner-content">
                <span class="close-window">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/close.svg'; ?>" alt="">
                </span>
                <?php echo get_field('jobs'); ?>
            </div>
            <div id="internship-content" class="tab-inner-content">
                <span class="close-window">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/close-white.svg'; ?>" alt="">
                </span>
                <?php echo get_field('internship'); ?>
            </div>
        </div>
    </div>
</div>
<div class="why-baltika">
    <?php $why = get_field('why_block'); ?>
    <div class="img-wrapper" style="background-image:url(<?php echo $why['image']; ?>);background-size: cover;background-position: center;">
    </div>
    <div class="text-wrapper">
        <h2 class="light"><?php echo $why['headline']; ?></h2>
        <p>
            <?php echo $why['text']; ?>
        </p>
    </div>
</div>
<?php get_footer(); ?>