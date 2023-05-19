<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8">
    <title>Eformation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        
        <div class="row border-top px-xl-5">
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
                            <a href="about.php" class="nav-item nav-link active">About</a>
                            <?php
                    if(isset($_SESSION['user_id']) != "") {
                    ?>
                    <a href="profile.php" class="nav-item nav-link" met>Profile</a>
                    <?php
                    }else{
                    ?>
                    <a href="" class="nav-item nav-link" met></a>
                    <?php
                    }
                    ?>
                            <a href="#categorie" class="nav-item nav-link navbar navbar-expand-lg navbar-light bg-light" > CATÉGORIE</a>

                        </div>
                        <?php
                        if(isset($_SESSION['user_id']) != "") {
                        ?>
                        Vous êtes connecté autant que <?php echo $_SESSION['user_name']; ?>👋
                        <?php
                                                }else{
                                                    ?>
                                                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="login.php">LOGIN / REGISTER</a>
                        <?php
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">          
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">  
                            <h1 class="display-3 text-white mb-md-4">Meilleure éducation avec Eformation</h1>
                            <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Commencer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Category Start -->
    <div class="container-fluid py-5" id="categorie">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Catégorie</h5>
                <h1>Explorez les principaux sujets</h1>
            </div>
            <div class="rows">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Web Design">
                            <h4 class="text-white font-weight-medium">Web Design</h4>                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Development">
                            <h4 class="text-white font-weight-medium">Development</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Game Design">
                            <h4 class="text-white font-weight-medium">Game Design</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Apps Design">
                            <h4 class="text-white font-weight-medium">Apps Design</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Marketing">
                            <h4 class="text-white font-weight-medium">Marketing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Research">
                            <h4 class="text-white font-weight-medium">Research</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-7.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=Content Writing">
                            <h4 class="text-white font-weight-medium">Content Writing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-8.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/COURS/filtred.php?search_query=SEO">
                            <h4 class="text-white font-weight-medium">SEO</h4>
                           
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<!-- Courses Start -->
<div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Les Formation</h5>
                        <h1>Nos cours populaires</h1>
            </div>
                    <div class="container-fluid py-5">
                                            <div class="container py-5">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <form method="GET" action="">
                <div class="form-outline">
                <input type="search" id="form1"  name="search_query" class="form-control" placeholder="Search..." aria-label="Search" />
                
</div>
  
</form><br><br>
</div>
</div>
                                            <div class="row">
                                            <?php
//inclure la page de connexion
include_once "config.php";

if(isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];
    // Prepare the SQL query with a WHERE clause to filter by subject/topic and add LIMIT and OFFSET clauses for pagination
    $query = "SELECT * FROM formation WHERE categorie LIKE :search_query";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':search_query', '%' . $search_query . '%', PDO::PARAM_STR);
  } else {
    // If no search query is set, retrieve all formations
    $query = "SELECT * FROM formation";
    $stmt = $conn->prepare($query);
  }

  $stmt->execute();
  $formations = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($formations as $row){

  ?>
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="rounded overflow-hidden mb-2">
            <img class="img-fluid" src="<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>" />
            <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                    <small class="m-0"><i class=""></i>Catégorie : <?php echo $row['categorie'];?></small>
                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i><?php echo $row['masse_horaire'];?>h</small>
                </div>
                <a class="h5" href="details.php?id=<?php echo $row['id_formation'];?>"><?php echo $row['sujet'];?></a>
                <div class="border-top mt-4 pt-4">
                    <div class="d-flex justify-content-between">
                        <small class="m-0"><i class="far fa-sticky-note text-primary mr-2"></i>Sesions</small>
                        <?php
                        if(isset($_SESSION['user_id']) != "") {
                        ?>
                        <a href="details.php?id=<?php echo $row['id_formation'];?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" met>Joindre</a>
<?php
                        }else{
                            ?>
                        <a href="login.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" met>Connectez-vous</a>
<?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</div>  
</div>
                                    </div>
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
    <style>
        .rows {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
    </style>
    <!-- Footer End -->