<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180"    href="<?php echo get_template_directory_uri().'/assets/images/favicons/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/images/favicons/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/images/favicons/favicon-16x16.png'; ?>">
    <?php wp_head(); ?>
</head>
<body>
<script>
    var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
    var body = document.querySelectorAll('body')[0];
    if(isIE11) {
        body.classList.add('IE11');
    }
</script>
<?php if( is_front_page() ): ?>
    <?php get_template_part( 'loader' );  ?>
<?php endif; ?>