<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $cat_name = $_POST['category_name'];
    $connection->query("INSERT INTO categories (category_name) VALUES ('$cat_name')");
}
?>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Add New Category</h5>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter category name" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</div>
