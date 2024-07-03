import "./bootstrap";

let fieldName = document.getElementById("name");
if (fieldName) {
    fieldName.addEventListener("input", function () {
        this.value = this.value.toUpperCase();
    });
}

let msgBoxBtn = document.getElementById("msgBoxOkBtn");
if (msgBoxBtn) {
    msgBoxBtn.addEventListener("click", function () {
        document.getElementById("msgBox").className = "hidden";
    });
}

let btnDeleteProduct = document.getElementsByName("btnDeleteProduct");
btnDeleteProduct.forEach((element) => {
    if (element) {
        element.addEventListener("click", function () {
            console.log(element);
        });
    }
});
