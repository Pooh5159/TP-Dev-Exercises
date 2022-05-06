function change_color () {
    let color = document.getElementById("colorText").value;
    document.body.style.background = color;
}

let my_button = document.getElementById("my_button");
my_button.addEventListener("click", change_color);



document.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        let color = document.getElementById("colorText").value;
        document.body.style.background = color;
    }
});