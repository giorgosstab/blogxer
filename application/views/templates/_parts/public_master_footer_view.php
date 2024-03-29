        <!-- Footer Area Start Here -->
        <footer class="footer-wrap-layout1">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <div class="copyright">&copy; <?php echo copyrights_helper("2019"); ?> <a href="https://gtsaxrelias.tk">George Tsachrelias</a>. All Rights Reserved.</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <div class="footer-logo">
                                <a href="<?php echo site_url('/') ?>"><img src="<?php echo path() ?>img/logo-light.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-box-layout1">
                            <ul class="footer-social">
                                <?php foreach($social_media as $social) : ?>
                                    <li> <a href="<?php echo $social['url'] ?>"><i class="<?php echo $social['title'] ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
        <!-- Search Box Start Here -->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Type here........" />
                <button type="submit" class="search-btn">
                    <i class="flaticon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- Search Box End Here -->
    </div>
    <!-- jquery-->
    <script src="<?php echo path() ?>js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo path() ?>js/plugins.js"></script>
    <!-- Popper js -->
    <script src="<?php echo path() ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo path() ?>js/bootstrap.min.js"></script>
    <!-- Popup js -->
    <script src="<?php echo path() ?>js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel js -->
    <script src="<?php echo path() ?>vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu js -->
    <script src="<?php echo path() ?>js/jquery.meanmenu.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="<?php echo path() ?>js/jquery.smoothscroll.min.js"></script>
    <!-- Main js -->
    <script src="<?php echo path() ?>js/main.js"></script>

</body>
</html>