<?php

if ($allLog_ok) {

    $uname       = $_POST['uname_log'];
    $pwd         = $_POST['pwd_log'];
    $long        = strlen($pwd);
    $pwd         = hash('sha512', "+%#" . $long . $pwd . "¨*§");
    include 'connexion/connexion.php';

    $str = "SELECT user_id, active FROM Users WHERE username <=> '$uname' AND password <=> '$pwd';";
    $reponse = $bd->prepare($str);
    $reponse->execute();
    $donnees = $reponse->fetch();
    if ($donnees['user_id'] == null OR $donnees['active'] == 0) {
        $target = "index.php?error=1";
    } else {
        $target = "insidePages/course.php";
        $_SESSION['current_user_id'] = $donnees['user_id'];
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    $bd = null;
    echo '<script>window.location = "',$target,'";</script>';
} else {
    echo '<script>window.location = "index.php?error=1";</script>';
}

?>
