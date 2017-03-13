<?php 
	$tieudenews = get_field('title_news');
 ?>
	<div class="tintuc" id="tintuc">
		<div class="container">
			<div class="row">
					<div class="containt-tieude text-center">
						<a href="https://vantaihcm.000webhostapp.com/page-news/" target="_black"><h2 class="tieude"><?php echo $tieudenews; ?></h2></a>
					</div>

					<?php 
						$thongtintintuc = new WP_Query(array('post_type' =>'thong_tin_tin_tuc'));

						while($thongtintintuc->have_posts()){
							$thongtintintuc->the_post();

							$tieudelinktintuc = get_field('tieu_de_nut_link');
							$linktintuc = get_field('link_tin_tuc');
					 ?>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="mautintuc">
							<a href="<?php the_permalink(); ?>" target="_black">
								<div class="khung">
									<?php the_post_thumbnail(); ?>  <!-- in anh -->
								</div>
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>" target="_black"><div class="btn btn-default"><?php echo $tieudelinktintuc; ?></div></a>
						</div>  <!-- end mautin -->
					</div>  <!-- end col -->

					<?php } wp_reset_query() ?>

			</div>
		</div>
	</div>  <!-- end tintuc -->