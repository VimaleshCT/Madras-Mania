<div class="breadcrumb-area bg-cover shadow dark text-center text-light"
    style="background-image: url(assets/img/banner/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>MENU</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>Menu</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="food-menus-area default-padding">
    <div class="container">
        <?php $index = 0; ?>

        <!-- Display categories with 7 or fewer products first -->
        <?php foreach ($categories_with_products as $category_name => $products): ?>
            <?php if (count($products) <= 7): ?>
                <div class="food-menus-item">
                    <div class="row">
                        <?php if ($index % 2 == 0): ?>
                            <div class="col-lg-5 thumb"
                                style="background: url(assets/img/portfolio/60.jpg); background-size: cover; background-position: center;">
                                <div class="discount-badge">
                                    <?php echo $category_name; ?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="info">

                                    <ul class="meal-items">
                                        <?php foreach ($products as $product): ?>
                                            <li>
                                                <div class="thumbnail">
                                                    <img src="assets/img/menu/<?php echo $product['product_image']; ?>"
                                                        alt="<?php echo $product['product_name']; ?>"
                                                        style="width: auto; height: auto;">
                                                </div>
                                                <div class="content">
                                                    <div class="top">
                                                        <div class="title">
                                                            <h4><a href="#"><?php echo $product['product_name']; ?></a></h4>
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
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-7 order-lg-2">
                                <div class="info">

                                    <ul class="meal-items">
                                        <?php foreach ($products as $product): ?>
                                            <li>
                                                <div class="thumbnail">
                                                    <img src="assets/img/menu/<?php echo $product['product_image']; ?>"
                                                        alt="<?php echo $product['product_name']; ?>"
                                                        style="width: 100px; height: auto;">
                                                </div>
                                                <div class="content">
                                                    <div class="top">
                                                        <div class="title">
                                                            <h4><a href="#"><?php echo $product['product_name']; ?></a></h4>
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
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 thumb order-lg-last"
                                style="background: url(assets/img/portfolio/5.jpg); background-size: cover; background-position: center;">
                                <div class="discount-badge">
                                    <?php echo $category_name; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Display categories with more than 7 products afterwards -->
        <div class="food-menus-area default-padding">
            <div class="container">
                <?php foreach ($categories_with_products as $category_name => $products): ?>
                    <?php if (count($products) > 7): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading text-center">
                                    <h4 class="sub-title">Category</h4>
                                    <h2 class="title"><?php echo $category_name; ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 pr-50 pr-md-15 pr-xs-15 mb-md-50 mb-xs-30">
                                <div class="info">
                                    <ul class="meal-items">
                                        <?php foreach (array_slice($products, 0, ceil(count($products) / 2)) as $product): ?>
                                            <li>
                                                <div class="thumbnail">
                                                    <img src="assets/img/menu/<?php echo $product['product_image']; ?>"
                                                        alt="<?php echo $product['product_name']; ?>">
                                                </div>
                                                <div class="content">
                                                    <div class="top">
                                                        <div class="title">
                                                            <h4><a href="#"><?php echo $product['product_name']; ?></a></h4>
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
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-50 pl-md-15 pl-xs-15">
                                <div class="meal-thumb-less">
                                    <div class="info">
                                        <ul class="meal-items">
                                            <?php foreach (array_slice($products, ceil(count($products) / 2)) as $product): ?>
                                                <li>
                                                    <div class="thumbnail">
                                                        <img src="assets/img/menu/<?php echo $product['product_image']; ?>"
                                                            alt="<?php echo $product['product_name']; ?>">
                                                    </div>
                                                    <div class="content">
                                                        <div class="top">
                                                            <div class="title">
                                                                <h4><a href="#"><?php echo $product['product_name']; ?></a></h4>
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
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>





<div class="opening-hours-area default-padding overflow-hidden">
    <div class="container">
        <div class="opening-hour-items">
            <h2 class="text-fixed">Madras Mania</h2>
            <div class="shape">
                <img src="assets/img/shape/4.png" alt="Image Not Found">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="opening-hours-thumb video-bg-live">
                        <img src="assets/img/banner/7.jpg" alt="Image Not Found">
                        <div class="player"
                            data-property="{videoURL:'NC9KlaxtfLg',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:654, opacity:1, quality:'default'}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="opening-hours-info">
                        <h3>Opening Hours</h3>
                        <p>
                            A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar
                            opens in the center..
                        </p>
                        <ul class="opening-hours-table">
                            <li>
                                <h6>Sunday to Tuesday:</h6> <span>10:00 - 09:00</span>
                            </li>
                            <li>
                                <h6>Wednesday to Thursday:</h6> <span>11:30 - 10:30</span>
                            </li>
                            <li>
                                <h6>Friday & Saturday:</h6> <span>10:30 - 12:00</span>
                            </li>
                        </ul>
                        <div class="call-to-action">
                            <div class="icon">
                                <img src="assets/img/icon/6.png" alt="Image Not Found">
                            </div>
                            <div class="info">
                                <p>Call Anytime</p>
                                <h4><a href="#">017622612355</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>