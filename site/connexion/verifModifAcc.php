<?php

    if (!empty($_POST['last']) || !empty($_POST['first']) || !empty($_POST['mail'])) {
        $last_ok = false;
        $first_ok = false;
        $mail_ok = false;
        $new_mail = false;

        $all_ok = false;

        $letters = "[A-ZÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒa-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]";
        $name = "^($letters+([ ]?$letters?[-]?$letters+)*)$";
        $mail = "^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$";

        if (empty($_POST['last']) || preg_match("#$name#", $_POST['last'])) {
            $last_ok = true;
        }
        if (empty($_POST['first']) || preg_match("#$name#", $_POST['first'])) {
            $first_ok = true;
        }
        if (empty($_POST['mail']) || preg_match("#$mail#", $_POST['mail'])) {
            $mail_ok = true;
        }

        if ($mail_ok && !empty($_POST['mail'])) {
            include('../connexion/connexion.php');
            $str = "SELECT user_id FROM Users WHERE user_id != $current_id AND mail = '{$_POST['mail']}';";
            $reponse = $bd->prepare($str);
            $reponse->execute();
            $donnees = $reponse->fetch();
            if ($donnees['user_id'] == null) {
                $new_mail = true;
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            $bd = null;
        } else if (empty($_POST['mail'])) {
            $new_mail = true;
        }

        $all_ok = ($last_ok && $first_ok && $new_mail);
    }

?>
