<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "config.php";
?>
<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>

<!--  -->



        <title>Eformation</title>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

        <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>



    <body>
        

            <div class="sidebar close">
                <ul class="nav-links">
                <li>
                    <a href="profile.php">
                    <i class='bx bx-user' ></i>
                    <span class="link_name">Edit Profile</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a  class="link_name" >Profile</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="My_registered_courses.php">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Formations passées</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Formations passées</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="My_registered_courses_newest.php">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Formations en cours ou à venir</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">formations en cours ou à venir</a></li>
                    </ul>
                </li>
                <li>
                <div class="profile-details">
                <div class="profile-content">
                </div>
                <a href="/COURS//login.php?logout=true">
                <div class="name-job">
                    <div class="profile_name">Logout</div>
                </div>
                <i class='bx bx-log-out' ></i>
</a>
                </div>
            </li>
            </ul>
            </div>
            <section class="home-section">
                <div class="col-lg-3">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0"><span class="text-primary">E</span>formation</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                            
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <!-- <a href="course.html" class="nav-item nav-link">Courses</a> -->
                            </div>
                            <!-- <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="login.html">LOGIN / REGISTER</a> -->
                        </div>
                    </nav>
                </div>
                <div class="home-content">
                <i class='bx bx-menu' ></i>
                </div>
                    
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                    <div class="col-md-12 ">
                    <div class="invalid" ><?php if (isset($msg)) {echo $msg ;}?></div>
                </div>
</div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="p-3 py-5">
                            <?php
$stmt = $conn->prepare("SELECT formation.id_formation, formation.sujet, formation.categorie, formation.masse_horaire, formation.description, formation.image, session.id_session, session.date_debut, session.date_fin, inscription.resultat FROM inscription JOIN session ON inscription.id_session = session.id_session JOIN formation ON session.id_formation = formation.id_formation WHERE inscription.id_apprenant = :id_apprenant  AND session.date_fin <= DATE(NOW())");      
$stmt->bindParam(':id_apprenant', $_SESSION['user_id']);
$stmt->execute();
$enrollments = $stmt->fetchAll(PDO::FETCH_ASSOC);// Execute the statement

if (count($enrollments) > 0):
    foreach ($enrollments as $enrollment): ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow" style="border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3); transition: all 0.3s ease;">
                <img class="card-img-top w-100 h-75" src="<?php echo $enrollment['image']; ?>" alt="<?php echo $formation['sujet']; ?>" style="height: 200px;">
                <div class="card-body">
                    <a href="details.php?id=<?php echo $enrollment['id_formation']; ?>">
                        <h4 class="card-title"><?php echo $enrollment['sujet']; ?></h4>
                        <p class="text-muted">Date debut : <?php echo $enrollment['date_debut']; ?> </p>
                        <p class="text-muted">Date fin : <?php echo $enrollment['date_fin']; ?> </p> <br>
                        <p class="card-text"><?php echo $enrollment['description']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-muted"><?php echo $enrollment['categorie']; ?></p> <br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach;
else: ?>
    <div class="alert alert-warning" role="alert">
    Vous n'êtes inscrit à aucune session pour cette information.
    </div>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><br>
            <style>
                /* .row{ margin-bottom: 50px;} */
                .col-md-5 {background-color: #f2f1f8; border-radius: 20px;max-width: 500px;margin: auto;}
                .form-control:focus{box-shadow: none;border-color: #FF6600}
                .profile-button{background: rgb(235, 106, 51);box-shadow: none;border: none}
                .profile-button:hover{background: #FF6600}
                .profile-button:focus{background: #FF6600;box-shadow: none}
                .profile-button:active{background: #FF6600;box-shadow: none}
                .back:hover{color: #FF6600;cursor: pointer}
                .labels{font-size: 11px}
                .add-experience:hover{background: #FF6600;color: #dabda9;cursor: pointer;border: solid 1px #FF6600}
            </style>
            </section>
            

            <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
            </script>
            </body>
            <style>/* Google Fonts Import Link */
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
                }
                .sidebar{
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 260px;
                background: #11101d;
                z-index: 100;
                transition: all 0.5s ease;
                }
                .sidebar.close{
                width: 78px;
                }
                .sidebar .logo-details{
                height: 60px;
                width: 100%;
                display: flex;
                align-items: center;
                }

                .sidebar.close .logo-details .logo_name{
                transition-delay: 0s;
                opacity: 0;
                pointer-events: none;
                }
                .sidebar .nav-links{
                height: 100%;
                padding: 30px 0 150px 0;
                overflow: auto;
                background-color: #ff6600;
                }
                .sidebar.close .nav-links{
                overflow: visible;
                }
                .sidebar .nav-links::-webkit-scrollbar{
                display: none;
                }
                .sidebar .nav-links li{
                position: relative;
                list-style: none;
                transition: all 0.4s ease;
                }
                .sidebar .nav-links li:hover{
                background: #1d1b31;
                }
                .sidebar .nav-links li .iocn-link{
                display: flex;
                align-items: center;
                justify-content: space-between;
                }
                .sidebar.close .nav-links li .iocn-link{
                display: block
                }
                .sidebar .nav-links li i{
                height: 50px;
                min-width: 78px;
                text-align: center;
                line-height: 50px;
                color: #fff;
                font-size: 20px;
                cursor: pointer;
                transition: all 0.3s ease;
                }
                .sidebar .nav-links li.showMenu i.arrow{
                transform: rotate(-180deg);
                }
                .sidebar.close .nav-links i.arrow{
                display: none;
                }
                .sidebar .nav-links li a{
                display: flex;
                align-items: center;
                text-decoration: none;
                }
                .sidebar .nav-links li a .link_name{
                font-size: 18px;
                font-weight: 400;
                color: #fff;
                transition: all 0.4s ease;
                }
                .sidebar.close .nav-links li a .link_name{
                opacity: 0;
                pointer-events: none;
                }
                .sidebar .nav-links li .sub-menu{
                padding: 6px 6px 14px 80px;
                margin-top: -10px;
                background: #1d1b31;
                display: none;
                }
                .sidebar .nav-links li.showMenu .sub-menu{
                display: block;
                }
                .sidebar .nav-links li .sub-menu a{
                color: #fff;
                font-size: 15px;
                padding: 5px 0;
                white-space: nowrap;
                opacity: 0.6;
                transition: all 0.3s ease;
                }
                .sidebar .nav-links li .sub-menu a:hover{
                opacity: 1;
                }
                .sidebar.close .nav-links li .sub-menu{
                position: absolute;
                left: 100%;
                top: -10px;
                margin-top: 0;
                padding: 10px 20px;
                border-radius: 0 6px 6px 0;
                opacity: 0;
                display: block;
                pointer-events: none;
                transition: 0s;
                }
                .sidebar.close .nav-links li:hover .sub-menu{
                top: 0;
                opacity: 1;
                pointer-events: auto;
                transition: all 0.4s ease;
                }
                .sidebar .nav-links li .sub-menu .link_name{
                display: none;
                }
                .sidebar.close .nav-links li .sub-menu .link_name{
                font-size: 18px;
                opacity: 1;
                display: block;
                }
                .sidebar .nav-links li .sub-menu.blank{
                opacity: 1;
                pointer-events: auto;
                padding: 3px 20px 6px 16px;
                opacity: 0;
                pointer-events: none;
                /* background-color: #11101d; */
                }
                .sidebar .nav-links li:hover .sub-menu.blank{
                top: 50%;
                transform: translateY(-50%);
                }
                
                .sidebar .profile-details{
                position: fixed;
                bottom: 0;
                width: 260px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #1d1b31;
                padding: 12px 0;
                transition: all 0.5s ease;
                }
                .sidebar.close .profile-details{
                background: none;
                }
                .sidebar.close .profile-details{
                width: 78px;
                }
                .sidebar .profile-details .profile-content{
                display: flex;
                align-items: center;
                }
                .sidebar .profile-details img{
                height: 52px;
                width: 52px;
                object-fit: cover;
                border-radius: 16px;
                margin: 0 14px 0 12px;
                background: #1d1b31;
                transition: all 0.5s ease;
                }
                .sidebar.close .profile-details img{
                padding: 10px;
                }
                .sidebar .profile-details .profile_name,
                .sidebar .profile-details .job{
                color: #fff;
                font-size: 18px;
                font-weight: 500;
                white-space: nowrap;
                }
                .sidebar.close .profile-details i,
                .sidebar.close .profile-details .profile_name,
                .sidebar.close .profile-details .job{
                display: none;
                }
                .sidebar .profile-details .job{
                font-size: 12px;
                }
                .home-section{
                position: relative;
                background: #ffffff;
                left: 260px;
                width: calc(100% - 260px);
                transition: all 0.5s ease;
                }
                .sidebar.close ~ .home-section{
                left: 78px;
                width: calc(100% - 78px);
                }
                .home-section .home-content{
                height: 60px;
                display: flex;
                align-items: center;
                }
                .home-section .home-content .bx-menu,
                .home-section .home-content .text{
                color: #11101d;
                font-size: 35px;
                }
                .home-section .home-content .bx-menu{
                margin: 0 15px;
                cursor: pointer;
                }
                .home-section .home-content .text{
                font-size: 26px;
                font-weight: 600;
                }
                @media (max-width: 420px) {
                .sidebar.close .nav-links li .sub-menu{
                    display: none;
                }
                }
                </style>
                <style>.btn-primary {
                    color: #fff;
                    background-color: #FF6600;
                    border-color: #FF6600;
                }
                
                .btn-primary:hover {
                    color: #fff;
                    background-color: #d95700;
                    border-color: #cc5200;
                }
                
                .btn-primary:focus, .btn-primary.focus {
                    color: #fff;
                    background-color: #d95700;
                    border-color: #cc5200;
                    box-shadow: 0 0 0 0.2rem rgba(255, 125, 38, 0.5);
                }
                
                .btn-primary.disabled, .btn-primary:disabled {
                    color: #fff;
                    background-color: #FF6600;
                    border-color: #FF6600;
                    }
                    
                    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
                    .show > .btn-primary.dropdown-toggle {
                        color: #fff;
                        background-color: #cc5200;
                        border-color: #bf4d00;
                    }
                    
                    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
                    .show > .btn-primary.dropdown-toggle:focus {
                        box-shadow: 0 0 0 0.2rem rgba(255, 125, 38, 0.5);
                    }
                    a:hover {
                    color: #b34700;
                    text-decoration: underline;
                    }

                    a:not([href]):not([class]) {
                    color: inherit;
                    text-decoration: none;
                    }

                    a:not([href]):not([class]):hover {
                    color: inherit;
                    text-decoration: none;
                    }
                    a {
                    color: #FF6600;
                    text-decoration: none;
                    background-color: transparent;
                    }
                    .navbar-light .navbar-nav .nav-link:hover,
                    .navbar-light .navbar-nav .nav-link.active {
                    color: #FF6600;
                    }

                    .text-white {
                    color: #fff !important;
                    }

                    .text-primary {
                    color: #FF6600 !important;
                    }
                </style>
                    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jirari 01 RUE 23 NR 19 TANGER </p>
                        <p><i class="fa fa-phone-alt mr-2"></i>0698926631</p>
                        <p><i class="fa fa-envelope mr-2"></i>jebbari.mouad.solicode@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Nous sommes ravis de vous présenter nos nouvelles interfaces front office pour la gestion de votre centre de formation. Notre plateforme sur mesure est conçue pour offrir une expérience d'apprentissage intuitive et attrayante pour vos apprenants, tout en simplifiant la gestion de votre centre.</p><br>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Votre adresse e-mail">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Eformation</a>. Tous les droits sont réservés. Conçu par <a href="https://htmlcodex.com">MOUAD JEBBARI</a>
                </p>
            </div>
            
        </div>
    </div>
    <!-- Footer End -->
    </body>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> 
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    </html>
