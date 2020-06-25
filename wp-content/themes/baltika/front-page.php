<?php get_header(); ?>
<div class="section section--hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <?php get_template_part( 'navigation' );  ?>
        <div class="hero-content">
            <h2>HISTORY</h2>
            <button class="light" id="discover">DISCOVER MORE</button>
        </div>
    </div>
</div>
<div class="section section--brands" id="brands-view">
    <header>
        <ul>
            <li>Brands</li>
            <li>Values</li>
            <li>Strategy</li>
        </ul>
    </header>
    <section class="brands" data-sal="slide-up" data-sal-duration="1000">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if( have_rows('brands') ): ?>
                    <?php $counter = 1; ?>
                    <?php while ( have_rows('brands') ) : the_row(); ?>
                            <?php $block = get_sub_field('brand_block'); ?>
                            <?php if( $counter%2 !=0 ): ?>
                                <article class="swiper-slide">
                                    <div class="brand-description">
                                        <h2><?php echo $block['headline'] ?></h2>
                                        <p><?php echo $block['description']; ?></p>
                                    </div>
                                    <div class="brand-preview">
                                        <div class="next-mobile swipe-next">
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/next-mobile.svg'; ?>" alt="">
                                        </div>
                                        <div class="prev-mobile swipe-prev">
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/next-mobile.svg'; ?>" alt="">
                                        </div>
                                        <img src="<?php echo $block['image']; ?>" alt="">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/prev-slide-brown.svg'; ?>" width="50px" class="swiper-button-prev swipe-prev" alt="">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/next-slide.svg'; ?>" width="50px" class="swiper-button-next swipe-next" alt="">
                                </article>
                            <?php else: ?>
                                <article class="swiper-slide">
                                    <div class="brand-preview order-1">
                                        <div class="next-mobile swipe-next">
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/next-mobile.svg'; ?>" alt="">
                                        </div>
                                        <div class="prev-mobile swipe-prev">
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/next-mobile.svg'; ?>" alt="">
                                        </div>
                                        <img src="<?php echo $block['image']; ?>" alt="">
                                    </div>
                                    <div class="brand-description order-0">
                                        <h2><?php echo $block['headline'] ?></h2>
                                        <p><?php echo $block['description']; ?></p>
                                        
                                    </div>
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/prev-slide-brown.svg'; ?>" width="50px" class="swiper-button-prev swipe-prev" alt="">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/next-slide.svg'; ?>" width="50px" class="swiper-button-next swipe-next" alt="">
                                </article>
                            <?php endif; ?>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<div class="section section--cards">
    <div class="card-wrap" data-sal="slide-right" data-sal-duration="1500">
        <div class="card">
            <?php $strategy = get_field('strategy'); ?>
            <div class="card-inner">
                <h2><?php echo $strategy['headline']; ?></h2>
                <p><?php echo $strategy['description']; ?></p>
            </div>
            <img src="<?php echo $strategy['background']; ?>" class="card-bg" alt="">
        </div>
    </div>
    <div class="card-wrap" data-sal="slide-left" data-sal-duration="1500">
        <div class="card">
            <?php $values = get_field('values'); ?>
            <div class="card-inner">
                <h2><?php echo $values['headline']; ?></h2>
                <p><?php echo $values['description']; ?></p>
            </div>
            <img src="<?php echo $values['background']; ?>" class="card-bg" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>