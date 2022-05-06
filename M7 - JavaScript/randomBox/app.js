// Generate randomly 1 to 10 boxes
let element = document.getElementById("body");
// Or document.body
let random = Math.floor(Math.random()*10 + 1);
// Or Math.random () * (max - min) + min

// Each box will have its number
for (i = 1; i <= random; i++) {
    element.insertAdjacentHTML('beforeend', `<div class="box"> ${i}\ </div>`);
};

// Choose randomly a box and give it a color
let boxesArray = document.getElementsByClassName('box');
let randomBoxes = boxesArray[Math.floor(Math.random()*boxesArray.length)];
randomBoxes.style = "background-color : lightgreen; color : darkgreen; box-shadow: inset 5px 5px 10px rgb(63, 63, 63);";

// Auto refresh
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(2000);

// OR
// setTimeout(function () {
//     location.reload();
//   }, 1500);