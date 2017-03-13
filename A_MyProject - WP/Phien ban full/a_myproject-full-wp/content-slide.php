
<?php 
	$noidung1 = get_field('noi_dung_slide_1');
	$tacgia1 = get_field('tac_gia_slide_1');
	$noidung2 = get_field('noi_dung_slide_2');
	$tacgia2 = get_field('tac_gia_slide_2');
	$noidung3 = get_field('noi_dung_slide_3');
	$tacgia3 = get_field('tac_gia_slide_3');
	$noidung4 = get_field('noi_dung_slide_4');
	$tacgia4 = get_field('tac_gia_slide_4');

 ?>
	<div class="slidexacnhan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- beginslide -->
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner text-center" role="listbox">
		    <div class="item active">
		    	<p><?php echo $noidung1; ?></p>
		    	<h4><?php echo $tacgia1; ?></h4>
		    </div>

		    <div class="item">
		    	<p><?php echo $noidung2; ?></p>
		    	<h4><?php echo $tacgia2; ?></h4>
		    </div>

		    <div class="item">
		    	<p><?php echo $noidung3; ?></p>
		    	<h4><?php echo $tacgia3; ?></h4>
		    </div>

		    <div class="item">
		    	<p><?php echo $noidung4; ?></p>
		    	<h4><?php echo $tacgia4; ?></h4>
		    </div>
		  </div>

		</div>
					<!-- endslide -->
				</div>
			</div>
		</div>
	</div>  <!-- end slidexacnhan -->