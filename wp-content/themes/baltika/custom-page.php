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
            <video autoplay controls width="100%" poster="<?php //echo get_field('video_poster'); ?>">
                <?php $video = get_field('video_file'); ?>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque odio rerum quod ex? Dignissimos ullam sunt officiis explicabo quia nostrum obcaecati ducimus praesentium optio tenetur, maiores fuga dicta. Autem, veniam.
            </div>
            <div id="internship-content" class="tab-inner-content">
                <span class="close-window">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/close-white.svg'; ?>" alt="">
                </span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, pariatur cupiditate? Ad labore nisi voluptates! Culpa, alias sit, voluptatum excepturi animi exercitationem accusamus doloremque aliquid odit accusantium mollitia hic. Excepturi.
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>