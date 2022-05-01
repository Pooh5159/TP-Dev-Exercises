<?php require_once("_include/arrayTeams.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Premier League</title>
</head>
<body>
    <?php require_once("_include/header.php") ?>

    <main>
        <h1>All clubs</h1>
        <div class="container">
            <?php foreach ($premierLeagueTeams["teams"] as $team) { ?>
                <div class="card">
                    <div class="team">
                        <h2><?= $team['strTeam']?></h2>
                        <img class="badge" src="<?= $team['strTeamBadge'] ?>" alt="<?= $team['strAlternate'] ?>" title="<?= $team['strAlternate'] ?> Badge">
                    </div>

                    <p><?= substr($team['strDescriptionEN'], 0, 350) . '...' ?><a href="details.php">Read more</a></p>

                    <p class="bold">Formed year : <?= $team['intFormedYear']?></p>

                    <h3>Team Jersey</h3>
                    <img class="jersey" src="<?= $team['strTeamJersey']?>" alt="<?= $team['strAlternate']?>'s Home Jersey" title="<?= $team['strAlternate']?>'s Home Jersey">

                    <h3>Team Stadium</h3>
                    <img class="stadium" src="<?= $team[ 'strStadiumThumb']?>" alt="<?= $team['strStadium']?>" title="<?= $team['strStadium']?>">
                    <p class="bold"><?= $team['strStadium']?></p>
                </div>
            <?php } ?>
        </div>    
    </main>



    <?php require_once("_include/footer.php") ?>
</body>
</html>