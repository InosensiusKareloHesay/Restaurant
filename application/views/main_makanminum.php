<!-- start banner Area -->
<section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?php echo $name['nama_resto']; ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start menu-area Area -->
    <section class="menu-area section-gap" id="menu">
        <div class="container">
             
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1>Choose your favorite food</h1>
                    </div>
                </div>
            </div>
            <?php 
            if(!empty($row)){
                foreach ($row as $get) {?>
            <form action="<?php echo base_url('/makanminum/buy_makanan/'); ?><?php echo $get['resto_id']; ?>" method="post">
            <div class="filters-content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 all breakfast">
                        <div class="single-menu">
                            <div class="ml-100">
                            <div class="title-wrap d-flex">
                                <h4>
                                    <?php echo $get['nama_makanan'];?>
                                    
                                </h4>
                                <input type="hidden" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id') ?>">
                                <input type="hidden" class="form-control" name="id_makanan" value="<?php echo $get['id_makanan'];?>">
                            </div>
                            <div class="title-wrap d-flex">
                                <h6>
                                    <?php echo $get['harga_makanan'];?>
                                </h6>
                                
                            </div>
                            
                                <input type="number" name="qty" placeholder="quantity">
                                <input type="submit" value="Buy">
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
            </form>
            <?php }
            } ?>
        
        </div>
    </section>
    <section class="menu-area section-gap" id="menu">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1>Choose your favorite drink</h1>
                    </div>
                </div>
            </div>
            <?php if(!empty($arr)){
                foreach ($arr as $get) {?>
        <form action="<?php echo base_url('/makanminum/buy_minuman/'); ?><?php echo $get['resto_id']; ?>" method="post">
           <div class="filters-content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 all breakfast">
                        <div class="single-menu">
                            <div class="ml-100">
                            <div class="title-wrap d-flex">
                                <h4>
                                    <?php echo $get['nama_minuman'];?>
                                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id') ?>">
                                    <input type="hidden" class="form-control" name="id_minuman" value="<?php echo $get['id_minuman'];?>">
                                </h4>
                            </div>
                            <div class="title-wrap d-flex">
                                <h6>
                                    <?php echo $get['harga_minuman'];?>
                                </h6>
                                
                            </div>
                            
                                <input type="number" name="qty" placeholder="quantity">
                                <input type="submit" value="Buy">
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
        </form>
                    <?php }
                } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- End menu-area Area -->