let loadingDiv = document.getElementById("loadingModal");
let elements = ["submit", "create", "delete", "edit"];

elements.forEach(function (el) {
    let element = document.getElementById(el);
    if (element) {
        element.addEventListener("click", function () {
            loadingDiv.className = "block";
        });
    }
});
