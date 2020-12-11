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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<!-- <link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/icomoon.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet"> -->
		

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
		
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
<?php if( is_page( $page = 'Jag Study' )) { ?>
<style>
    .navbar{
		position: relative;
	}
</style>
<?php } ?>


<!-- Standard Bootstrap Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark">
    <a href="<?php echo esc_url( home_url('/')); ?>" class="navbar-brand">VS</a>
	<button class="navbar-toggler  collapsed" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
    </button>
    <?php
        wp_nav_menu([
            'menu'            => 'primary',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav ml-auto',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
    ?>
</nav>
