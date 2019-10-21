<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Header Area Start Here -->
<header class="has-mobile-menu">
	<div id="rt-sticky-placeholder"></div>
	<div id="header-menu" class="header-menu menu-layout1 bg--dark pr--30 pl--30 container-xl">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-2 d-flex justify-content-start">
					<div class="logo-area">
						<a href="<?php echo site_url('/') ?>" class="temp-logo" id="temp-logo">
							<img src="<?php echo path() ?>img/logo-light.png" alt="logo" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-lg-6 d-flex justify-content-start">
					<nav id="dropdown" class="template-main-menu">
						<ul>
							<li class=""><a href="<?php echo site_url('/') ?>">HOME</a></li>
							<li><a href="<?php echo site_url('/about') ?>">ABOUT</a></li>
							<li><a href="<?php echo site_url('/blog') ?>">BLOG</a></li>
							<li><a href="contact.html">CONTACT</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 d-flex justify-content-end">
					<div class="header-action-items">
						<ul class="divider-style-border">
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-youtube"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fas fa-rss"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li class="item-social-layout2"> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
						<ul>
							<li class="header-search-box">
								<a href="#header-search" title="Search">
									<i class="flaticon-magnifying-glass"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header Area End Here -->