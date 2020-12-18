
	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Restaurant
					</h1>
					<p class="text-white link-nav">
					<a href="<?php echo base_url('/awal/');?>">Home </a>
						<span class="lnr lnr-arrow-right"></span>
						<a href="<?php echo base_url('/restaurant/');?>"> Restaurant</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start menu-area Area -->
	<section class="menu-area section-gap" id="menu">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Choose your favorite place</h1>
						<p>
							<i class="fa fa-heart-o" aria-hidden="true"></i> Laughter is brightest in the place where the food is.</p>
					</div>
				</div>
			</div>
			<?php foreach ($get as $data) {?>
			<div class="filters-content">
				<div class="row grid">
					<div class="col-md-6 all breakfast">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-center">
								<a href="pilihan1.html">
									<img src="img/makan/1.jpg" alt="">
								</a>
							</div>
							<div class="title-wrap d-flex justify-content-center">
								<h4>
									
									<a href="<?php echo base_url('/makanminum/getMakanMinum/');?><?php echo $data['resto_id']; ?>"><?php echo $data['nama_resto']; ?></a>
											 <!--<?php// echo base_url('cnt_tiket/update/');?><?php// echo $sh['id_tiket'];?>-->
								</h4>
							</div>
								<p>Location : </br>
									<?php echo $data['alamat']; ?>
								</p>
								<p></br>Time : </br>
									<?php echo $data['waktu_buka']; ?>
								</p>
								<p>No telp : </br>
									<?php echo $data['telp_resto']; ?>
								</p>
						</div>
					</div>			
				</div>
			</div>
		<?php } ?>
		</div>
	</section>
	<!-- End menu-area Area -->