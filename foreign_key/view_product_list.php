<?php
include('connect.php');

// Fetch product list with JOIN
$result = $connection->query("
    SELECT p.product_id, p.product_name, p.price, c.category_name
    FROM products p
    JOIN categories c ON p.category_id = c.category_id
");
?>

<!-- Bootstrap 5 & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Product List</h5>
            <input type="text" id="searchInput" class="form-control w-50" placeholder="Search by product or category">
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-bordered mb-0" id="productTable">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price (৳)</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['product_id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['category_name'] ?></td>
                            <td>
                                <a href="edit_product.php?id=<?= $row['product_id'] ?>" class="text-primary me-2" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="delete_product.php?id=<?= $row['product_id'] ?>" class="text-danger" title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this product?');">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Filter Script -->
<script>
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('productTable').getElementsByTagName('tbody')[0];

    searchInput.addEventListener('keyup', function () {
        const filter = searchInput.value.toLowerCase();
        const rows = table.getElementsByTagName('tr');

        for (let row of rows) {
            const product = row.cells[1].textContent.toLowerCase();
            const category = row.cells[3].textContent.toLowerCase();
            row.style.display = (product.includes(filter) || category.includes(filter)) ? '' : 'none';
        }
    });
</script>
