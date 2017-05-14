<?php

    if (!empty($_POST['uname_sign'])) {
        $new_uname = false;
        $uname_ok = false;
        $pwd1_ok = false;
        $pwd2_ok = false;
        $pwds_ok = false;

        $allSign_ok = false;

        $uname = "(?!.*[\.\-\_]{2,})^[a-zA-Z0-9\.\-\_]{3,24}$";
        $pass = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{4,16}$";

        if (preg_match("#$uname#", $_POST['uname_sign'])) {
            $uname_ok = true;
        }
        if (preg_match("#$pass#", $_POST['pwd1_sign'])) {
            $pwd1_ok = true;
        }
        if (preg_match("#$pass#", $_POST['pwd2_sign'])) {
            $pwd2_ok = true;
        }
        if ($pwd1_ok && $pwd2_ok) {
            $pwds_ok = ($_POST['pwd1_sign'] == $_POST['pwd2_sign']);
        }

        if ($uname_ok) {
            include('connexion/connexion.php');
            $str = "SELECT user_id FROM Users WHERE username = '{$_POST['uname_sign']}';";
            $reponse = $bd->query($str);
            $donnees = $reponse->fetch();
            if ($donnees['user_id'] == null) {
                $new_uname = true;
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            $bd = null;
        }

        $allSign_ok = ($uname_ok && $new_uname && $pwds_ok);
    }

?>
