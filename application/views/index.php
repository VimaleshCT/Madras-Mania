<!-- style="background-image: url(assets/img/shape/16.png);" -->



<div class="banner-area banner-style-two navigation-circle text-center zoom-effect text-light">

    <!-- Slider main container -->
    <div class="banner-fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Single Item -->
            <div class="swiper-slide">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/4.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align-center">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="info">
                                    <h4>Welcome To Madras Mania</h4>
                                    <h2>Savor Every Bite & <br> Cherish the Moment</h2>
                                    <p>
                                        Crafting unforgettable flavors just for you
                                    </p>
                                    <div class="button mt-30">
                                        <a class="btn btn-md btn-theme animation"
                                            href="<?php echo base_url(); ?>aboutus">Explore Menu</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="banner-shap">
                    <img src="assets/img/shape/12.png" alt="Image Not Found">
                    <img src="assets/img/shape/13.png" alt="Image Not Found">
                    <img src="assets/img/shape/14.png" alt="Image Not Found">
                    <img src="assets/img/shape/15.png" alt="Image Not Found">
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="swiper-slide">
                <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/22.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align-center">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="info">
                                    <h4>More Flavour</h4>
                                    <h2>Best Food & Wonderful <br> Eating Experience</h2>
                                    <p>
                                        Creating delicious premium menu
                                    </p>
                                    <div class="button mt-30">
                                        <a class="btn btn-md btn-theme animation"
                                            href="<?php echo base_url(); ?>">Explore Menu</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="banner-shap">
                    <img src="assets/img/shape/12.png" alt="Image Not Found">
                    <img src="assets/img/shape/13.png" alt="Image Not Found">
                    <img src="assets/img/shape/14.png" alt="Image Not Found">
                    <img src="assets/img/shape/15.png" alt="Image Not Found">
                </div>
            </div>
            <!-- End Single Item -->

        </div>

        <!-- Navigation -->
        <div class="swiper-nav-left">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</div>


<div class="food-menu-style-three-area default-padding bottom-less"
    style="background-image:url(assets/images/background/pic10.png); background-color:#fff8ec;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">Food Menu</h4>
                    <h2 class="title">Today's Special Menu</h2>
                </div>
            </div>
        </div>
        <div class="food-menu-three-two-items">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach ($special_menu as $product): ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                <div class="food-menu-style-three">
                                    <div class="thumb">
                                        <img src="assets/img/menu/<?= $product['product_image']; ?>"
                                            alt="<?= $product['product_name']; ?>">
                                        <div class="d-flex">
                                            <div class="price">
                                                <h5><del>$35.00</del>$<?= $product['price']; ?></h5>
                                            </div>
                                            <img width="30" height="30"
                                                src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png"
                                                alt="non-vegetarian-food-symbol" style="margin-bottom: 15px;" />
                                        </div>
                                    </div>
                                    <div class="info" style="background-color:#fff;">
                                        <h4><a href="<?php echo base_url(); ?>menu"><?= $product['product_name']; ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="choose-us-style-one-area shadow dark default-padding text-light bg-fixed"
    style="background-image: url(assets/img/banner/15.jpg);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-5 pr-60 pr-md-15 pr-xs-15">
                <div class="choose-us-style-two-info">
                    <h2 class="title">Where Quality Meets Taste,<br>Every Day</h2>
                    <div class="fun-fact-list">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="65" data-speed="3000">65</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Clients Every Day</span>
                        </div>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="26" data-speed="3000">26</div>
                            </div>
                            <span class="medium">Hygiene certificate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="feature-style-two-items">
                    <div class="feature-style-two">
                        <img src="assets/img/icon/16.png" alt="Image Not Found">
                        <h4>Quality Food</h4>
                        <p>
                            Seeing rather is settle genius excuse over to comparison new.
                        </p>
                    </div>
                    <div class="feature-style-two">
                        <img src="assets/img/icon/15.png" alt="Image Not Found">
                        <h4>Perfect Test</h4>
                        <p>
                            Timing rather is settle genius excuse over to comparison new.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="food-menu-style-four-area overflow-hidden default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">Cuisine Collection</h4>
                    <h2 class="title">Our Menu</h2>
                </div>
            </div>
        </div>
        <div class="food-menu-style-four-items">
            <div class="upDownScrol animate-up-down">
                <img src="assets/img/illustration/18.png" alt="Image Not Found">
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="nav nav-tabs food-menu-nav style-three four" id="menu-tabs" role="tablist">
                        <?php
                        $tab_index = 1;
                        $icons = [
                            "assets/img/icon/13.png",
                            "assets/img/icon/15.png",
                            "assets/img/icon/16.png",
                            "assets/img/icon/19.png"
                        ];
                        ?>
                        <?php foreach ($categories_with_products as $category_name => $products): ?>
                            <?php
                            // Use the icon at the current index or loop back if there are more categories than icons
                            $icon_index = ($tab_index - 1) % count($icons);
                            ?>
                            <button class="nav-link <?php echo $tab_index == 1 ? 'active' : ''; ?>"
                                id="nav-id-<?php echo $tab_index; ?>" data-bs-toggle="tab"
                                data-bs-target="#tab<?php echo $tab_index; ?>" type="button" role="tab"
                                aria-controls="tab<?php echo $tab_index; ?>"
                                aria-selected="<?php echo $tab_index == 1 ? 'true' : 'false'; ?>">
                                <img src="<?php echo $icons[$icon_index]; ?>" alt="Image Not Found">
                                <?php echo $category_name; ?>
                            </button>
                            <?php $tab_index++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content food-style-four-content" id="nav-tabContent">
                        <?php $tab_index = 1; ?>
                        <?php foreach ($categories_with_products as $category_name => $products): ?>
                            <div class="tab-pane fade <?php echo $tab_index == 1 ? 'show active' : ''; ?>"
                                id="tab<?php echo $tab_index; ?>" role="tabpanel"
                                aria-labelledby="nav-id-<?php echo $tab_index; ?>">
                                <div class="row">
                                    <?php foreach ($products as $product): ?>
                                        <div class="col-xl-6">
                                            <div class="food-menus-item">
                                                <ul class="meal-items">
                                                    <li>
                                                        <div class="thumbnail" style="margin-bottom: 15px;">
                                                            <img src="assets/img/menu/<?php echo $product['product_image']; ?>"
                                                                alt="Image Not Found">
                                                        </div>
                                                        <div class="content" style="padding-left: 20px;">
                                                            <div class="top" style="margin-bottom: 10px;">
                                                                <div class="title">
                                                                    <h4><a href="#"><?php echo $product['product_name']; ?></a>
                                                                    </h4>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$<?php echo $product['price']; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="left">
                                                                    <p><?php echo $product['description']; ?></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php $tab_index++; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center mt-4">
                        <a href="<?php echo base_url('menu'); ?>" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="gallery-style-two-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">Food Item</h4>
                    <h2 class="title">Our Food Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gallery-content-items">
                <div id="gallery-masonary" class="gallery-items gallery-style-two colums-3">
                    <!-- Single Item -->
                    <div class="gallery-item">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="assets/img/portfolio/60.jpg" class="popup-gallery">
                                    <img src="assets/img/portfolio/60.jpg" alt="Image Not Found" style="height:610px;">
                                    <div class="overlay">
                                        <span>Minion Drinks</span>
                                        <h4>Cold Lemon Juice</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="gallery-item">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="assets/img/portfolio/51.jpg" class="popup-gallery">
                                    <img src="assets/img/portfolio/51.jpg" alt="Image Not Found">
                                    <div class="overlay">
                                        <span>Grill Chicken</span>
                                        <h4>Chicken Sandwich</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="gallery-item">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="assets/img/portfolio/56.jpg" class="popup-gallery">
                                    <img src="assets/img/portfolio/56.jpg" alt="Image Not Found">
                                    <div class="overlay">
                                        <span>Cheesy Favourite</span>
                                        <h4>Salmon Steak</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="gallery-item">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="assets/img/portfolio/6.jpg" class="popup-gallery">
                                    <img src="assets/img/portfolio/6.jpg" alt="Image Not Found">
                                    <div class="overlay">
                                        <span>Cheesy Favourite</span>
                                        <h4>Crispy Crust Pizzeria</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="gallery-item">
                        <div class="gallery-style-one">
                            <div class="item">
                                <a href="assets/img/portfolio/5.jpg" class="popup-gallery">
                                    <img src="assets/img/portfolio/5.jpg" alt="Image Not Found">
                                    <div class="overlay">
                                        <span>Grill Chicken</span>
                                        <h4>Chicken Sandwich</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-feature-style-one-area default-padding bg-cover" style="background-image: url(assets/img/shape/1.png);">
    <div class="shape-bottom-right">
        <img src="assets/img/shape/9.png" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="top-feature-style-one-info">
            <div class="row align-center">

                <div class="col-xl-4 col-lg-6">
                    <div class="reservation-style-two mr-50 mr-md-0 mr-xs-0">
                        <h2 class="title">Book a table</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="+4733378901"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Person</label>
                                        <select id="subject" style="display: none;">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="4">3 Person</option>
                                            <option value="5">4 Person</option>
                                            <option value="6">5 Person</option>
                                        </select>
                                        <div class="nice-select" tabindex="0"><span class="current">1 Person</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">1 Person</li>
                                                <li data-value="2" class="option">2 Person</li>
                                                <li data-value="4" class="option">3 Person</li>
                                                <li data-value="5" class="option">4 Person</li>
                                                <li data-value="6" class="option">5 Person</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group date date-picker-one">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <select id="time" style="display: none;">
                                            <option value="1">10:00 AM</option>
                                            <option value="1">11:00 AM</option>
                                            <option value="1">12:00 AM</option>
                                            <option value="1">1:00 AM</option>
                                            <option value="1">2:00 AM</option>
                                            <option value="1">3:00 AM</option>
                                        </select>
                                        <div class="nice-select" tabindex="0"><span class="current">10:00 AM</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">10:00 AM</li>
                                                <li data-value="1" class="option">11:00 AM</li>
                                                <li data-value="1" class="option">12:00 AM</li>
                                                <li data-value="1" class="option">1:00 AM</li>
                                                <li data-value="1" class="option">2:00 AM</li>
                                                <li data-value="1" class="option">3:00 AM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Book A Table
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="top-feature-style-one-thumb animate" data-animate="fadeInUp">
                        <img src="assets/img/tam1.jpg" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                    <div class="opening-hours-hightlight text-light">
                        <h2 class="title">Opening Hours</h2>
                        <ul>
                            <li>
                                <span> Saturday : </span>
                                <div class="pull-right"> 6.00 am - 12.00 pm </div>
                            </li>
                            <li>
                                <span> Sunday : </span>
                                <div class="pull-right"> 8.30 am - 11.00 pm </div>
                            </li>
                            <li>
                                <span> Monday : </span>
                                <div class="pull-right"> 9.00 am - 10.30 pm </div>
                            </li>
                            <li>
                                <span> Tuesday : </span>
                                <div class="pull-right"> 8.00 am - 12.00 pm </div>
                            </li>
                            <li>
                                <span> Wednesday : </span>
                                <div class="pull-right"> 9.45 am - 10.00 pm </div>
                            </li>
                            <li>
                                <span> Thursday : </span>
                                <div class="pull-right"> 8.15 am - 12.00 pm </div>
                            </li>

                            <li>
                                <span> Friday : </span>
                                <div class="pull-right closed"> Closed </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>