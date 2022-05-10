function isMajeur(age) {
    if (age > 18) {
        return "Vous êtes majeur";
    } else if (age < 18) {
        return "Vous êtes mineur";
    } else {
        return "Vous avez 18 ans";
    }
}

isMajeur(17);