<!-- start banner Area -->
<section class="banner-area2">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-12 banner-content">
                    <h2 class="text-white mb-50">Your Profile</h2>
                    <?php $id = $this->uri->segment(3); ?>
                    <form action="<?php echo base_url('/profile/edit/');?><?php echo $id;?>" method="post">
                        <div class="row mt-20">
                            <div class="col-md-7">
                                <div class="row">
                                    <?php foreach ($edit as $data){ ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" value="<?php echo $data['nama'];?>" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="<?php echo $data['email'];?>" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" value="<?php echo $data['phone'];?>"" required data-error="Please enter your phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="<?php echo $data['password'];?>" required data-error="Please enter your password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="repassword" placeholder="Re-Password" required data-error="Please enter your password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="primary-btn text-uppercase" value="Save Data">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End banner Area -->
