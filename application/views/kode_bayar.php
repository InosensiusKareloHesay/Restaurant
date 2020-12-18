<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<p class="text-white link-nav">
                    <a href="<?php echo base_url('/awal/');?>">Home </a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<style>
	.kode-content{
		background-color: lightgrey;
		width:300px;
		padding:25px;
		margin:100px;
		}
	</style>
	<section class="menu-area section-gap" id="menu">
        <div class="container">
             
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1>Rincian Transaksi</h1>
                    </div>
                </div>
            </div>
            <div class="filters-content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 all breakfast">
                        <div class="single-menu">
                            <div class="ml-50">
                            <div class="title-wrap d-flex text-center">
                                <h3>Transaksi kamu dicatat dengan<br/></h3>
                            </div>
                            <div class="title-wrap d-flex text-center">
                                <h1>Nomor Transaksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper(random_string('alnum',5));?> - <?php echo strtoupper(random_string('alnum',5));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                            </div>
                             <div class="title-wrap d-flex text-center">
                                <h3>Dengan Total Harga : Rp. <?php echo ($harga['total_harga'] + $hargaminuman['total_minuman']);?><br/></h3>
                            </div>
                            <br><br>
                              <div class="title-wrap d-flex text-center">
                                <a href="<?php echo base_url();?>"><button type="button" class="btn text-center"><b>Back</button></div> </a>
                            </div>                    
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
            </form>
           
        
        </div>
    </section>
	<!-- Start contact-page Area -->
	<!--<section class="contact-page-area section-gap">
		<div class="container">
			<div class="justify-content-center kode-content title text-center">
				<div class="form-container display-flex margin-top-30px">
                
                <div class="form-content-container">
                    <div class="display-block text-center">
                        <span class="text-medium display-block margin-top-5px"><h3>Transaksi kamu dicatat dengan </h3><br/>
                            <h1>Nomor Transaksi TR0000242197</h1>
                        </span>

                        <div class="payment-number-container">
                            <span class="text-medium">Nomor Transaksi</span>
                            <span class="display-block text-bold text-orange payment-number">TR00002421978</span>
                            <span class="text-medium display-block margin-top-10px  ">
                                Jumlah yang harus dibayar
                            </span>
                            <span class="display-block text-bold text-vv-big">Lunas</span>
                        
                        </div>
                    </div>
                </div>
                

                <div class="position-relative transaction-container">
                    <div id="transaction_container" class="">
                        <div class="transaction-content-container background-white display-block">
                            <div class="transaction-title">
                                <p class="text-very-big text-darkblue text-bold">Total Transaksi</p>
                            </div>
                            <div class="detail-transaction-container">
                                <div class="display-flex detail-transaction-content-container">
                                    <span class="text-grey display-block text-small text-left product-title-container text-ellipsis">Total Belanja</span>
                                    <span class="text-grey display-block text-small text-right js-shoppingcart-price-total">Rp 327.000</span>
                                </div>



                                <div class="display-flex detail-transaction-content-container">
                                    <span class="text-grey display-block text-small text-left product-title-container text-ellipsis">Dompetku</span>
                                    <span class="text-grey display-block text-small text-right js-shoppingcart-price-total">- Rp 327.000</span>
                                </div>

                                <div class="divider-lightgrey"></div>

                                <div class="display-flex detail-transaction-content-container">
                                    <span class="text-darkgrey display-block text-small text-bold text-left product-title-container text-ellipsis">Total yang harus dibayar</span>
                                    <span class="text-red display-block text-big text-right text-bold js-shoppingcart-price-total">Rp 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
		</div>
	</section>-->
	<!-- End contact-page Area -->