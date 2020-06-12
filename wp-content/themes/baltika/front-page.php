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
    <section class="brands">
        <?php if( have_rows('brands') ): ?>
            <?php $counter = 1; ?>
            <?php while ( have_rows('brands') ) : the_row(); ?>
                    <?php $block = get_sub_field('brand_block'); ?>
                    <?php if( $counter%2 !=0 ): ?>
                        <article data-sal="slide-up" data-sal-duration="1500">
                            <div class="brand-description">
                                <h2><?php echo $block['headline'] ?></h2>
                                <p><?php echo $block['description']; ?></p>
                            </div>
                            <div class="brand-preview">
                                <img src="<?php echo $block['image']; ?>" alt="">
                            </div>
                        </article>
                    <?php else: ?>
                        <article data-sal="slide-up" data-sal-duration="1500">
                            <div class="brand-preview">
                                <img src="<?php echo $block['image']; ?>" alt="">
                            </div>
                            <div class="brand-description">
                                <h2><?php echo $block['headline'] ?></h2>
                                <p><?php echo $block['description']; ?></p>
                            </div>
                        </article>
                    <?php endif; ?>
                <?php $counter++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>
<div class="section section--cards">
    <div class="card-wrap" data-sal="slide-right" data-sal-duration="1500">
        <div class="card">
            <div class="card-inner">
                <h2>Strategy</h2>
                <p>Baltika Group, headquartered in Tallinn and founded in 1928, is the leading fashion brand house in the Baltics. We own, operate the Baltic region. Read more.</p>
            </div>
            <img src="http://localhost/baltika/wp-content/uploads/2020/06/strategy.jpg" class="card-bg" alt="">
        </div>
    </div>
    <div class="card-wrap" data-sal="slide-left" data-sal-duration="1500">
        <div class="card">
            <div class="card-inner">
                <h2>Values</h2>
                <p>Baltika Group, headquartered in Tallinn and founded in 1928, is the leading fashion brand house in the Baltics. We own, operate the Baltic region. Read more.</p>
            </div>
            <img src="http://localhost/baltika/wp-content/uploads/2020/06/values.jpg" class="card-bg" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>