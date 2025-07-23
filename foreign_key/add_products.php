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

<form method="POST">
    <input type="text" name="product_name" placeholder="Product Name" required><br>
    <input type="number" name="price" step="0.01" placeholder="Price" required><br>

    <select name="category_id" required>
        <option value="">-- Select Category --</option>
        <?php while ($row = $categories->fetch_assoc()): ?>
            <option value="<?= $row['category_id'] ?>"><?= $row['category_name'] ?></option>
        <?php endwhile; ?>
    </select><br>

    <button type="submit" name="submit">Add Product</button>
</form>
