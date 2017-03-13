<?php
/*
	Template Name: Trang mẫu dành cho post lên
 */
 ?>

<!DOCTYPE html>
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
<body>
	<nav class="navbar navbar-default navbar-fixed-top news-page" role="navigation">
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

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="n1">Back to Trang chủ</a></li>
					<li class="active"><a class="n5" href="#">Tin Tức</a></li>
					<li><a class="n4" href="#">Liên Hệ</a></li>
<!-- 					<li><div class="btn btn-default chohang"><i class="fa fa-truck"></i>Chở hàng</div></li> -->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>  <!-- end menu -->

	<div class="all-tintuc">
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 baiviet">

					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>

						</main><!-- #main -->
					</div><!-- #primary -->

				</div>  <!-- end left -->
				<!-- sidebar -->
					<?php 
						get_template_part('content', 'sidebarnews');
					 ?>
				<!-- end sidebar -->
			</div>
		</div>
	</div>  <!-- end all tintuc -->





<?php 
	get_template_part('content', 'contact');
 ?>

<?php
get_footer();
