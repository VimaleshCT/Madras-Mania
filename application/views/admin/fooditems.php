<div class="container mt-5">
    <h2 class="mb-5" style="color:#eabf33;">Manage Food Items</h2>

    <!-- Add New Food Button and Search Area -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="javascript:void(0);" class="btn btn-success btn-rounded text-white" data-bs-toggle="modal"
            data-bs-target="#addFoodItemModal">
            Add New Food
        </a>
        <div class="input-group search-area w-50">
            <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
            <span class="input-group-text">
                <a href="javascript:void(0)" id="searchButton"><i class="flaticon-381-search-2"></i></a>
            </span>
        </div>
    </div>

    <!-- Food Items Table -->
    <div class="card">
        <div class="card-body">
            <div style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered table-striped" id="productsTable">
                    <thead>
                        <tr>
                            <th>Item Image</th>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><img src="<?php echo base_url('assets/img/menu/' . $product['product_image']); ?>"
                                        style="width: 90px; height: 90px; object-fit: cover; border-radius: 8px;"></td>
                                <td><?php echo $product['product_name']; ?></td>
                                <td><?php echo $product['category_name']; ?></td>
                                <td>$<?php echo number_format($product['price'], 2); ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm mr-2" data-bs-toggle="modal"
                                        data-bs-target="#editFoodItemModal<?php echo $product['id']; ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <a href="<?php echo base_url('admin/deleteFoodItem/' . $product['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>

                            <!-- Edit Food Item Modal -->
                            <div class="modal fade" id="editFoodItemModal<?php echo $product['id']; ?>" tabindex="-1"
                                aria-labelledby="editFoodItemModalLabel<?php echo $product['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="editFoodItemModalLabel<?php echo $product['id']; ?>">Edit Food Item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="<?php echo base_url('admin/updateFoodItem'); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="product_name">Item Name</label>
                                                            <input type="text" name="product_name" class="form-control"
                                                                value="<?php echo $product['product_name']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="category_name">Category</label>
                                                            <select name="category_id" class="form-control" required>
                                                                <option value="">Select Category</option>
                                                                <?php foreach ($categories as $category): ?>
                                                                    <option value="<?php echo $category['category_id']; ?>"
                                                                        <?php echo ($category['category_id'] == $product['category_id']) ? 'selected' : ''; ?>>
                                                                        <?php echo $category['category_name']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input type="number" step="0.01" name="price"
                                                                class="form-control"
                                                                value="<?php echo $product['price']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file"
                                                                    id="imageUploadEditFood<?php echo $product['id']; ?>"
                                                                    name="product_image" accept=".png, .jpg, .jpeg">
                                                                <label
                                                                    for="imageUploadEditFood<?php echo $product['id']; ?>"><i
                                                                        class="fas fa-pen"></i></label>
                                                            </div>
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add New Food Item -->
<div class="modal fade" id="addFoodItemModal" tabindex="-1" aria-labelledby="addFoodItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFoodItemModalLabel">Add New Food Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/addFoodItem'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_name">Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo $category['category_id']; ?>">
                                            <?php echo $category['category_name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="product_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type="file" id="imageUploadAddFood" name="product_image"
                                        accept=".png, .jpg, .jpeg" required>
                                    <label for="imageUploadAddFood"><i class="fas fa-pen"></i></label>
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
                        <button type="submit" class="btn btn-primary" style="background-color:#eabf33;">Add
                            Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Search functionality
        function performSearch() {
            var searchValue = document.getElementById('searchInput').value.toLowerCase();
            var rows = document.querySelectorAll('#productsTable tbody tr');

            rows.forEach(function (row) {
                var productName = row.cells[1].textContent.toLowerCase(); // Use index 1 for Item Name
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

        // Image Preview for Add Modal
        function readURL(input, previewElement) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(previewElement).css('background-image', 'url(' + e.target.result + ')');
                    $(previewElement).hide();
                    $(previewElement).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imageUploadAddFood").change(function () {
            readURL(this, '#imagePreviewAddFood');
        });

        // Image Preview for Edit Modal
        <?php foreach ($products as $product): ?>
            $("#imageUploadEditFood<?php echo $product['id']; ?>").change(function () {
                readURL(this, '#imagePreviewEditFood<?php echo $product['id']; ?>');
            });
        <?php endforeach; ?>
    });
</script>