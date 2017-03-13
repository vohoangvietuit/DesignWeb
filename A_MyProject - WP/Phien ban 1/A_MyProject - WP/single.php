<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang single</title>
</head>
<body>


		<?php
		while(have_posts()){
			the_post();

	 ?>
		<h2>Bai Viet chi tiet</h2>
	 	<h3><?php the_title(); ?></h3>
	 	<small> By <?php the_author(); ?> |  <?php the_category(','); ?></small>
	 	<p><?php the_content(); ?></p>
	 <?php } ?>
</body>
</html>