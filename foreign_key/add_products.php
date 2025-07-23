<?php
include('connect.php');

$categories = $connection->query("SELECT * FROM categories");

if (isset($_POST['submit'])) {
    $pname = $_POST['product_name'];
    $price = $_POST['price'];
    $cid = $_POST['category_id'];
    $connection->query("INSERT INTO products (product_name, price, category_id) VALUES ('$pname', '$price', '$cid')");
}
?>

<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Add New Product</h5>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter product name" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (৳)</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" placeholder="Enter price" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        <?php while ($row = $categories->fetch_assoc()): ?>
                            <option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-success">Add Product</button>
            </form>
        </div>
    </div>
</div>
