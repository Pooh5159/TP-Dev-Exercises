<?php include_once("_include/arrayTeams.php"); ?>
<?php
$teamId = htmlspecialchars($_GET["idTeam"]);
// Sort tous les ids de chaque team dans un array
$teamIds = array_column($premierLeagueTeams['teams'], 'idTeam');
// Sors la key correspondant à l'idTeam
$teamKey = array_search($teamId, $teamIds);
$team = $premierLeagueTeams['teams'][$teamKey];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="_images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/804afe4962.js" crossorigin="anonymous"></script>
    <title><?= $team['strAlternate'] ?></title>
</head>

<body>

    <?php require_once("_include/header.php") ?>

    <div class="container">
        <img class="bannerDetail" src="<?= $team['strTeamBanner'] ?>" alt="<?= $team['strAlternate'] ?>" title="<?= $team['strAlternate'] ?>'s Banner">
        <div class="underBannerDetail">
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
            </a>
            <div class="teamDetail">
                <h1 class="h1Detail"><?= $team['strAlternate'] ?></h1>
                <img class="badgeDetail" src="<?= $team['strTeamBadge'] ?>" alt="<?= $team['strAlternate'] ?>'s Badge" title="<?= $team['strAlternate'] ?>'s Badge">
            </div>
            <div class="socialDetail">
                <a href="http://<?= $team['strWebsite'] ?>" target="_blank">
                    <i class="fa-solid fa-globe"></i>
                </a>
                <a href="http://<?= $team['strFacebook'] ?>" target="_blank">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>
                <a href="http://<?= $team['strTwitter'] ?>" target="_blank">
                    <i class="fa-brands fa-twitter-square"></i>
                </a>
                <a href="http://<?= $team['strInstagram'] ?>" target="_blank">
                    <i class="fa-brands fa-instagram-square"></i>
                </a>
                <a href="http://<?= $team['strYoutube'] ?>" target="_blank">
                    <i class="fa-brands fa-youtube-square"></i>
                </a>
                <?php if ($team['strRSS']) { ?>
                    <a href="http://<?= $team['strRSS'] ?>" target="_blank">
                        <i class="fa-solid fa-square-rss"></i>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <main class="mainDetail">

        <div class="main1Detail">
            <div class="cardDetail">
                <h2 class="h2Detail">History</h2>
                <p class="pDetail"><?= $team['strDescriptionEN'] ?></p>

                <div class="infoDetail">
                    <h2 class="h2InfoDetail">Quick informations</h2>
                    <h3 class="h3Detail">Formated year</h3>
                    <p class="pDetail"><?= $team['intFormedYear'] ?></p>
                    <hr>
                    <h3 class="h3Detail">Nickname</h3>
                    <p class="pDetail"><?= $team['strKeywords'] ?></p>
                    <hr>
                    <h3 class="h3Detail">Jersey team</h3>
                    <img class="jerseyDetail" src="<?= $team['strTeamJersey'] ?>" alt="<?= $team['strAlternate'] ?>'s Home Jersey" title="<?= $team['strAlternate'] ?>'s Home Jersey">
                </div>

            </div>

            <div class="cardDetail">
                <h2 class="h2Detail">Stadium</h2>
                <img src="<?= $team['strStadiumThumb'] ?>" alt="<?= $team['strAlternate'] ?>'s Stadium" title="<?= $team['strAlternate'] ?>'s Stadium">

                <div class="infoDetail">
                    <h2 class="h2InfoDetail">Quick information</h2>
                    <h3 class="h3Detail">Name</h3>
                    <p class="pDetail"><?= $team['strStadium'] ?></p>
                    <hr>
                    <h3 class="h3Detail">Capacity</h3>
                    <p class="pDetail"><?= $team['intStadiumCapacity'] ?></p>
                    <hr>
                    <h3 class="h3Detail">Location</h3>
                    <p class="pDetail"><?= $team['strStadiumLocation'] ?></p>
                </div>

                <p class="pDetail"><?= $team['strStadiumDescription'] ?></p>
            </div>

            <div class="cardTrophyDetail">
                <h2 class="h2Detail">Competition winner</h2>
                <?php
                $array_key = array_keys($team);
                foreach ($array_key as $array_key) {
                    if (str_contains($array_key, 'strLeague') && $team[$array_key]) { ?>
                        <div class="trophyDetail">
                            <p class="pDetail"><?= $team[$array_key] ?></p>
                        </div>
                <?php }
                } ?>
            </div>
        </div>

        <div class="main2Detail">
            <div class="cardGalleryDetail">
                <h2 class="h2Detail">Gallery</h2>
                <div class="galleryDetail">
                    <img id="myImg1" onclick="clickNext('myImg1')" src="<?= $team['strTeamBadge'] ?>" alt="<?= $team['strAlternate'] ?>'s Badge" title="<?= $team['strAlternate'] ?>'s Badge">
                    <img id="myImg2" onclick="clickNext('myImg2')" src="<?= $team['strTeamJersey'] ?>" alt="<?= $team['strAlternate'] ?>'s Home Jersey" title="<?= $team['strAlternate'] ?>'s Home Jersey">
                    <img id="myImg3" onclick="clickNext('myImg3')" src="<?= $team['strTeamLogo'] ?>" alt="<?= $team['strAlternate'] ?>'s Logo" title="<?= $team['strAlternate'] ?>'s Logo">
                    <img id="myImg4" onclick="clickNext('myImg4')" src="<?= $team['strTeamFanart1'] ?>" alt="<?= $team['strAlternate'] ?>'s Fanart 1" title="<?= $team['strAlternate'] ?>'s Fanart 1">
                    <img id="myImg5" onclick="clickNext('myImg5')" src="<?= $team['strTeamFanart2'] ?>" alt="<?= $team['strAlternate'] ?>'s Fanart 2" title="<?= $team['strAlternate'] ?>'s Fanart 2">
                    <img id="myImg6" onclick="clickNext('myImg6')" src="<?= $team['strTeamFanart3'] ?>" alt="<?= $team['strAlternate'] ?>'s Fanart 3" title="<?= $team['strAlternate'] ?>'s Fanart 3">
                    <img id="myImg7" onclick="clickNext('myImg7')" src="<?= $team['strTeamFanart4'] ?>" alt="<?= $team['strAlternate'] ?>'s Fanart 4" title="<?= $team['strAlternate'] ?>'s Fanart 4">
                    <img id="myImg8" onclick="clickNext('myImg8')" src="<?= $team['strTeamBanner'] ?>" alt="<?= $team['strAlternate'] ?>" title="<?= $team['strAlternate'] ?>'s Banner">
                </div>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>

    </main>

    <?php require_once("_include/footer.php") ?>
</body>

<script src="./_script/modal.js"></script>

</html>