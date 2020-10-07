<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscoretheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <!--Required Meta Tags-->
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Dynalight&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
		
		<!-- core CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
		<!--<link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/icomoon.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">-->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
		<script> $(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled fixed-top', $(this).scrollTop() > $nav.height());
    });
});</script>
        <?php wp_head(); ?>		
		<!--CSS-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  
    <!-- Hotjar Tracking Code for verna.hatchetmarketing.com 
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1425654,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>-->


    <!-- Global site tag (gtag.js) - Google Analytics -->


    <!-- Call Tracking Metrics -->


</head>
<body>
<!-- Standard Bootstrap Navigation -->
<nav class="navbar navbar-expand-md navbar-dark navbar-inverse">
    <a href="<?php echo esc_url( home_url('/')); ?>" class="navbar-brand">VS</a>
	<button class="navbar-toggler ml-auto collapse" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        wp_nav_menu([
            'menu'            => 'primary',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
    ?>
</nav>
