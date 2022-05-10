let players = [11, 14, 15, 12, 10, 9, 11, 10, 14, 12, 17, 11, 11, 8, 11, 12, 14, 13, 15, 11, 10, 10, 11, 12, 13, 10, 13, 13, 14, 11, 10, 11, 12, 15, 11, 14, 12, 9, 16, 10, 9, 9, 11, 12, 13, 13];

getStat(players);


/*
  Retourne les statistiques d'un tableau
  Param : Tableau
*/
function getStat(data) {

    let countChild = 0; // moins de 11 ans
    let count11 = 0; // 11ans
    let count12 = 0; // 12ans
    let countOld = 0; // 13ans et plus

    for (let i = 0; i < data.length; i++) {
        if (data[i] < 11) {
            countChild++;
        } else if (data[i] == 11) {
            count11++;
        } else if (data[i] == 12) {
            count12++;
        } else {
            countOld++;
        }
    }

    let stat = [countChild, count11, count12, countOld];
    return stat;
}