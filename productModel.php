<?php
require_once("dbConnection.php");

function insertProduct($name, $buy, $sell, $display)
{
    global $conn;
    $sql = "INSERT INTO products VALUES('', '$name', '$buy', '$sell', '$display')";
    return mysqli_query($conn, $sql);
}

function getDisplayedProducts()
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM products WHERE display='Yes'");
}

function getProductById($id)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
}

function updateProduct($id, $name, $buy, $sell, $display)
{
    global $conn;
    $sql = "UPDATE products 
            SET name='$name',
            buying_price='$buy',
            selling_price='$sell',
            display='$display'
            WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteProduct($id)
{
    global $conn;
    return mysqli_query($conn, "DELETE FROM products WHERE id=$id");
}

function searchProduct($name)
{
  global $conn;
  return mysqli_query($conn,"SELECT * FROM products WHERE name LIKE '%$name%' AND display='Yes'");
}
