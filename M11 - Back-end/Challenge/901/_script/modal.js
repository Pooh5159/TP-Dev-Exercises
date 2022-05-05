// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("#myImg");
var modalImg = document.getElementById("img");

var captionText = document.getElementById("caption");

function clickNext(id) {
    modal.style.display = "block";
    modalImg.src = document.getElementById(id).src;
    captionText.innerHTML = document.getElementById(id).alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}


// Status boolean used to determine if the modal zoom in animation is finished
// Initialized to false
let modalZoomedIn = false;

// Add an eventListener on the whole document to handle click events
document.addEventListener("click", function (e) {

    // Find the closest element that matches the CSS selector "modal-content"
    // If our example if we click the modal image we have "<img id="img" class="modal-content" src="https://www.thesportsdb.…sey/fmwt4p1599922694.png">" in the console"
    const clickedElement = e.target.closest(".modal-content");

    // If not clickedElement means we clicked on something other than the image
    // We also need to make sure the modal zoom in animation is over
    // If modal animation is done and user clicks outside of the image in the modal
    if (modalZoomedIn && !clickedElement) {
        // We close the modal and reset the boolean
        modal.style.display = "none";
        modalZoomedIn = false;

    }

});

// This event listener will be triggered when captionText zoom in animation is completed
captionText.addEventListener("animationend", () => {
    modalZoomedIn = true;
})