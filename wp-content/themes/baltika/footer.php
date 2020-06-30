<section class="section section--footer">
    <div class="brands-line">
        <ul>
            <?php if( have_rows('brands', 'option') ): ?>
                <?php $counter = 1; ?>
                <?php while( have_rows('brands', 'option') ): the_row(); ?>
                    <li data-sal="slide-up" data-sal-duration="1200" data-sal-delay="<?php echo (1500*$counter); ?>"> 
                        <img src="<?php echo get_sub_field('brand_image'); ?>" alt="">
                    </li>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="footer-info" style="background-image:url(<?php echo get_field('background_image', 'option'); ?>); background-attachment: fixed; background-position: center bottom;">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-links">
                        <h2><?php echo get_field('footer_info_heading', 'option'); ?></h2>
                        <ul>
                            <?php if( have_rows('footer_links', 'option') ): ?>
                                <?php while( have_rows('footer_links', 'option') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link')['url']; ?>"><?php echo get_sub_field('link')['title']; ?></a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-contact">
                        <h2><?php echo get_field('contact_title', 'option'); ?></h2>
                        <div>
                            <p>
                                <?php echo get_field('contact_info', 'option'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>