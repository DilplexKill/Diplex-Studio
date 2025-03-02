<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 
        1) Balise <title> dynamique (Améliore le SEO)
        2) Balise <meta name="description"> pour le résumé sur les moteurs de recherche
    -->
    <title>Diplex Studio</title>
    <meta name="description" content="plugin de jeu video" />

    <!-- (Optionnel) Balises Open Graph pour un meilleur partage sur les réseaux sociaux -->
    <meta property="og:title" content="Diplex Studio" />
    <meta property="og:description" content="devellopement d asset" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />


    <!-- CSS de Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

    

        <!-- Feuille de style personnalisée -->
    <link rel="stylesheet" href="./style.css" />

</head>
<body class="bodySection">
    <!-- ===========================
         Inclusion du header
         =========================== -->
    <?php include 'includes/header.php'; ?>
    
    <!-- ===========================
         Hero Section
         =========================== -->
    <section class="hero-section">
        <div class="container">
            <div class="row contentImgCN">
                <div class="col-md-12 coltext">
                    <h1>Diplex Studio</h1>
                    <p class="lead">
                        Présentation de plugin pour Unity 3D.
                    </p>
                </div>
            </div>
        </div>
    </section> 

    <!-- ===========================
         Présentation
         =========================== -->
    <section class="container-fluid py-5 presentation">
        <div class="row">
            <div class="col-md-12">
                <!-- Affichage de l'image principale depuis la BDD -->
                <img 
                    src="./Capture d’écran 2025-03-02 185417.png" 
                    class="img-fluid rounded imgIm" 
                    alt="Maquilleuse SFX - Portrait"
                />
                <br /><br /><br />
            </div>

            <div class="col-md-10 propos">
                <!-- Titre issu de la BDD -->
                <h2>A propos de moi</h2>

                <!-- Description issue de la BDD -->
                <p class="description">
                Passionné de développement et de jeux vidéo depuis plusieurs années, j'ai appris et travaillé de manière autodidacte ainsi qu'en suivant des formations professionnelles.
                Aujourd'hui, je suis fier de vous proposer des assets fonctionnels, rapides et performants pour Unity 3D.
                </p>
            </div>
        </div>
    </section>


    <!-- ===========================
     Vidéo YouTube
     =========================== -->
    <!-- ici je veux mettre une video de mon youtube -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <!-- Fenêtre vidéo YouTube stylisée -->
                <div class="youtube-window ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gfbNw1uOzrg?si=4moisanFQv4UcpJ7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- Bouton centré redirigeant vers la chaîne YouTube -->
                <div class="text-center mt-3">
                    <!-- Remplace "YOUR_CHANNEL_ID" par l'ID réel de ta chaîne YouTube -->
                    <a href="https://www.youtube.com/@diplextutounity3d35" target="_blank" rel="noopener noreferrer" class="btn youtube-btn">
                        Visitez ma chaîne YouTube
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- fin de la section vidéo -->
    <!-- ===========================
         Portfolio Section
         =========================== -->
    <section class="py-5 portefolio">
        <div class="container text-center">
            <h2>Mes Plugings</h2>
            <p class="lead">Découvrez les plugings et les extensions</p>

            <div class="row">           
                <div class="col-md-4">
                    <!-- Affichage des 3 dernières images -->
                    <a href="" target="_blank" rel="noopener noreferrer">
                    <img
                        src="./QuestSystemImage.jpg"
                        class="img-fluid rounded"
                        alt="Pluging QuestSystem"
                    />
                    </a>
                </div>
                <div class="col-md-4">
                    <!-- Affichage des 3 dernières images -->
                    <a href="" target="_blank" rel="noopener noreferrer">
                    <img
                        src="./image inventory System.jpg"
                        class="img-fluid rounded"
                        alt="Extension Inventory System"
                    />
                    </a>
                </div>              
                </div>
        </div>
    </section>

    <!-- ===========================
         Inclusion du footer
         =========================== -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS de Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Mon Site</title>
</head>
<body>
    <h1>Bienvenue sur mon site Unity</h1>
    <p>Ceci est une page simple pour Unity Publisher.</p>
</body>
</html>
