<!-- style="background-image: url(assets/img/shape/16.png);" -->



<div class="banner-area banner-style-two navigation-circle text-center zoom-effect text-light">

    <!-- Slider main container -->
    <div class="banner-fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Single Item -->
            <div class="swiper-slide">
                <div class="banner-thumb bg-cover" style="background: url(assets/img/banner/c1.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align">
                            <div class="col-xl-7 col-lg-9">
                                <div class="info">
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
                <div class="banner-thumb bg-cover" style="background: url(assets/img/banner/c2.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align">
                            <div class="col-xl-7 col-lg-9">
                                <div class="info">
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
            <div class="swiper-slide">
                <div class="banner-thumb bg-cover" style="background: url(assets/img/banner/c3.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align">
                            <div class="col-xl-7 col-lg-9">
                                <div class="info">
                                    <h2>Savor Every Bite & <br> Cherish the Moment</h2>
                                    <p>
                                        Crafting unforgettable flavors just for you
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

            <div class="swiper-slide">
                <div class="banner-thumb bg-cover" style="background: url(assets/img/banner/c4.jpg);">
                </div>
                <div class="container">
                    <div class="content">

                        <div class="row align">
                            <div class="col-xl-7 col-lg-9">
                                <div class="info">
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
        </div>

        <!-- Navigation -->
        <div class="swiper-nav-left">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</div>


<div class="food-menu-style-three-area default-padding bottom-less"
    style="background-color:#fff8ec; position: relative; overflow: hidden;">
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
                                                <h5><del>35.00€</del>€<?= $product['price']; ?></h5>
                                            </div>
                                            <!-- Display veg/non-veg icon based on status -->
                                            <?php if ($product['veg_non_veg'] == 1): ?>
                                                <img width="30" height="30"
                                                    src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png"
                                                    alt="non-vegetarian-food-symbol" style="margin-bottom: 15px;" />
                                            <?php else: ?>
                                                <img width="30" height="30"
                                                    src="https://img.icons8.com/color/48/vegetarian-food-symbol.png"
                                                    alt="vegetarian-food-symbol" style="margin-bottom: 15px;" />
                                            <?php endif; ?>
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
            <div class="col-lg-5 pr-60 pr-md-15 pr-xs-15 text-center-mobile">
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
                        <h4>Perfect Taste</h4>
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
                            "assets/icons/icon1.png",
                            "assets/icons/icon3.png",
                            "assets/icons/icon5.png",
                            "assets/icons/icon2.png"
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
                                                                    <span>€<?php echo $product['price']; ?></span>
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
                        <!-- Form with ID for submission -->
                        <form id="bookingForm" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" name="name" placeholder="Your name"
                                            type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="+4733378901"
                                            type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="person">Person</label>
                                        <select id="person" name="person" class="form-control" required
                                            style="border-color:#eabf33">
                                            <option value="2">Upto 2 Persons</option>
                                            <option value="5">Upto 5 Persons</option>
                                            <option value="10">Upto 10 Persons</option>
                                            <option value="20">Upto 20 Persons</option>
                                            <option value="30">Upto 30 Persons</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <select id="time" name="time" class="form-control" required
                                            style="border-color:#eabf33">
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="1:00 PM">1:00 PM</option>
                                            <option value="2:00 PM">2:00 PM</option>
                                            <option value="3:00 PM">3:00 PM</option>
                                            <option value="4:00 PM">4:00 PM</option>
                                            <option value="5:00 PM">5:00 PM</option>
                                            <option value="6:00 PM">6:00 PM</option>
                                            <option value="7:00 PM">7:00 PM</option>
                                            <option value="8:00 PM">8:00 PM</option>
                                            <option value="9:00 PM">9:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="padding:10px;">
                                    <button type="submit" class="btn btn-primary">Book A Table</button>
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
                            <li><span>Saturday :</span>
                                <div class="pull-right">6.00 am - 12.00 pm</div>
                            </li>
                            <li><span>Sunday :</span>
                                <div class="pull-right">8.30 am - 11.00 pm</div>
                            </li>
                            <li><span>Monday :</span>
                                <div class="pull-right">9.00 am - 10.30 pm</div>
                            </li>
                            <li><span>Tuesday :</span>
                                <div class="pull-right">8.00 am - 12.00 pm</div>
                            </li>
                            <li><span>Wednesday :</span>
                                <div class="pull-right">9.45 am - 10.00 pm</div>
                            </li>
                            <li><span>Thursday :</span>
                                <div class="pull-right">8.15 am - 12.00 pm</div>
                            </li>
                            <li><span>Friday :</span>
                                <div class="pull-right">8.00 am - 12.00 pm</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#bookingForm').on('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Make AJAX request
            $.ajax({
                url: '<?= base_url("process_booking") ?>', // Your controller URL
                method: 'POST',
                data: $(this).serialize(), // Serialize form data
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message, 'Success'); // Show success message
                        $('#bookingForm')[0].reset(); // Reset the form fields
                    } else {
                        toastr.error(response.message, 'Booking Failed'); // Show error message
                    }
                },
                error: function () {
                    toastr.error('An error occurred. Please try again.', 'Error'); // General error
                }
            });
        });
    });


</script>



<div class="day-meal-selection-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 style="color: #eabf33;">Buffet Menu</h4>
                    <h2 class="title">Explore our Menu by Day & Meal</h2>
                </div>
            </div>
        </div>

        <!-- Day Selection -->
        <div class="row justify-content-center" id="day-tabs">
            <?php
            $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            foreach ($weekdays as $day): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <div class="day-card" id="day-<?php echo strtolower($day); ?>"
                        onclick="openMeals('<?php echo $day; ?>')">
                        <div class="card border-0 hover-card">
                            <!-- Dynamically generated image path based on day -->
                            <img src="assets/img/day/<?php echo strtolower($day); ?>.png" alt="<?php echo $day; ?>"
                                class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $day; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Meal Selection (Initially hidden) -->
        <div id="meal-selection" class="row text-center" style="display: none;">
            <h4 style="color: #eabf33;padding: 30px;">Select a Meal</h4>
            <div class="col-lg-12 text-center">
                <div class="row justify-content-center" id="meal-tabs">
                    <!-- Meals will be dynamically loaded here via AJAX -->
                </div>
            </div>
        </div>

        <!-- Product List (Initially hidden) -->
        <div id="product-list-section" class="row text-center" style="display: none;">
            <h4 style="color: #eabf33;">Available Products</h4>
            <div class="col-lg-12 text-center">
                <div class="row" id="product-list">
                    <!-- Products will be dynamically loaded here via AJAX -->
                </div>
            </div>
        </div>


    </div>
</div>

<div class="services-style-one-items">
    <div class="container">
        <div class="relative">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">Our Events</h4>
                    <h2 class="title">Types of Our Events</h2>
                </div>
            </div>
            <!-- Navigation -->
            <div class="services-swiper-nav">
                <div class="services-cat-prev"></div>
                <div class="services-cat-next"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Loop through the events and display each event -->
                            <?php if (!empty($events)): ?>
                                <?php foreach ($events as $event): ?>
                                    <div class="swiper-slide">
                                        <div class="services-style-one">
                                            <div class="thumb">
                                                <img src="<?php echo base_url(); ?>assets/img/events/<?php echo $event['image']; ?>"
                                                    alt="<?php echo $event['title']; ?>" />
                                                <h4>
                                                    <a href="event_details.php?id=<?php echo $event['id']; ?>">
                                                        <?php echo $event['title']; ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="info">
                                                <!-- Event Description -->
                                                <p><?php echo $event['description']; ?></p>

                                                <!-- Event Info List -->
                                                <ul class="event-info-list">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <strong><?php echo $event['date']; ?></strong>
                                                    </li>
                                                    <li>
                                                        <i class="far fa-clock"></i>
                                                        <strong><?php echo $event['time']; ?></strong>
                                                    </li>
                                                </ul>

                                                <!-- Event Button (Aligned to the left) -->
                                                <a class="btn btn-light circle btn-md animation"
                                                    href="<?php echo base_url(); ?>welcome/event_details/<?php echo $event['id']; ?>">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No events found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    var selectedDay = '';

    // Function to clear previous meals and products when switching days
    function clearPreviousSelections() {
        $('#meal-tabs').html('');
        document.getElementById('meal-selection').style.display = 'none';  // Hide the meal selection section
        $('#product-list').html('');
        document.getElementById('product-list-section').style.display = 'none';  // Hide the product list section
    }

    // Fetch meals for the selected day
    function openMeals(day) {
        selectedDay = day;
        clearPreviousSelections();  // Clear previous selections

        // Mark all days inactive
        document.querySelectorAll('.day-card').forEach(function (card) {
            card.classList.remove('active');
        });

        // Activate the selected day
        document.getElementById('day-' + day.toLowerCase()).classList.add('active');

        // Log the selected day
        console.log("Selected day: ", day);

        $.ajax({
            url: '<?php echo base_url(); ?>welcome/get_meals_by_day',
            type: 'POST',
            data: { day: day },
            dataType: 'json',
            success: function (meals) {
                console.log("Meals received: ", meals);  // Log the meals received

                let orderedMeals = ['Breakfast', 'Lunch', 'Dinner'];  // Force the order
                let mealButtons = '';

                orderedMeals.forEach(function (mealName) {
                    const meal = meals.find(m => m.meal.toLowerCase() === mealName.toLowerCase());
                    if (meal) {
                        mealButtons += `
                           <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                               <div class="meal-card" onclick="openProducts('${meal.meal}')">
                                   <div class="card border-0 hover-card">
                                       <div class="meal-icon ${mealName.toLowerCase()}-icon"></div>
                                       <div class="card-body text-center">
                                           <h5 class="card-title">${meal.meal}</h5>
                                       </div>
                                   </div>
                               </div>
                           </div>`;
                    }
                });

                if (mealButtons === '') {
                    mealButtons = '<p>No meals available for this day.</p>';
                }

                $('#meal-tabs').html(mealButtons);  // Add meal buttons
                document.getElementById('meal-selection').style.display = 'block';  // Show the meal selection section
            },
            error: function (xhr, status, error) {
                console.error("Error fetching meals:", error);  // Log any errors
            }
        });
    }

    // Fetch products for the selected day and meal
    // Fetch products for the selected day and meal
    function openProducts(meal) {
        console.log("Selected meal: ", meal);

        $.ajax({
            url: '<?php echo base_url(); ?>welcome/get_products_by_day_and_meal',
            type: 'POST',
            data: { day: selectedDay, meal: meal },
            dataType: 'json',
            success: function (products) {
                console.log("Products received: ", products);  // Log the products received

                let productList = '';

                if (products.length > 0) {
                    products.forEach(function (product) {
                        productList += `
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <div class="food-menu-style-three">
                            <div class="thumb">
                                <img src="assets/img/menu/${product.product_image}"
                                    alt="${product.product_name}">
                                <div class="d-flex">
                                    <div class="price">
                                        <h5><del>35.00€</del>€${product.price}</h5>
                                    </div>
                                    <!-- Display veg/non-veg icon based on status -->
                                    ${product.veg_non_veg == 1
                                ? `<img width="30" height="30"
                                                src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png"
                                                alt="non-vegetarian-food-symbol" style="margin-bottom: 15px;" />`
                                : `<img width="30" height="30"
                                                src="https://img.icons8.com/color/48/vegetarian-food-symbol.png"
                                                alt="vegetarian-food-symbol" style="margin-bottom: 15px;" />`
                            }
                                </div>
                            </div>
                            <div class="info" style="background-color:#fff;">
                                <h4><a href="<?php echo base_url(); ?>menu">${product.product_name}</a></h4>
                            </div>
                        </div>
                    </div>`;
                    });
                } else {
                    productList = '<p>No products available for this meal.</p>';
                }

                $('#product-list').html(productList);  // Add product items
                document.getElementById('product-list-section').style.display = 'block';  // Show the product list section
            },
            error: function (xhr, status, error) {
                console.error("Error fetching products:", error);  // Log any errors
            }
        });
    }



    // Auto-select the current day based on the Germany calendar
    document.addEventListener('DOMContentLoaded', function () {
        // Get today's date in Germany's timezone (Europe/Berlin)
        const today = new Date().toLocaleString('en-us', {
            weekday: 'long',
            timeZone: 'Europe/Berlin'
        });

        console.log("Today's day in Germany: ", today);  // Log the current day in Germany
        openMeals(today);  // Automatically select today's day based on Germany's calendar
    });
</script>