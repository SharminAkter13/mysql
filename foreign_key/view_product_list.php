<?php
include('connect.php');

$result = $connection->query("
    SELECT p.product_id, p.product_name, p.price, c.category_name
    FROM products p
    JOIN categories c ON p.category_id = c.category_id
");
?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Product</th><th>Price</th><th>Category</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['product_id'] ?></td>
        <td><?= $row['product_name'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['category_name'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
