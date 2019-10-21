<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Add your site or application content here -->

<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Category Blogs</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here --> 

<!-- Blog Area Start Here -->
<section class="blog-wrap-layout22">
    <div class="container">
        <div class="row gutters-50">
            <div class="col-xl-8 col-lg-8">
                <?php foreach($data['posts'] as $post) : ?>
                    <div class="blog-box-layout4">
                        <div class="item-img">
                            <a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><img src="<?php echo path().$post['image'] ?>" alt="blog"></a>
                        </div>
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li><i class="fas fa-tag"></i><?php if(!empty($post['tags'][0]->title)) { echo $post['tags'][0]->title; } else { echo '#untagged';} ?></li>
                                <li><i class="fas fa-calendar-alt"></i><?php echo $post['created_at']; ?></li>
                                <li><i class="far fa-clock"></i>5 Mins Read</li>
                            </ul>
                            <h3 class="item-title"><a href="<?php echo site_url('/blog/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h3>
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
                <?php endforeach; ?>
                <!-- <div class="pagination-layout1">
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div> -->
                
                <div class="pagination-layout1">
                    <ul>
                        <?php echo $this->post_model->all_pages; ?>
                    </ul>
                </div>
                
            </div>
            <div class="col-xl-4 col-lg-4 sidebar-widget-area sidebar-break-md">
                <div class="widget">
                    <div class="section-heading heading-dark">
                        <h3 class="item-heading">POPULAR POSTS</h3>
                    </div>
                    <div class="widget-latest">
                        <ul class="block-list">
                            <li class="single-item">
                                <div class="item-img">
                                    <a href="#"><img src="<?php echo path() ?>img/blog/blog85.jpg" alt="Post"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Weeding</li>
                                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                    </ul>
                                    <h4 class="item-title"><a href="#">Thought aful Living result are aert aos
                                            Angeles</a></h4>
                                </div>
                            </li>
                            <li class="single-item">
                                <div class="item-img">
                                    <a href="#"><img src="<?php echo path() ?>img/blog/blog86.jpg" alt="Post"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Flower</li>
                                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                    </ul>
                                    <h4 class="item-title"><a href="#">Type designer Jeremy Tanka rdoverhauls
                                            online</a></h4>
                                </div>
                            </li>
                            <li class="single-item">
                                <div class="item-img">
                                    <a href="#"><img src="<?php echo path() ?>img/blog/blog87.jpg" alt="Post"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Stage</li>
                                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                    </ul>
                                    <h4 class="item-title"><a href="#">5 design things to look out for in June
                                            2019</a></h4>
                                </div>
                            </li>
                            <li class="single-item">
                                <div class="item-img">
                                    <a href="#"><img src="<?php echo path() ?>img/blog/blog88.jpg" alt="Post"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Life Style</li>
                                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                    </ul>
                                    <h4 class="item-title"><a href="#">Marc Falzone opens £2 million UK Expo
                                            Pavilion</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget">
                    <div class="section-heading heading-dark">
                        <h3 class="item-heading">FOLLOW ME ON</h3>
                    </div>
                    <div class="widget-follow-us-2">
                        <ul>
                            <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i>LIKE ME ON</a></li>
                            <li class="single-item"><a href="#"><i class="fab fa-twitter"></i>FOLLOWE ME</a></li>
                            <li class="single-item"><a href="#"><i class="fab fa-instagram"></i>FOLLOW ME</a></li>
                            <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i>FOLLOW ME</a></li>
                            <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i>FOLLOW ME</a></li>
                            <li class="single-item"><a href="#"><i class="fab fa-youtube"></i>SUBSCRIBE</a></li>
                        </ul>
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
                    <div class="widget-ad">
                        <a href="#"><img src="<?php echo path() ?>img/figure/figure5.jpg" alt="Ad" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End Here -->