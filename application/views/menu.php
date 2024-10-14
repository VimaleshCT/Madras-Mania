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
        <h5 style="color:#7f060f">
            *Alle angegebenen Preise beinhalten STEUER <br>
            *Einige Gerichte beinhalten Lebensmittel Farbe, Milchprodukte und Spuren von Nusse und Nusse.
        </h5>
    </div>

    <!-- Horizontal Scrollable Category Links (Sticky) for Desktop and Tablet -->
    <div class="category-scroll-wrapper">
        <div class="scroll-btn scroll-btn-left">&#10094;</div> <!-- Left arrow button -->
        <div class="category-scroll" id="categoryScroll" style="overflow-x: auto; white-space: nowrap;">
            <?php
            foreach ($categories_with_products as $category => $products) {
                $slug = $products[0]['slug'];
                echo '<span class="category-link" style="display: inline-block; margin: 0 10px; cursor: pointer;" data-target="#category-' . $slug . '">' . $category . '</span>';
            }
            ?>
        </div>
        <div class="scroll-btn scroll-btn-right">&#10095;</div> <!-- Right arrow button -->
    </div>


    <!-- Mobile/Tablet Dropdown for Categories -->
    <div class="category-dropdown-wrapper">
        <button class="drop-btn">
            Select a Category <span>&#x25BC;</span> <!-- Dropdown arrow icon -->
        </button>
        <div class="dropdown-content">
            <ul>
                <?php
                foreach ($categories_with_products as $category => $products) {
                    $slug = $products[0]['slug'];
                    $cat_icon = $products[0]['cat_icon']; // Retrieve the category icon
                    echo '<li><a href="#category-' . $slug . '">
                          <div class="icon"><img src="assets/icons/' . $cat_icon . '" style="width: 24px; height: 24px;" alt="Category Icon"></div>' . $category . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- Products Grouped by Category -->
    <div id="menuItems">
        <?php
        foreach ($categories_with_products as $category => $products) {
            $slug = $products[0]['slug']; // Use the slug from the first product in the category
            $cat_icon = $products[0]['cat_icon']; // Retrieve the category icon from the first product
            echo '<div id="category-' . $slug . '" class="category-heading">';
            echo '<h2><img src="assets/icons/' . $cat_icon . '" alt="' . $category . ' Icon" style="width: 10vh; height: 10vh; margin-right: 8px;"> ' . $category . '</h2>';
            echo '</div>';
            echo '<div class="menu-items">';
            foreach ($products as $product) {
                echo '<div class="menu-item">';
                echo '<div class="menu-item-text">';
                echo '<div class="product-name-container">';
                echo '<h3>' . $product["product_name"] . '</h3>';
                echo '<div class="veg-nonveg-container">';
                if ($product['veg_non_veg'] == 1) {
                    echo '<img src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png" alt="non-veg icon" class="veg-nonveg-icon">';
                } else {
                    echo '<img src="https://img.icons8.com/color/48/vegetarian-food-symbol.png" alt="veg icon" class="veg-nonveg-icon">';
                }
                echo '</div></div>';

                // Display Allergens as Icons
                if (!empty($product['allergen_icons'])) {
                    echo '<div class="allergen-icons">';
                    $allergens = explode(',', $product['allergen_icons']);
                    foreach ($allergens as $allergen_icon) {
                        echo '<img src="assets/icons/' . trim($allergen_icon) . '" alt="Allergen" style="width: 5vh; height: 5vh; margin-right: 8px;">';
                    }
                    echo '</div>';
                }

                echo '<p>' . $product["description"] . '</p>';
                echo '<div class="product-price">Price: €' . number_format($product["price"], 2) . '</div>';
                echo '</div>'; // .menu-item-text
        
                // Product image
                echo '<div class="pic">';
                echo '<img src="assets/img/menu/' . $product["product_image"] . '" alt="' . $product["product_name"] . '">';
                echo '</div>'; // .pic
                echo '</div>'; // .menu-item
            }
            echo '</div>'; // .menu-items
        }
        ?>
    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryScroll = document.querySelector('.category-scroll');
        const scrollBtnLeft = document.querySelector('.scroll-btn-left');
        const scrollBtnRight = document.querySelector('.scroll-btn-right');
        const categoryLinks = document.querySelectorAll('.category-link');

        // Adjust the scroll amount based on the container width
        const scrollByAmount = categoryScroll.offsetWidth * 0.5; // Scroll by 50% of container width

        // Scroll horizontally to the left
        scrollBtnLeft.addEventListener('click', function () {
            categoryScroll.scrollBy({
                left: -scrollByAmount,
                behavior: 'smooth' // Smooth horizontal scrolling
            });
        });

        // Scroll horizontally to the right
        scrollBtnRight.addEventListener('click', function () {
            categoryScroll.scrollBy({
                left: scrollByAmount,
                behavior: 'smooth' // Smooth horizontal scrolling
            });
        });

        // Scroll vertically to the respective category section when a category link is clicked
        categoryLinks.forEach(link => {
            link.addEventListener('click', function () {
                const target = document.querySelector(link.getAttribute('data-target'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100, // Adjust for header offset
                        behavior: 'smooth' // Smooth vertical scrolling
                    });
                }
            });
        });
    });


</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryDropdown = document.querySelector('.drop-btn');
        const dropdownContent = document.querySelector('.dropdown-content');

        // Toggle dropdown on button click
        categoryDropdown.addEventListener('click', function () {
            dropdownContent.classList.toggle('show');
        });

        const categoryLinks = document.querySelectorAll('.dropdown-content ul li a');
        categoryLinks.forEach(link => {
            link.addEventListener('click', function () {
                const target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop - 100, // Adjust for header
                    behavior: 'smooth'
                });
                dropdownContent.classList.remove('show'); // Close dropdown after selecting a category
            });
        });
    });
</script>