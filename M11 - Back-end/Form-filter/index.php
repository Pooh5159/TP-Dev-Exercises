<?php
var_dump($_POST);

$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$phone = filter_var($_POST["phone"], FILTER_VALIDATE_REGEXP, [
  "options" => [
    "regexp" => "/[0-9\+\-]/"
  ]
]);
$postal_code = filter_var($_POST["postal_code"], FILTER_SANITIZE_NUMBER_INT);
$passOk = $_POST["password"] === $_POST["confirmPassword"];
var_dump($email);
var_dump($phone);
var_dump($passOk);
var_dump($postal_code);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <div class="form py-3">
    <form action="" method="POST">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col text-center mb-5">
            <h1 class="fw-bold text-danger">Formulaire d'inscription</h1>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-12 col-md-5">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nom" required />
              <label for="last_name">Prénom</label>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Prénom" required />
              <label for="first_name">Nom</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email" required />
              <label for="email">Adresse Email</label>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-12 col-md-5">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" required />
              <label for="phone">Téléphone</label>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <select name="status" id="status" class="form-control form-control-lg pt-2 pb-3" required>
              <option value="" disabled selected>Statut marital</option>
              <option value="celibataire">Célibataire</option>
              <option value="marie">Marié(e)</option>
              <option value="pacse">Pacsé(e)</option>
            </select>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-md-3 col-12">
            <label for="">Genre</label>
          </div>
          <div class="col-md-9 col-12 d-flex justify-content-between">
            <div class="ps-md-5">
              <input type="radio" name="gender" id="gender" value="masculin" checked />
              Masculin
            </div>
            <div class="ps-md-5">
              <input type="radio" name="gender" id="gender" value="feminin" />
              Féminin
            </div>
            <div class="ps-md-5">
              <input type="radio" name="gender" id="gender" value="autre" />
              Autre
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-between py-3">
          <div class="col-12 col-md-5">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required />
              <label for="password">Mot de passe</label>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirmer mot de passe" required />
              <label for="confirmPassword">Confirmer mot de passe</label>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-between py-1">
          <div class="col-12 col-md-3">
            <div class="form-floating mb-3">
              <input type="text" pattern="[0-9]{5}" class="form-control" name="postal_code" id="postal_code" placeholder="Code postal" required />
              <label for="postal_code">Code postal</label>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="city" id="city" placeholder="Ville" required />
              <label for="city">Ville</label>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-between py-3">
          <div class="col-12 col-md-6">
            <h4>Loisirs</h4>
            <div class="d-flex flex-wrap">
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="velo" id="VeloCB" />
                <label class="form-check-label" for="VeloCB"> Vélo </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="foot" id="FootCB" />
                <label class="form-check-label" for="FootCB"> Foot </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="canape" id="CanapeCB" />
                <label class="form-check-label" for="CanapeCB">
                  Canapé
                </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="barbecue" id="BarbecueCB" />
                <label class="form-check-label" for="BarbecueCB">
                  Barbecue
                </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="peche" id="pecheCB" />
                <label class="form-check-label" for="pecheCB"> Pêche </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="karate" id="karateCB" />
                <label class="form-check-label" for="karateCB">
                  Karaté
                </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="randonee" id="randoneeCB" />
                <label class="form-check-label" for="randoneeCB">
                  Randonnée
                </label>
              </div>
              <div class="form-check my-1" style="width: 50%">
                <input class="form-check-input" type="checkbox" name="loisirs[]" value="vaccine" id="vaccineCB" />
                <label class="form-check-label" for="vaccineCB">
                  Vacciné(e)
                </label>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 pt-3 pt-md-0">
            <div class="form-floating mb-3">
              <input type="date" class="form-control" name="dob" id="dob" placeholder="Date de naissance" required />
              <label for="dob">Date de naissance</label>
            </div>
            <div>
              <textarea name="other" class="form-control" id="other" rows="5" placeholder="Autres informations" required></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-between">
            <input type="reset" value="Réinitialiser" class="btn btn-lg btn-outline-danger px-5" />
            <input type="submit" value="Envoyer" class="btn btn-lg btn-success px-5" />
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>