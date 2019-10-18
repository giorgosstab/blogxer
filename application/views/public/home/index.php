<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Add your site or application content here -->

<!-- Blog Area Start Here -->
<section class="blog-wrap-layout15 container-xl">
	<div class="container">
		<div class="row gutters-6">
			<?php foreach($data['posts_ontop'] as $post) : ?>
				<?php if($post === reset($data['posts_ontop'])) { ?>
					<div class="col-xl-6 col-lg-12">
						<div class="blog-box-layout13">
							<div class="item-img">
								<img src="<?php echo path().$post['image'] ?>" alt="blog">
								<div class="item-content">
									<ul class="entry-meta meta-color-light">
										<li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]['title'])) { echo $post['tags'][0]['title']; } else { echo '#untagged';} ?></li>
										<li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
										<li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
									</ul>
									<h2 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo character_limiter($post['title'],65); ?></a></h2>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endforeach; ?>
			<div class="col-xl-3 col-lg-6">
				<?php foreach($data['posts_ontop'] as $post) : ?>
					<?php if($post !== reset($data['posts_ontop']) && $post !== end($data['posts_ontop'])) { ?>
						<div class="blog-box-layout13">
                            <div class="item-img">
                                <img src="<?php echo path().$post['image'] ?>" alt="blog">
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-light">
                                        <li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]['title'])) { echo $post['tags'][0]['title']; } else { echo '#untagged';} ?></li>
                                        <li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
                                    </ul>
                                    <h3 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo word_limiter($post['title'],7); ?></a></h3>
                                </div>
                            </div>
                        </div>
					<?php } ?>
				<?php endforeach; ?>
			</div>
			<?php foreach($data['posts_ontop'] as $post) : ?>
				<?php if($post === end($data['posts_ontop'])) { ?>
					<div class="col-xl-3 col-lg-6">
						<div class="blog-box-layout13">
							<div class="item-img">
								<img src="<?php echo path() ?>img/blog/blog113.jpg" alt="blog">
								<div class="item-content">
									<ul class="entry-meta meta-color-light">
										<li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]['title'])) { echo $post['tags'][0]['title']; } else { echo '#untagged';} ?></li>
										<li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
									</ul>
									<h3 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo word_limiter($post['title'],7); ?></a></h3>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- Blog Area End Here -->
<!-- Blog Area Start Here -->
<section class="blog-wrap-layout16 container-xl">
	<div class="container">
		<div class="row gutters-50">
			<div class="col-xl-9 col-lg-8">
				<div class="row gutters-40">
					<?php foreach($data['posts_hot'] as $post) : ?>
						<div class="col-md-4 col-12">
							<div class="blog-box-layout2">
								<div class="item-img">
									<a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><img src="<?php echo path().$post['image'] ?>" alt="blog"></a>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]['title'])) { echo $post['tags'][0]['title']; } else { echo '#untagged';} ?></li>
										<li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
									</ul>
									<h3 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo word_limiter($post['title'],10); ?></a></h3>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="blog-wrap-layout17">
					<div class="row gutters-40">
						<div class="col-xl-7 col-lg-12">
							<div class="blog-box-layout1 text-left">
								<div class="item-img">
									<a href="single-blog.html"><img src="<?php echo path() ?>img/blog/blog118.jpg" alt="blog"></a>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i>Fashion</li>
										<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
										<li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
									</ul>
									<h2 class="item-title-lg"> <a href="single-blog.html">5 design things to
											look out for in June 2019</a></h2>
									<p>Aimply dummy text of the printing and typesetting industry. Lorem Ipsum
										has been the industry's standard
										dummy text ever since.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-12">
							<div class="blog-box-layout14">
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i>Health</li>
										<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
									</ul>
									<h3 class="item-title"><a href="single-blog.html">Medical design thing look
											are out for June 2019</a></h3>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i>Health</li>
										<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
									</ul>
									<h3 class="item-title"><a href="single-blog.html">Medical design thing look
											are out for June 2019</a></h3>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i>Health</li>
										<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
									</ul>
									<h3 class="item-title"><a href="single-blog.html">Medical design thing look
											are out for June 2019</a></h3>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i>Health</li>
										<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
									</ul>
									<h3 class="item-title"><a href="single-blog.html">Medical design thing look
											are out for June 2019</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row gutters-40">
					<?php foreach($data['posts'] as $post) : ?>
						<div class="col-md-6 col-12">
							<div class="blog-box-layout3">
								<div class="item-img">
									<a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><img src="<?php echo path().$post['image'] ?>" alt="blog"></a>
								</div>
								<div class="item-content">
									<ul class="entry-meta meta-color-dark">
										<li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]['title'])) { echo $post['tags'][0]['title']; } else { echo '#untagged';} ?></li>
										<li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
										<li><i class="far fa-clock"></i>5 Mins Read</li>
										<li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
									</ul>
									<h3 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo character_limiter($post['title'],40); ?></a></h3>
									<p><?php echo character_limiter($post['excerpt'],200); ?></p>
									<div class="action-area">
										<a href="<?php echo site_url('/blog/'.$post['slug']); ?>" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
										<ul class="response-area">
											<li><a href="#"><i class="far fa-heart"></i>12</a></li>
											<li><a href="#"><i class="far fa-comment"></i>02</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 sidebar-widget-area sidebar-break-md">
				<div class="widget">
					<div class="section-heading heading-dark">
						<h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
					</div>
					<div class="widget-follow-us">
						<ul>
							<li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-github-alt"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-kickstarter-k"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-behance"></i></a></li>
							<li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="widget">
					<div class="widget-about-2">
						<figure class="author-figure"><img src="<?php echo path() ?>img/figure/figure7.jpg" alt="about"></figure>
						<figure class="author-signature"><img src="<?php echo path() ?>img/figure/signature.png" alt="about"></figure>
						<p>Fusce mauris auctor iner hendrerit risus ollicituderty aeenean rauctor doloer.</p>
					</div>
				</div>
				<div class="widget">
					<div class="widget-newsletter-subscribe-dark">
						<h3>GET LATEST UPDATES</h3>
						<p>NEWSLETTER SUBSCRIBE</p>
						<form class="newsletter-subscribe-form">
							<div class="form-group">
								<input type="text" placeholder="your e-mail address" class="form-control" name="email"
									data-error="E-mail field is required" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-none">
								<button type="submit" class="item-btn">SUBSCRIBE</button>
							</div>
						</form>
					</div>
				</div>
				<div class="widget">
					<div class="section-heading heading-dark">
						<h3 class="item-heading">POPULAR POSTS</h3>
					</div>
					<div class="widget-popular">
						<div class="post-box">
							<div class="item-img">
								<a href="single-blog.html"><img src="<?php echo path() ?>img/blog/blog117.jpg" alt="blog"></a>
							</div>
							<div class="item-content">
								<ul class="entry-meta meta-color-dark">
									<li><i class="fas fa-tag"></i>It</li>
									<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
								</ul>
								<h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
										with aert aos Angeles</a></h3>
							</div>
						</div>
						<div class="post-box">
							<div class="item-content">
								<ul class="entry-meta meta-color-dark">
									<li><i class="fas fa-tag"></i>It</li>
									<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
								</ul>
								<h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
										with aert aos Angeles</a></h3>
							</div>
						</div>
						<div class="post-box">
							<div class="item-content">
								<ul class="entry-meta meta-color-dark">
									<li><i class="fas fa-tag"></i>It</li>
									<li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
								</ul>
								<h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
										with aert aos Angeles</a></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="widget">
					<div class="widget-ad">
						<a href="#"><img src="<?php echo path() ?>img/figure/figure8.jpg" alt="Ad" class="img-fluid"></a>
					</div>
				</div>
				<div class="widget">
					<div class="section-heading heading-dark">
						<h3 class="item-heading">CATEGORIES</h3>
					</div>
					<div class="widget-categories">
						<ul>
                            <?php foreach($data['categories'] as $category) : ?>
                                <li>
                                    <a href="#"><?php echo $category['title']; ?>
                                        <span>(35)</span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
					</div>
				</div>
				<div class="widget">
					<div class="section-heading heading-dark">
						<h3 class="item-heading">INSTAGRAM</h3>
					</div>
					<div class="widget-instagram">
						<ul>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure56.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure62.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure57.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure58.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure59.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure60.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure61.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure62.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
							<li>
								<div class="item-box">
									<img src="<?php echo path() ?>img/social-figure/social-figure63.jpg" alt="Social Figure" class="img-fluid">
									<a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Area End Here -->
