function searchProduct() {
    let name = document.getElementById("search").value;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../Controllers/SearchProduct.php?name=" + name, true);
    xhr.send();

    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("productTable").innerHTML = this.responseText;
        }
    };
}
