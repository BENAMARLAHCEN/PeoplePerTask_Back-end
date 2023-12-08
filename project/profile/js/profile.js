var image_use = document.getElementById("image_use");
var img_input = document.getElementById("img_input");
var save = document.getElementById("save");
image_use.addEventListener("click", function() {
    img_input.click();
});

function change() {
    if (img_input.files && img_input.files[0]) {
        save.style.display = "block";
        var reader = new FileReader();

            reader.onload = function (e) {
                image_use.src = e.target.result;
            };

        reader.readAsDataURL(rrr.files[0]);
    }
}
