<div class="breadcrumb-area bg-cover shadow dark text-center text-light"
    style="background-image: url(assets/img/shape/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Menu</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>Menu</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="menu-container">
    <div class="menu-header">
        <h1>Food Menu</h1>
        <p>We serve the best dishes with premium ingredients.</p>
    </div>

    <!-- Horizontal Scrollable Category Links (Sticky) -->
    <div class="category-scroll-wrapper">
        <div class="scroll-btn scroll-btn-left">&#10094;</div> <!-- Left arrow button -->
        <div class="category-scroll" id="categoryScroll">
            <?php
            foreach ($categories_with_products as $category => $products) {
                echo '<span class="category-link" data-target="#category-' . $category . '">' . $category . '</span>';
            }
            ?>
        </div>
        <div class="scroll-btn scroll-btn-right">&#10095;</div> <!-- Right arrow button -->
    </div>

    <!-- Products Grouped by Category -->
    <div id="menuItems">
        <?php
        foreach ($categories_with_products as $category => $products) {
            echo '<div id="category-' . $category . '" class="category-heading">
                    <h2>' . $category . '</h2>
                </div>';
            echo '<div class="menu-items">';
            foreach ($products as $product) {
                echo '
                    <div class="menu-item">
                        <!-- Product details on the left side -->
                        <div class="menu-item-text">
                            <div class="product-name-container">
                                <h3>' . $product["product_name"] . '</h3>
                                <!-- Veg/Non-Veg Icon displayed next to the product name -->
                                <div class="veg-nonveg-container">';
                if ($product['veg_non_veg'] == 1) {
                    echo '<img src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png" alt="non-veg icon" class="veg-nonveg-icon">';
                } else {
                    echo '<img src="https://img.icons8.com/color/48/vegetarian-food-symbol.png" alt="veg icon" class="veg-nonveg-icon">';
                }
                echo '</div>
                            </div>
                            <p>' . $product["description"] . '</p>
                            <div class="product-price">Price: €' . number_format($product["price"], 2) . '</div>
                        </div>

                        <!-- Larger Product Image on the right side -->
                        <div class="pic">
                        <img src="assets/img/menu/' . $product["product_image"] . '" alt="' . $product["product_name"] . '">
                        </div>
                    </div>';
            }
            echo '</div>';
        }
        ?>
    </div>

</div>

<!-- JavaScript to Handle Category Navigation, Scroll, and Buttons -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryScroll = document.querySelector('.category-scroll');
        const categoryLinks = document.querySelectorAll('.category-link');
        const categories = document.querySelectorAll('.category-heading');
        const scrollBtnLeft = document.querySelector('.scroll-btn-left');
        const scrollBtnRight = document.querySelector('.scroll-btn-right');
        const categoryWidth = categoryLinks[0].offsetWidth + 30; // Get width of one category, adding margin

        // Scroll to respective category on clicking the category link
        categoryLinks.forEach(link => {
            link.addEventListener('click', function () {
                const target = document.querySelector(link.getAttribute('data-target'));
                window.scrollTo({
                    top: target.offsetTop - 100, // Adjust for header
                    behavior: 'smooth'
                });
            });
        });

        // Change active category based on scroll position
        window.addEventListener('scroll', function () {
            let fromTop = window.scrollY;
            categories.forEach(category => {
                let offsetTop = category.offsetTop - 150; // Adjust for fixed header height
                let categoryId = category.getAttribute('id');

                if (fromTop >= offsetTop) {
                    document.querySelectorAll('.category-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    document.querySelector(`[data-target="#${categoryId}"]`).classList.add('active');
                }
            });
        });

        // Horizontal scrolling functionality for category bar (6 items per scroll)
        const scrollByAmount = categoryWidth * 6; // Scroll by width of 6 category links

        scrollBtnLeft.addEventListener('click', function () {
            categoryScroll.scrollBy({
                left: -scrollByAmount, // Scroll 6 categories to the left
                behavior: 'smooth'
            });
        });

        scrollBtnRight.addEventListener('click', function () {
            categoryScroll.scrollBy({
                left: scrollByAmount, // Scroll 6 categories to the right
                behavior: 'smooth'
            });
        });

        // Prevent vertical scrolling within the category bar
        categoryScroll.addEventListener('wheel', function (event) {
            event.preventDefault();
            categoryScroll.scrollBy({
                left: event.deltaY < 0 ? -100 : 100, // Scroll horizontally on mouse wheel
                behavior: 'smooth'
            });
        });
    });
</script>