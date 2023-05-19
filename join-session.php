<?php
include "config.php";
session_start();

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];

$id_apprenant = $_SESSION['user_id'];
$id_session = $_GET['id'];

if (!empty($_SESSION["user_id"])) {
    $id_apprenant = $_SESSION['user_id'];
    $id_session = $_GET['id'];

// Retrieve the maximum capacity of the session
$max_capacity_stmt = $conn->prepare("SELECT nombre_places_max FROM session WHERE id_session = :id_session");
$max_capacity_stmt->bindParam(':id_session', $id_session);
$max_capacity_stmt->execute();
$max_capacity = $max_capacity_stmt->fetchColumn();

// Count the number of learners already registered for the session
$num_registered_stmt = $conn->prepare("SELECT COUNT(*) FROM inscription WHERE id_session = :id_session");
$num_registered_stmt->bindParam(':id_session', $id_session);
$num_registered_stmt->execute();
$num_registered = $num_registered_stmt->fetchColumn();

// Retrieve the session information
$stmt = $conn->prepare("SELECT * FROM session WHERE id_session = :id_session");
$stmt->bindParam(':id_session', $id_session);
$stmt->execute();
$session = $stmt->fetch(PDO::FETCH_ASSOC);

if ($session['etat'] === 'clôturée' || $session['etat'] === 'Annulée' || $session['etat'] === 'en cours') {
    if ($session['etat'] === 'clôturée') {
        $msg='<div class="row latestsProductsdiv text-center">
        <h1 class ="col-md-12" style="color : red;">Désolé, Cette session est clôturée</h1>
        </div>';
    } elseif ($session['etat'] === 'Annulée') {
        $msg='<div class="row latestsProductsdiv text-center">
        <h1 class ="col-md-12" style="color : red;">Désolé, cette session est annulée</h1>
        </div>';
    } else {
        $msg='<div class="row latestsProductsdiv text-center">
        <h1 class ="col-md-12" style="color : red;">Désolé, cette session est en cours</h1>
        </div>';
    }
    include "details.php";
} elseif ($num_registered == $max_capacity ) {
    $msg='<div class="row latestsProductsdiv text-center">
    <h1 class ="col-md-12" style="color : red;">Désolé, cette session a atteint sa capacité maximale</h1>
    </div>';
} else {
    // Check if the trainee is already registered for another course on the same date
    $stmt = $conn->prepare("SELECT * FROM session WHERE id_session = :id_session");
    $stmt->bindParam(':id_session', $id_session);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $date_fin = $result['date_fin'];
    $date_debut = $result['date_debut'];

    if (is_array($result) && isset($result['date_debut'])) {

        $overlapSessionsStmt = $conn->prepare("SELECT COUNT(*) FROM inscription i 
        INNER JOIN session s ON s.id_session = i.id_session
        WHERE i.id_apprenant = :id_apprenant
        AND (
            (s.date_debut >= :date_debut AND s.date_debut <= :date_fin)
            OR (s.date_fin >= :date_debut AND s.date_fin <= :date_fin)
            OR (s.date_debut <= :date_debut AND s.date_fin >= :date_fin)
        )");
        $overlapSessionsStmt->bindParam(':id_apprenant', $id_apprenant);
        $overlapSessionsStmt->bindParam(':date_debut', $date_debut);
        $overlapSessionsStmt->bindParam(':date_fin', $date_fin);
        $overlapSessionsStmt->execute();
        $overlapSessionsData = $overlapSessionsStmt->fetchColumn();

        // Check if the trainee is already enrolled in this session
        $alreadyEnrolledStmt = $conn->prepare("SELECT * FROM inscription WHERE id_apprenant = :id_apprenant AND id_session = :id_session");
        $alreadyEnrolledStmt->bindParam(':id_apprenant', $id_apprenant);
        $alreadyEnrolledStmt->bindParam(':id_session', $id_session);
        $alreadyEnrolledStmt->execute();
        $alreadyEnrolledData = $alreadyEnrolledStmt->fetchAll(PDO::FETCH_NUM);

        // Check if the trainee has enrolled in more than 2 other sessions
        $current_year = date('Y');
        $stmt = $conn->prepare("SELECT s.* FROM inscription i
                                INNER JOIN session s ON s.id_session = i.id_session
                                WHERE i.id_apprenant = :id_apprenant
                                AND YEAR(s.date_debut) = :current_year");
        $stmt->bindParam(':id_apprenant', $id_apprenant);
        $stmt->bindParam(':current_year', $current_year);
        $stmt->execute();
        $registered_sessions = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($alreadyEnrolledData) == 0 && count($registered_sessions) < 2 && $overlapSessionsData == 0 && $session['etat'] == 'en cours dinscription') {

            $insertStmt = $conn->prepare("INSERT INTO inscription(id_apprenant, id_session) VALUES (:id_apprenant, :id_session)");
            $insertStmt->bindParam(':id_apprenant', $id_apprenant);
            $insertStmt->bindParam(':id_session', $id_session);
            $insertStmt->execute();

            $msg='<div class="row latestsProductsdiv text-center">
            <h1 class ="col-md-12" style="color : green;">Vous avez rejoint la session </h1>
            </div>';

        } elseif (count($alreadyEnrolledData) > 0) {

            $msg='<div class="row latestsProductsdiv text-center">
        <h1 class ="col-md-12" style="color : red;">Vous avez déjà rejoint cette session </h1>
        </div>';

        } elseif (count($registered_sessions) >= 2) {
            $msg='<div class="row latestsProductsdiv text-center">
            <h1 class ="col-md-12" style="color : red;">Vous avez atteint le nombre maximum de sessions pour cette année </h1>
            </div>';

        } elseif ($overlapSessionsData > 0) {
            $msg='<div class="row latestsProductsdiv text-center">
            <h1 class ="col-md-12" style="color : red;">Vous êtes déjà inscrit à une session qui se chevauche avec celle-ci </h1>
            </div>';

        } elseif ($session['etat'] != 'en cours dinscription') {
            $msg='<div class="row latestsProductsdiv text-center">
            <h1 class ="col-md-12" style="color : red;">Cette session n\'est pas disponible pour l\'inscription actuellement</h1>
            </div>';
        }
        include "details.php";
    }



    }

} else {
    header("Location: login.php");
}

function checksession($array, $id)
{
    foreach ($array as $item) {
        if ($item[0] == $id) return true;
        return false;
    }
}

function checkIfAlreadyRegistered($id_apprenant,
$id_session)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM inscription WHERE id_apprenant = :id_apprenant AND id_session = :id_session");
    $stmt->bindParam(':id_apprenant', $id_apprenant);
    $stmt->bindParam(':id_session', $id_session);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        return true;
    } else {
        return false;
    }
}
?>