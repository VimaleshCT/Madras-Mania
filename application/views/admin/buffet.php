<div class="container">
    <h2 class="mt-5" style="color:#eabf33">Manage Buffet Menu</h2>

    <!-- Add new product form -->
    <div class="form-head dashboard-head d-md-flex d-block mb-5 align-items-start">
        <h2 class="dashboard-title me-auto">
            <a href="javascript:void(0);" class="btn btn-success btn-rounded ms-4 text-white d-inline-block flex-grow-1"
                data-bs-toggle="modal" data-bs-target="#addNewProductModal">
                Add New Buffet
            </a>
        </h2>
        <div class="input-group search-area">
            <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
            <span class="input-group-text">
                <a href="javascript:void(0)" id="searchButton">
                    <i class="flaticon-381-search-2"></i>
                </a>
            </span>
        </div>
    </div>

    <!-- List of products with actions -->
    <div class="card">
        <div class="card-body">
            <div style="max-height: 400px; overflow-y: auto;"> <!-- Table scrollable container -->
                <table class="table table-bordered table-striped" id="productsTable">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Meal</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Product Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product['day']; ?></td>
                                <td><?php echo $product['meal']; ?></td>
                                <td><?php echo $product['product_name']; ?></td>
                                <td>$<?php echo number_format($product['price'], 2); ?></td>
                                <td><img src="<?php echo base_url('assets/img/menu/' . $product['product_image']); ?>"
                                        style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;"></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal<?php echo $product['id']; ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <a href="<?php echo base_url('admin/deleteProduct/' . $product['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add New Buffet Modal -->
<div class="modal fade" id="addNewProductModal" tabindex="-1" aria-labelledby="addNewProductModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewProductModalLabel">Add New Buffet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addProductForm" method="POST" action="<?php echo base_url('admin/addProduct'); ?>"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="day">Day</label>
                        <select class="form-control" id="day" name="day" required>
                            <option value="" disabled selected>Select Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <!-- Add other days similarly -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="meal">Meal</label>
                        <select class="form-control" id="meal" name="meal" required>
                            <option value="" disabled selected>Select Meal</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-md-12">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type="file" id="imageUploadAddFood" name="product_image"
                                    accept=".png, .jpg, .jpeg" required>
                                <label for="imageUploadAddFood">
                                    <i class="fas fa-pen"></i> <!-- Pen icon -->
                                </label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreviewAddFood"
                                    style="background-image: url('<?php echo base_url('assets/img/default-placeholder.png'); ?>');">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Buffet</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal for each product -->
<?php foreach ($products as $product): ?>
    <div class="modal fade" id="editProductModal<?php echo $product['id']; ?>" tabindex="-1"
        aria-labelledby="editProductModalLabel<?php echo $product['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel<?php echo $product['id']; ?>">Edit Buffet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editProductForm<?php echo $product['id']; ?>" method="POST"
                    action="<?php echo base_url('admin/editProduct/' . $product['id']); ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="day">Day</label>
                            <select class="form-control" id="day" name="day" required>
                                <option value="Monday" <?php echo $product['day'] == 'Monday' ? 'selected' : ''; ?>>Monday
                                </option>
                                <option value="Tuesday" <?php echo $product['day'] == 'Tuesday' ? 'selected' : ''; ?>>Tuesday
                                </option>
                                <!-- Add other days similarly -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="meal">Meal</label>
                            <select class="form-control" id="meal" name="meal" required>
                                <option value="Breakfast" <?php echo $product['meal'] == 'Breakfast' ? 'selected' : ''; ?>>
                                    Breakfast</option>
                                <option value="Lunch" <?php echo $product['meal'] == 'Lunch' ? 'selected' : ''; ?>>Lunch
                                </option>
                                <option value="Dinner" <?php echo $product['meal'] == 'Dinner' ? 'selected' : ''; ?>>Dinner
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                value="<?php echo $product['product_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price"
                                value="<?php echo $product['price']; ?>" required>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="product_image">Product Image</label>
                                <div class="avatar-upload">
                                    <!-- Edit Section -->
                                    <div class="avatar-edit">
                                        <input type="file" id="imageUploadEditFood<?php echo $product['id']; ?>"
                                            name="product_image" accept=".png, .jpg, .jpeg">
                                        <label for="imageUploadEditFood<?php echo $product['id']; ?>">
                                            <i class="fas fa-pen"></i> <!-- Pen icon -->
                                        </label>
                                    </div>

                                    <!-- Preview Section -->
                                    <div class="avatar-preview">
                                        <div id="imagePreviewEditFood<?php echo $product['id']; ?>"
                                            style="background-image: url('<?php echo base_url('assets/img/menu/' . $product['product_image']); ?>');">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update Buffet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<script>
    $(document).ready(function () {
        // Image Preview Function
        function readURL(input, previewElement) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(previewElement).css('background-image', 'url(' + e.target.result + ')');
                    $(previewElement).hide();
                    $(previewElement).fadeIn(650);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Add Buffet - Image Preview
        $("#imageUploadAddFood").change(function () {
            readURL(this, '#imagePreviewAddFood');
        });

        // Edit Buffet - Image Preview for each product
        <?php foreach ($products as $product): ?>
            $("#imageUploadEditFood<?php echo $product['id']; ?>").change(function () {
                readURL(this, '#imagePreviewEditFood<?php echo $product['id']; ?>');
            });
        <?php endforeach; ?>

        // Search functionality
        function performSearch() {
            var searchValue = document.getElementById('searchInput').value.toLowerCase();
            var rows = document.querySelectorAll('#productsTable tbody tr');

            rows.forEach(function (row) {
                var productName = row.cells[2].textContent.toLowerCase(); // Use correct index for product name
                if (productName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Search when the search icon is clicked
        document.getElementById('searchButton').addEventListener('click', function () {
            performSearch();
        });

        // Search when the Enter key is pressed in the input field
        document.getElementById('searchInput').addEventListener('keyup', function (event) {
            if (event.key === 'Enter') {
                performSearch();
            }
        });
    });
</script>