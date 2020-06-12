<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php if( is_front_page() ): ?>
<!-- <div id="loader">
    <div class="logo-loader">
        <img src="<?php echo get_template_directory_uri().'/assets/images/baltika.svg' ?>" width="200" alt=""><br>
        <small>Loading<span>.</span><span>.</span><span>.</span></small>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div> -->
<?php endif; ?>