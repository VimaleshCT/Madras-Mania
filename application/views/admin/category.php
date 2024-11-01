<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="container-fluid">
    <h2 class="mt-5" style="color:#eabf33; text-align:center;">Manage Categories</h2>

    <!-- Add new category form -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header" style="background-color: #eabf33; color: white;">
            <h5 class="mb-0">Add New Category</h5>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('admin/addCategory'); ?>" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="category_name" class="form-label" style="padding:5px;">Category
                                Name</label>
                            <input type="text" name="category_name" class="form-control" style="margin: 15px;"
                                placeholder="Enter category name" required>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-4" style="margin-bottom:10px;">
                        <button type="submit" class="btn btn-primary"
                            style="background-color: #eabf33; border-color: #eabf33; padding: 10px 30px;">Add
                            Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <!-- Category List Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Products</th> <!-- Adjusted width for products -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?php echo $category['category_id']; ?></td>
                            <td><?php echo $category['category_name']; ?></td>
                            <td>
                                <div class="product-list"
                                    title="<?php echo !empty($category['products']) ? $category['products'] : 'No products'; ?>">
                                    <?php
                                    if (!empty($category['products'])) {
                                        echo strlen($category['products']) > 50 ? substr($category['products'], 0, 50) . '...' : $category['products'];
                                    } else {
                                        echo 'No products';
                                    }
                                    ?>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons d-flex justify-content-around">
                                    <!-- Edit Button -->
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editCategoryModal<?php echo $category['category_id']; ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <a href="<?php echo base_url('admin/deleteCategory/' . $category['category_id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this category?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align:center;">No Categories Found</td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>