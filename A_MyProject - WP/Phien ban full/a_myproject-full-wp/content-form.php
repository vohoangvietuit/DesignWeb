	<div class="giaohang" id="giaohang">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-2 wow bounceInUp"  data-wow-duration="1s">
					<ul class="nav nav-tabs">
					  <li class="change active">
					  	<a data-toggle="tab" href="#chohangtab">
							<div class="containt-tieude bd-giaohang">
								<h2 class="tieude">Chở hàng</h2>
<!-- 								<p>Vui lòng nhập thông tin bên dưới <br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</p> -->
							</div>
					  	</a>
					  </li>  <!-- end li chohang -->
					  <li class="change1">
					  	<a data-toggle="tab" href="#menu1">
							<div class="containt-tieude">
								<h2 class="tieude">Tài xế</h2>
<!-- 								<p>Vui lòng nhập thông tin bên dưới <br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</p> -->
							</div>
					  	</a>
					  </li>  <!-- end li dk -->
					</ul>

					<div class="tab-content">
					  <div id="chohangtab" class="tab-pane fade in active">
						<?php echo do_shortcode( '[contact-form-7 id="5" title="Form vận chuyển"]' ); ?>
						
					  </div>  <!-- end form giao hang -->

					  <div id="menu1" class="tab-pane fade">
						<?php echo do_shortcode( '[contact-form-7 id="14" title="Form đăng ký tài xế"]' ); ?>
					  </div>  <!-- end form dk -->
				
					</div>
				</div>  <!-- end col md 8 -->
			</div>
		</div>
	</div>  <!-- end form giaohang & tai xe -->