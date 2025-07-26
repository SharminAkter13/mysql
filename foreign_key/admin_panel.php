<?php
include('connect.php');

// Add Category
if (isset($_POST['add_category'])) {
    $cat_name = $_POST['category_name'];
    $connection->query("INSERT INTO categories (category_name) VALUES ('$cat_name')");
}

// Add Product
if (isset($_POST['add_product'])) {
    $pname = $_POST['product_name'];
    $price = $_POST['price'];
    $cid = $_POST['category_id'];
    $connection->query("INSERT INTO products (product_name, price, category_id) VALUES ('$pname', '$price', '$cid')");
}

// Delete Category
if (isset($_GET['delete_category'])) {
    $del_id = $_GET['delete_category'];
    $connection->query("DELETE FROM categories WHERE id = $del_id");
}

// Fetch for dropdown and product list
$categories = $connection->query("SELECT * FROM categories");
$products = $connection->query("
    SELECT p.id, p.product_name, p.price, c.category_name 
    FROM products p 
    JOIN categories c ON p.category_id = c.id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">Welcome Store Admin Panel</h2>

    <div class="row g-4">
        <!-- Add Category -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Add Category</div>
                <div class="card-body">
                    <form method="POST">
                        <input type="text" name="category_name" class="form-control mb-2" placeholder="Category Name" required>
                        <button class="btn btn-primary" name="add_category">Add</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Add Product -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">Add Product</div>
                <div class="card-body">
                    <form method="POST">
                        <input type="text" name="product_name" class="form-control mb-2" placeholder="Product Name" required>
                        <input type="number" name="price" step="0.01" class="form-control mb-2" placeholder="Price" required>
                        <select name="category_id" class="form-select mb-2" required>
                            <option value="">-- Select Category --</option>
                            <?php
                            $cats = $connection->query("SELECT * FROM categories");
                            while ($row = $cats->fetch_assoc()):
                            ?>
                                <option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
                            <?php endwhile; ?>
                        </select>
                        <button class="btn btn-success" name="add_product">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Product List -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-dark text-white">Product List</div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                <tr>
                    <th>ID</th><th>Product</th><th>Price</th><th>Category</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = $products->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['category_name'] ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Category List with Delete Option -->
    <!-- <div class="card mt-4 shadow-sm">
        <div class="card-header bg-danger text-white">Categories (Delete to test CASCADE)</div>
        <div class="card-body">
            <ul class="list-group">
                <?php
                $cats = $connection->query("SELECT * FROM categories");
                while ($row = $cats->fetch_assoc()):
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $row['category_name'] ?>
                        <a href="?delete_category=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger"
                           onclick="return confirm('Delete this category? Products will also be deleted.')">
                            Delete
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div> -->
</div>
</body>
</html>
