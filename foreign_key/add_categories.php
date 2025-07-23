<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $cat_name = $_POST['category_name'];
    $connection->query("INSERT INTO categories (category_name) VALUES ('$cat_name')");
}
?>

<form method="POST">
    <input type="text" name="category_name" placeholder="Category Name" required>
    <button type="submit" name="submit">Add Category</button>
</form>
