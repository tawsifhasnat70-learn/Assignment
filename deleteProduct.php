<?php
require_once '../Models/ProductModel.php';

$id = $_GET['id'];
deleteProduct($id);

header("Location: ../Views/ViewProducts.php");
