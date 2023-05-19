<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  include "config.php";

  
if(isset($_SESSION['user_id'])=="") {
	header("Location: index.php");
	}

	



  $id = $_GET['id'];
  $query = $conn->prepare('SELECT * FROM formation WHERE id_formation = :id');
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  $formation = $query->fetch(PDO::FETCH_ASSOC);

  $query = $conn->prepare('SELECT * FROM `session` WHERE id_formation = :id');
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  $sessions = $query->fetchAll(PDO::FETCH_ASSOC);

 







?>



<!DOCTYPE html>
<html lang="en">

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
                            <!-- <a href="edit.html" class="nav-item nav-link">Edit Profile</a> -->
                            <!-- <a href="single.html" class="nav-item nav-link">Courses</a> -->
                            <a href="profile.php" class="nav-item nav-link">Profile</a>
                        </div>
                        <?php
                        if(isset($_SESSION['user_id']) != "") {
                                      ?>
              Vous êtes connecté autant que <?php echo $_SESSION['user_name']; ?>
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


<br>
<?php
if (isset($msg)) {
  echo '<div class="alert alert-dark alert-dismissible fade show" role="alert">' . $msg . '
  </div>';
}
?>
  <section class="meetings-page" id="meetings">
  <div class="container">
    <?php
      // Get the formation details
      $id_formation = $sessions[0]['id_formation'];
      $query = $conn->prepare('SELECT * FROM `formation` WHERE id_formation = :id');
      $query->bindParam(':id', $id_formation, PDO::PARAM_INT);
      $query->execute();
      $formation = $query->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="row">
	<div class="card mb-2" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="<?php echo $formation['image']; ?>" class="img-fluid rounded-start" alt="<?php echo $formation['sujet']; ?>">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title"><?php echo $formation['sujet']; ?></h5>
        <p class="card-text"><?php echo $formation['categorie']; ?></p>
        <p class="card-text"><?php echo $formation['description']; ?></p>
        <p class="card-text"><small class="text-body-secondary">Last updated <?php echo date('F j, Y', strtotime($formation['masse_horaire'])); ?></small></p>
      </div>
    </div>
  </div>
</div>

      <?php foreach ($sessions as $session): ?>
        <?php 
          // Get the session details
          $id_formateur =  $session['id_formateur'] ;
          $query = $conn->prepare('SELECT * FROM `formateur` WHERE id_formateur = :id');
          $query->bindParam(':id', $id_formateur, PDO::PARAM_INT);
          $query->execute();
          $formateur = $query->fetchAll(PDO::FETCH_ASSOC);
        ?>
		
        <div class="col-sm-6 mb-3 mb-sm-0">
			
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Date: <?php echo date('F j, Y', strtotime($session['date_debut'])); ?></li>
              <li class="list-group-item">Etat: <?php echo $session['etat']; ?></li>
              <li class="list-group-item">Nombre places max: <?php echo $session['nombre_places_max']; ?></li>
              <?php 
                $query = $conn->prepare('SELECT COUNT(*) AS num_enrolled FROM inscription WHERE id_session = :id_session');
                $query->bindParam(':id_session', $session['id_session'], PDO::PARAM_INT);
                $query->execute();
                $num_enrolled = $query->fetch(PDO::FETCH_ASSOC)['num_enrolled'];
              ?>
              <li class="list-group-item">Enrolled Students: <?php echo $num_enrolled; ?></li>
              <li class="list-group-item">Formateur: <?php echo $formateur[0]['firstname'] . ' ' . $formateur[0]['lastname']; ?></li>
            </ul>
            <div class="card-body">
              <form id="join-form" action="join_session.php" method="post">
                <a href="join-session.php?id=<?php echo $session['id_session']; ?>" class="btn btn-primary">Join</a>
              </form>
			 
            </div>
          </div>
        </div>
      <?php endforeach; ?>
	  
    </div>
  </div><br>
</section>

  <?php include "footer.php";?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
