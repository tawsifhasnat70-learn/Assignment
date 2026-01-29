<!DOCTYPE html>
<html>
<body>

<form method="post" action="../Controllers/ProductController.php">
<fieldset style="width:300px">
<legend><b>ADD PRODUCT</b></legend>

Name<br>
<input type="text" name="name"><br><br>

Buying Price<br>
<input type="number" name="buying_price"><br><br>

Selling Price<br>
<input type="number" name="selling_price"><br><br>

<hr>
<input type="checkbox" name="display"> Display
<hr>

<input type="submit" name="save" value="SAVE">
</fieldset>
</form>

</body>
</html>
