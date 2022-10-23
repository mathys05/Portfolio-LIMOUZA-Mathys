<?php include 'D:\UwAmp\www\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end--> 
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/photo.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour je suis <span>Mathys Limouza.</span>
                    Un étudiant en 3e année.
                </h1>
                <p>
                    Je suis un étudiant du Gaming Campus en 3e année.
                    Je travail actuellement sur un projet PHP et ce site sera la réalisation de celui-ci.
                </p>
                <div class="btn-con">
                    <a download="CV Mathys Limouza" href="img/CV LIMOUZA MATHYS.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>A propos <span>de moi</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information Personnel</h4>
                    <p>
                        L'apprentissage en projets me permet de développer
                        davantage d'autonomie en terme de travail et de m'adapter
                        chaque semaine à une nouvelle situation. <br /> <br />
                        Grâce à divers projets j'ai acquis des bases en informatique
                        sur des logiciels tels que suite Office, Photoshop, Illustrator,
                        Adobe première pro.
                    </p>
                    <div class="btn-con">
                        <a download="CV Mathys Limouza" href="img/CV LIMOUZA MATHYS.pdf" class="main-btn" type="application/octet-stream">
                            <span class="btn-text">Télécharger mon CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">60+</p>
                            <p class="small-text">Projet<br /> Complétés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3</p>
                            <p class="small-text">années  <br /> d'études</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1 an</p>
                            <p class="small-text">en entreprise <br /> </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">100+</p>
                            <p class="small-text">Professionels <br /> rencontrés</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">PHP</p>
                        <div class="progress-con">
                            <p class="prog-text">20%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Marketing</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Managment</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Communication</p>
                        <div class="progress-con">
                            <p class="prog-text">65%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">HTML</p>
                        <div class="progress-con">
                            <p class="prog-text">50%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Monetization</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon expérience</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>Étudiant<span> -  Gaming Campus</span></h5>
                    <p>
                        Etudiant depuis 3 ans
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - 1 mois</p>
                    <h5>Expert compatble<span> - Stage</span></h5>
                    <p>
                        Stage de 2 semaines au sein d'un cabinet d'expert compatble
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - 3 mois</p>
                    <h5>Manager esport<span> - stage</span></h5>
                    <p>
                        Stage de 3 mois, gestion d'équipes et de compétition
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2016 - 1 mois</p>
                    <h5>Cabinet d'architecte<span> - Stage</span></h5>
                    <p>
                        Stage d'observation de 1 semaines au sein d'un cabinet d'architecte
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - 3 mois</p>
                    <h5>Boulanger<span> - Interim</span></h5>
                    <p>
                        3 mois en CDD au sein d'une boulangerie Super U
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mes <span>Occupations</span><span class="bg-text">My Hobbies</span></h2>
            </div>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/football.jpg" alt="football">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/gaming.jpg" alt="setup">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/politique.jpeg" alt="politique">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/histoire.jpg" alt="historie">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/F1.jpg" alt="F1">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/blockchain.jpg" alt="blockchain">
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>Projets</span><span class="bg-text">My Works</span></h2>
                    <h3 class="port-text">
                        Ici quelques projets que j'ai réalisé
                    </h3>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/sonix.PNG" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet Sonix
                            </h4>
                            <p>
                                Aider l'entreprise à trouver des idées de marketing et de communication pour le lancement de leur produit. (groupe de 8)
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/nicolas.PNG" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet E-commerce
                            </h4>
                            <p>
                                Refonte du site Nicolas pour retravailler le E-Commerce de ce site. (groupe de 3)
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/litron.PNG" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet Gestion
                            </h4>
                            <p>
                                Création d'un bar avec plan de financement et trésorie a y+3. (groupe de 3)
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/vr.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet VR
                            </h4>
                            <p>
                                Analyse du jeu et des retours des joueurs pour comprendre le marché de la vr. (groupe de 3)
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/ovr.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet oVRdoze
                            </h4>
                            <p>
                                Recherche de solution pour aider une entreprise. (groupe de 6)
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/market.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Projet Groth marketing
                            </h4>
                            <p>
                                Mise en place de différents moyen pour fédérer une communauté. (groupe de 3)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contactez <span>moi</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contactez-moi ici</h4>
                        <p>
                           Si vous avez des questions n'hesitez pas à me contacter
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Localisation</span>
                                </div>
                                <p>
                                    : Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: mlimouza@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>: Gaming Campus, Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Numéro de tél.</span>
                                </div>
                                <p>
                                    <span>: 0752267067</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    <span>: Français, anglais, allemand</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/home" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/mathys05/Portfolio-LIMOUZA-Mathys" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>