<?php
require_once '../Models/productModel.php';
$result = getDisplayedProducts();
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

<fieldset style="width:500px">
<legend><b>SEARCH</b></legend>
<input type="text" id="search" onkeyup="searchProduct()">
</fieldset>

<br>

<fieldset style="width:500px">
<legend><b>DISPLAY</b></legend>

<div id="productTable">
<table border="1" width="100%">
<tr>
    <th>NAME</th>
    <th>PROFIT</th>
    <th>ACTION</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result))
{
    $profit = $row['selling_price'] - $row['buying_price'];
?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $profit ?></td>
    <td>
        <a href="EditProduct.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="../Controllers/DeleteProduct.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</fieldset>


<script src="../Assets/product.js"></script>


</body>
</html>
