    <!-- start banner Area -->
    <section class="banner-area12">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-8 banner-content">
                    <h2 class="text-white mb-50">Login</h2>
                    <form action="<?php echo base_url('/login/do_login') ?>" method="post">
                        <div class="row">
                          <div class="col-md-7">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="username" placeholder="ID USER" required data-error="Please enter your username">
                                  <div class="help-block with-errors"></div>
                                </div>                    
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">                      
                                  <input type="password" class="form-control" name="password" placeholder="Password" required data-error="Please enter your Password">
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <button type="submit" id="submit" class="primary-btn text-uppercase">Login</button>
                                <!--<button type="submit" id="submit" class="primary-btn text-uppercase">Login</button>-->
                                <br><br>
                                <p>Not having account ? <a href="<?php echo base_url('/register/');?>"> Click Here! </a></p>
                              </div>
                            </div>
                          </div>                     
                        </div> 
                      </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End banner Area -->