var numberToFind = 50;

var number = prompt("Veuillez rentrer un nombre");

if (number > numberToFind){
  alert("Trop grand");
} else if (number < numberToFind) {
  alert("Trop petit");
} else {
  alert ("Gagné !");
}