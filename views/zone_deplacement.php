<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Les P'tits Soins, Esthétique à domicile Valenciennes,
        esthéticienne à domcile Valenciennes, esthétique à domicile à Valenciennes dans le Nord</title>

    <!-- Assets -->
    <link rel="stylesheet" href="../assets/foundation/css/foundation.css">
    <link rel="stylesheet" href="../assets/foundation/css/app.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/css/default.css">
    <link rel="stylesheet" href="../styles/css/off-canvas.css">
    <link rel="stylesheet" href="../styles/css/header.css">
    <link rel="stylesheet" href="../styles/css/footer.css">

    <link rel="stylesheet" href="../styles/css/zone_deplacement.css">
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

        <?php include 'includes/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-left">
                    <button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false"
                            aria-controls="offCanvas">
                        <i class="fa fa-navicon title-bar__icon"></i>
                    </button>
                </div>
            </div>

            <?php include 'includes/header.php' ?>

            <?php include 'includes/contactInformations.php' ?>

            <!-- MAIN -->
            <main>
                <div class="row">
                    <div class="small-12 columns">
                        <input id="pac-input" class="controls has-tip bottom" type="text"
                               title="Entrez votre ville pour savoir si vous êtes dans la zone de déplacement"
                               data-tooltip aria-haspopup="true" data-disable-hover="false"
                               placeholder="Rechercher une ville ...">

                        <div id="map"></div>
                    </div>
                </div>
            </main>

            <?php include 'includes/footer.php' ?>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

<script src="../scripts/google_map_zone_deplacement.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUa7nbQoszbkns9Zle_s1iHSXcbAVj5JY&libraries=places&callback=initAutocomplete"></script>

</body>
</html>