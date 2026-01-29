<?php
require_once '../Models/ProductModel.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buy = $_POST['buying_price'];
    $sell = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    insertProduct($name, $buy, $sell, $display);
    header("Location: ../Views/ViewProducts.php");
}
