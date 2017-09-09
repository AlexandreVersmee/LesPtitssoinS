<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include 'includes/metas.php' ?>

    <title>Maquillage | Les P'tits Soins, Esthétique Valenciennes, esthéticienne à Valenciennes, esthétique </title>

    <?php include 'includes/styles.php' ?>
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

        <?php include 'includes/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-right">
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
                    <div class="large-12 columns">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section">
                                <div class="thumbnail">
                                    <img src="images/maquillage_les_ptitssoins_estheticienne.jpg" alt="Image d'un maquillage" />
                                </div>
                            </div>
                            <div class="media-object-section">
                                <p>Un rendez-vous important, une soirée, une sortie…<br/>
                                Offrez-vous un maquillage de jour ou de soirée qui vous correspondra et qui sera en harmonie
                                avec vos goûts, votre tenue et votre caractère.<br/>
                                Il vous apportera un teint lumineux, rayonnant et mettra en valeur votre bouche, yeux et
                                    pommettes.</p>
                                <p>Profitez de conseils personnalisés pour votre quotidien avec le cour de maquillage personnalisé en
                                    accord avec vos accessoires et couleurs pour un maquillage net et précis.</p>
                            </div>
                        </div>

                        <br>
                        <p>Voici les maquillages que je vous propose :</p>
                        <br>

                        <div class="row">
                            <div class="medium-11 medium-offset-1 columns">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="text-center">Maquillages</th>
                                        <th class="text-center">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Maquillage de jour</td>
                                            <td class="text-center">20€</td>
                                        </tr>
                                        <tr>
                                            <td>Maquillage de soir</td>
                                            <td class="text-center">30€</td>
                                        </tr>
                                        <tr>
                                            <td>Cour de maquillage</td>
                                            <td class="text-center">50€</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


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