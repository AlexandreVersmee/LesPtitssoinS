<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include 'includes/metas.php' ?>

    <title>Accueil | Les P'tits Soins, Esthétique à domicile Valenciennes,
        esthéticienne à domcile Valenciennes, esthétique à domicile</title>

    <?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/index.css">
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
                    <div class="large-12 columns slider-block">
                        <div class="orbit" data-orbit>
                            <ul class="orbit-container">

                                <li class="orbit-slide is-active">
                                    <img src="https://placehold.it/2000x450&amp;text=1st">
                                </li>
                                <li class="orbit-slide" >
                                    <img src="https://placehold.it/2000x450&amp;text=2nd">
                                </li>
                                <li class="orbit-slide">
                                    <img src="https://placehold.it/2000x450&amp;text=3nd">
                                </li>
                                <li class="orbit-slide">
                                    <img src="https://placehold.it/2000x450&amp;text=4nd">
                                </li>

                                <button class="orbit-previous" aria-label="previous" tabindex="0"><span class="show-for-sr">Previous Slide</span>◀</button>
                                <button class="orbit-next" aria-label="next" tabindex="0"><span class="show-for-sr">Next Slide</span>▶</button>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns text-center presentation">
                        <p>Bonjour, je suis Christel Esthéticienne à domicile à Valenciennes pour particuliers et
                            professionnels.</p>
                        <p>Je vous propose des soins de beauté et d'esthétique à domicile, pour une clientèle
                            exclusivement féminine.</p>
                        <p>Je me déplace dans les alentours de Valenciennes à votre domicile, sur votre lieu de travail
                            ou votre résidence privée sur rendez-vous.</p>
                        <p>Je vous laisse découvrir la gamme de soins que je propose à travers les différentes rubriques
                            de mon site.</p>
                        <p>Pour plus d'informations, je reste à votre entière disposition, pour me contacter rendez-vous
                            dans la rubrique "Contact" qui vous fournira toutes les informations nécessaires.</p>
                        <p>Bonne visite et à très bientôt.</p>

                        Christel votre Esthéticienne
                    </div>
                </div>
            </main>

            <?php include 'includes/footer.php' ?>
        </div>
    </div>
</div>
<script></script>

<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

</body>
</html>