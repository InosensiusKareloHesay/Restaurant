<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('assets\img\fav.png');?>">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>POOD - Portal Food</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
</head>


<body>
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row justify-content-center">
					<div id="logo">
                    <a href="<?php echo base_url('/awal/');?>">
                        <img src="<?php echo base_url('assets\img\logo.png');?>" alt="" title="" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="ml-50 row container main-menu">
			<div class="align-items-center d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li>
                        <a href="<?php echo base_url('/awal/');?>">
								<p class="fz-15">Home</p>
							</a>
						</li>
						<li>
                        <a href="<?php echo base_url('/restaurant/');?>">
								<p class="fz-15">Restaurant</p>
							</a>
						</li>
						<li>
                        <a href="<?php echo base_url('/contact/');?>">
								<p class="fz-15">Contact</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
			<div class="ml-530 align-items-center d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li>
							<?php if($this->session->userdata('login') == false) {
									//echo '<a href="'.base_url('/cart').'">
									//		<img src="'.base_url('assets/img/resto/iconfix.png').'" class="mr-20" />
									//	  </a>';
                                  	echo anchor('/login', 'Login', array('title' => 'Login'));
									}
                                  else {
                                  	$username = $this->session->userdata('name');
                                  	$id = $this->session->userdata('id');
                                  	$path = base_url('assets/img/cart.png');
                                  	echo '<label class="text-white">Welcome <a href="'.base_url('/profile/edit_profile/'),$id.'">'.$username.'</a></label>';
                                  	echo '<a href="'.base_url('/cart').'">
											<img src="'.base_url('assets/img/resto/iconfix.png').'" class="mr-20" />
										  </a>';
                                    echo anchor('/login/do_logout','Logout',array('title' => 'Logout'));
                               	}
                             ?>
						</li>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- start banner Area -->
