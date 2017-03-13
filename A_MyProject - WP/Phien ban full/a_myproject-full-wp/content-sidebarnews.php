				







				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 sitebar">

					<div class="h3">Tin Tức Mới</div>

					<div class="row">

									<?php

						$thongtintintuc = new WP_Query(array('post_type' =>'thong_tin_tin_tuc'));



						while($thongtintintuc->have_posts()){

							$thongtintintuc->the_post();



							$tieudelinktintuc = get_field('tieu_de_nut_link');

							$linktintuc = get_field('link_tin_tuc');

					 ?>

						<div class="tintic-sidebar">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 anh">

								<?php the_post_thumbnail(); ?>

							</div>  <!-- anh -->



							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

								<p><i class="fa fa-clock-o"></i><?php echo get_the_date( get_option('date_format') ); ?></p>

							</div>

						</div>  <!-- end 1 tin -->

						<?php } wp_reset_query() ?>



					</div>

				</div>