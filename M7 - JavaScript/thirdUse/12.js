let players = [11, 14, 15, 12, 10, 9, 11, 10, 14, 12, 17, 11, 11, 8, 11, 12, 14, 13, 15, 11, 10, 10, 11, 12, 13, 10, 13, 13, 14, 11, 10, 11, 12, 15, 11, 4, 12, 9, 16, 10, 9, 9, 11, 12, 13, 13];

let countChild = 0; // moins de 11 ans
let count11 = 0; // 11 ans
let count12 = 0; // 12 ans
let countOld = 0; // 13 ans et plus

for (let i = 0; i < players.length; i++) {
    if (players[i] < 11) {
        countChild++; //On compte les joueurs < 11 ans
    } else if (players[i] == 11) {
        count11++;
    } else if (players[i] == 12) {
        count12++;
    } else {
        countOld++;
    }
}
console.log(countChild + " ont moins de 11 ans, " + count11 +
    " ont 11 ans, " + count12 + " ont 12 ans et "
    + countOld + " ont plus de 13 ans.");