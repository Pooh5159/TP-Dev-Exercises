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

    <main class="mainIndex">
        <h1 class="h1Index">All clubs</h1>
        <div class="container">
            <?php foreach ($premierLeagueTeams["teams"] as $team) { ?>
                <?php $teamId = $team['idTeam'] ?>
                <div class="cardCard">
                    <div class="teamCard">
                        <h2 class="h2Card"><?= $team['strTeam']?></h2>
                        <img class="badgeCard" src="<?= $team['strTeamBadge'] ?>" alt="<?= $team['strAlternate'] ?>'s Badge" title="<?= $team['strAlternate'] ?>'s Badge">
                    </div>

                    <p class="pCard"><?= substr($team['strDescriptionEN'], 0, 350) . '...' ?><a class="aCard" href="detail.php?idTeam=<?= $teamId ?>">Read more</a></p>

                    <p class="boldCard pCard">Formed year : <?= $team['intFormedYear']?></p>

                    <h3 class="h3Card">Team Jersey</h3>
                    <img class="jerseyCard" src="<?= $team['strTeamJersey']?>" alt="<?= $team['strAlternate']?>'s Home Jersey" title="<?= $team['strAlternate']?>'s Home Jersey">

                    <h3 class="h3Card">Team Stadium</h3>
                    <img class="stadiumCard" src="<?= $team['strStadiumThumb']?>" alt="<?= $team['strStadium']?>'s Stadium" title="<?= $team['strStadium']?>'s Stadium">
                    <p class="boldCard pCard"><?= $team['strStadium']?></p>
                </div>
            <?php } ?>
        </div>    
    </main>

    <?php require_once("_include/footer.php") ?>
    
</body>
</html>