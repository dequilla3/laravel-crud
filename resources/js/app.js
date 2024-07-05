import "./bootstrap";
import "./loading";

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
