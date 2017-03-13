<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A_MyProject_-_WP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- <meta charset="utf-8"> -->
	<link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/images/icon.png" type="image/x-icon">


	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/font-awesome.min.css">
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/mystyle.css">
 	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  data-spy="scroll" data-target=".navbar" data-offset="100">
<div id="page" class="site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'a_myproject-wp' ); ?></a> -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">VANTAI</a>
			</div>

			<!-- Menu cu-->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active n1"><a href="#gioithieu">Trang chủ</a></li>
					<li><a class="n2" href="#gioithieu1">Giới thiệu</a></li>
					<li><a class="n3" href="#giaohang">Vận Chuyển</a></li>
					<li><a class="n5" href="#tintuc">Tin Tức</a></li>
					<li><a class="n4" href="#lienhe">Liên Hệ</a></li>
					<li><div class="btn btn-default chohang"><i class="fa fa-truck"></i>Chở hàng</div></li>
				</ul>
			</div>

			<!-- end menu cu-->



		</div>
	</nav>  <!-- end menu tren-->

	<?php
		 $tenanh = get_field('image-page-home');
	 ?>

	<div class="gioithieu" id="gioithieu" style="background-image: url(<?php echo $tenanh['url']; ?>)">

		<?php 
			$dong1 = get_field('text-row-1-center-big');
			$dong2 = get_field('text-row-2-center-small');

			$nut1 = get_field('button-1');
			$link1 = get_field('link-button-1');

			$nut2 = get_field('button-2');
			$link2 = get_field('link-button-2');

		 ?>

		<div class="container text-center">
			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<div class="contain-chu wow bounceInUp"  data-wow-duration="2s">
						<h2 class="tieude">
							<?php echo $dong1; ?>
						</h2>
						<p>
							<?php echo $dong2; ?>
						</p>
					</div>

					<div class="_2nut wow rotateIn"  data-wow-delay="1.8s">
						<?php if(!empty($nut1)) { ?>
							<a data-toggle="tab" href="<?php echo $link1; ?>"><div class="btn btn-default n3 truckrun"><i class="fa fa-truck andau"></i><?php echo $nut1; ?></div></a>
						<?php } ?>

						<?php if(!empty($nut2)) { ?>
						<a data-toggle="tab" href="<?php echo $link2; ?>"><div class="btn btn-default taixe"><i class="fa fa-pencil-square-o"></i><?php echo $nut2; ?></div></a>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</div>  <!-- end gioithieu -->

	<div id="content" class="site-content">
