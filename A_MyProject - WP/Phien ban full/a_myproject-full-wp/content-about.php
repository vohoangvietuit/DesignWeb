	<?php
		$tieude_about = get_field("title_name");
		$noidung_about = get_field("content_about");
	 ?>
	<div class="gioithieu1" id="gioithieu1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<div class="containt-tieude text-center wow bounceInUp" data-wow-duration="2s">
						<h2 class="tieude"><?php echo $tieude_about; ?></h2>
						<p><?php echo $noidung_about; ?></p>
<!-- 						<p>Vì thế, chúng tôi đã lập ra dịch vụ liên kết giữa các tài xế với nhau. Giúp cho việc chở hàng được nhanh chóng, tiện lợi và rẻ hơn.</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- end gioithieu1 -->