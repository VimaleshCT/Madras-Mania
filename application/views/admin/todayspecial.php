<div class="container-fluid">
    <h2 class="mt-5" style="color:#eabf33">Manage Today's Special</h2>

    <!-- Search and Save Section -->
    <div class="row mb-3">
        <div class="col-md-10"></div> <!-- Empty space to push the search to the right -->
        <div class="col-md-2">
            <input type="text" id="productSearch" class="form-control" placeholder="Search...">
        </div>
    </div>

    <!-- List of all products with toggle for Today's Special -->
    <div class="card">
        <div class="card-body">
            <div style="max-height: 400px;overflow-y: auto; ">
                <table class="table table-bordered table-striped" id="productsTable">
                    <thead>
                        <tr>
                            <th>Today's Special</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Product Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Display all products -->
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <!-- Today's Special Toggle (Checkbox) -->
                                <td>
                                    <input type="checkbox" name="todaysspecial[]"
                                        class="toggle-todayspecial"
                                        data-product-id="<?php echo $product['id']; ?>"
                                        <?php if ($product['todayspecial'] == 1) echo 'checked'; ?>>
                                </td>
                                <td><?php echo $product['product_name']; ?></td>
                                <td>$<?php echo number_format($product['price'], 2); ?></td>
                                <td><img src="<?php echo base_url('assets/img/menu/' . $product['product_image']); ?>" width="50" height="50"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for real-time update in the frontend and database -->
<script>
    // Automatically update in the database when checkbox is toggled
    document.querySelectorAll('.toggle-todayspecial').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            var productId = this.dataset.productId;
            var isChecked = this.checked ? 1 : 0; // 1 for checked, 0 for unchecked

            // Send AJAX request to update the database immediately
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo base_url('admin/updateTodaysSpecial'); ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert('Today\'s Special updated successfully.');
                } else {
                    alert('Error updating today\'s special status');
                }
            };

            // Send the product ID and its new "Today's Special" status
            xhr.send('productId=' + productId + '&todayspecial=' + isChecked);
        });
    });

    // Handle search functionality
    document.getElementById('productSearch').addEventListener('keyup', function () {
        var searchValue = this.value.toLowerCase();
        var rows = document.querySelectorAll('#productsTable tbody tr');

        rows.forEach(function (row) {
            var productName = row.cells[1].textContent.toLowerCase();
            if (productName.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
