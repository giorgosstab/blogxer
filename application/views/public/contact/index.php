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
                    <h1>Contact Us</h1>
                    <ul>
                        <li>
                            <a href="<?php echo site_url() ?>">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here --> 
<!-- Contact Area Start Here --> 
<section class="contact-wrap-layout1">
    <div class="container">
        <div class="row gutters-50">
            <div class="col-lg-8">
                <div class="contact-box-layout1">
                    <div class="google-map-area">
                        <div id="googleMap" style="width:100%; height:450px; border-radius: 4px;"></div>
                    </div>
                    <div class="contact-way">
                        <div class="contact-list">
                            <h3 class="item-title">Office Address</h3>
                            <p>Worem Ipsum Nam nec tellus a odio tincidunt auctor.
                            Proin gravida nibh vel velit auctor aliquet. Bendum auctor, 
                            nisi elit conseq aeuat ipsum, nec sagittis sem nibhety.</p>
                        </div>
                        <div class="contact-list">
                            <h3 class="item-title">Phone</h3>
                            <p>+123 88 9999 00, +123 88 9999 00, +123 88 9999 00</p>
                        </div>
                        <div class="contact-list">
                            <h3 class="item-title">Mail Us</h3>
                            <p>info@gmail.com, info@gmail.com, info@gmail.com,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
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
                        <h3 class="item-heading">FOLLOW ME ON</h3>
                    </div>
                    <div class="widget-follow-us-2">
                        <ul>
                            <?php foreach($data['social_media'] as $social) : ?>
                                <?php if($social['title'] === 'fab fa-facebook-f'){ ?>
                                    <li class="single-item"><a href="<?php echo $social['url'] ?>" target="_blank"><i class="<?php echo $social['title'] ?>"></i>LIKE ME ON</a></li>
                                <?php } else if($social['title'] === 'fab fa-youtube') { ?>
                                    <li class="single-item"><a href="<?php echo $social['url'] ?>" target="_blank"><i class="<?php echo $social['title'] ?>"></i>SUBSCRIBE</a></li>
                                <?php } else { ?>
                                    <li class="single-item"><a href="<?php echo $social['url'] ?>" target="_blank"><i class="<?php echo $social['title'] ?>"></i>FOLLOWE ME</a></li>
                                <?php } ?>
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
<!-- Contact Area End Here --> 