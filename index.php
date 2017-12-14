<?php
$liste_logements [0] = [
    "titre" => "Gare sud",
    "prix" => 145000,
    "image" => "property-01.jpg",
    "date_creation" => new DateTime("2017-06-12"),
    "type" => "Appartement",
    "taille" => 320,
    "nb_chambres" => 2,
];

$liste_logements[1] = [
    "titre" => "Brequigny",
    "prix" => 220000,
    "image" => "property-02.jpg",
    "date_creation" => new DateTime("2017-07-8"),
    "type" => "Maison",
    "taille" => 390,
    "nb_chambres" => 3,
];


$liste_logements[2] = [
    "titre" => "Republique",
    "prix" => 420000,
    "image" => "property-03.jpg",
    "date_creation" => new DateTime("2017-09-10"),
    "type" => "Maison",
    "taille" => 220,
    "nb_chambres" => 1,
];

$liste_logements[3] = [
    "titre" => "Charles de Gaulle",
    "prix" => 300000,
    "image" => "property-04.jpg",
    "date_creation" => new DateTime("2017-10-12"),
    "type" => "Appartement",
    "taille" => 120,
    "nb_chambres" => 2,
];


$liste_logements[4] = [
    "titre" => "Saint Martin",
    "prix" => 150000,
    "image" => "property-05.jpg",
    "date_creation" => new DateTime("2017-04-04"),
    "type" => "Appartement",
    "taille" => 320,
    "nb_chambres" => 3,
];





?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Lojeris</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header class="site-header">
            <div class="cta-header">
                <div class="container">
                    <ul class="cta-contact inline-list">
                        <li>Téléphone : <a href="tel:0123456789">0123456789</a></li>
                        <li>Email : <a href="mailto:contact@lojeris.fr">contact@lojeris.fr</a></li>
                    </ul>
                    <div class="cta-social">
                        <ul class="inline-list">
                            <li>
                                <a href="http://www.facebook.com">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.twitter.com">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container main-header">
                <a href="index.html" class="logo">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <nav class="main-nav">
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Notre Agence</a></li>
                        <li><a href="#">Biens Immobiliers</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>

            <header class="home-banner">
                <h1>Bienvenue chez <strong>Lojeris</strong></h1>
                <p>Votre partenaire de confiance en immobilier</p>
            </header>

            <section class="container">
                <h2>Nos dernières offres</h2>
                <div class="properties">

                    <?php foreach ($liste_logements as $logement) : ?>

                    <article class="property">
                        <a href="#">
                            <img src="images/<?php echo $logement ["image"]; ?>" alt="<?php echo $logement["titre"]; ?>">
                            <footer class="overlay">
                                <div class="info">
                                    <div class="tag <?php echo ($logement["prix"] < 200000) ? "reduc" : ""; ?>">
                                        <?php echo $logement ["prix"]; ?>€</div>
                                    <h3><?php echo $logement["titre"] ?></h3>
                                </div>
                                <div class="more-info">
                                    <div class="property-info">
                                        <i class="fa fa-calendar"></i>
                                        <?php echo $logement["date_creation"]->format("d/m/Y"); ?>
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-tag"></i>
                                        <?php echo $logement ["prix"]; ?>
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-expand"></i>
                                        <?php echo $logement["taille"]; ?>m2
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-bed"></i>
                                        <?php echo $logement["nb_chambres"]; ?>
                                    </div>
                                </div>
                            </footer>
                        </a>
                    </article>
                    <?php endforeach; ?>

                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                Copyright © 2013 Lojeris
            </div>
        </footer>

    </body>
</html>