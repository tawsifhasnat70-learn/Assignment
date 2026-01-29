<?php
require_once "../Models/ProductModel.php";

$model = new ProductModel();

if (isset($_GET['query'])) {
    $result = $model->searchProduct($_GET['query']);

    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }

    echo "</table>";
}
?>
