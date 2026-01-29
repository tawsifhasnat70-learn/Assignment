<?php
require_once '../Models/ProductModel.php';
$id = $_GET['id'];
$product = mysqli_fetch_assoc(getProductById($id));
?>

<form method="post" action="../Controllers/ProductController.php">
<input type="hidden" name="id" value="<?= $product['id'] ?>">

<fieldset style="width:300px">
<legend><b>EDIT PRODUCT</b></legend>

Name<br>
<input type="text" name="name" value="<?= $product['name'] ?>"><br><br>

Buying Price<br>
<input type="number" name="buying_price" value="<?= $product['buying_price'] ?>"><br><br>

Selling Price<br>
<input type="number" name="selling_price" value="<?= $product['selling_price'] ?>"><br><br>

<hr>
<input type="checkbox" name="display"
<?= $product['display']=='Yes'?'checked':'' ?>> Display
<hr>

<input type="submit" name="save" value="UPDATE">
</fieldset>
</form>
