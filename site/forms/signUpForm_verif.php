<?php

if ($allSign_ok) {
    $username   = $_POST['uname_sign'];
    $pwd        = $_POST['pwd1_sign'];
    $long       = strlen($pwd);
    $pwd        = hash('sha512', "+%#" . $long . $pwd . "¨*§");
    include('connexion/connexion.php');

    try {
        // set the PDO error mode to exception
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $str = "INSERT INTO Users (username, password) VALUES ('$username', '$pwd');";
        // use exec() because no results are returned
        $bd->exec($str);

        $str = "INSERT INTO Results (chapter, state) VALUES (1, 1);";
        // use exec() because no results are returned
        $bd->exec($str);

        $str = "INSERT INTO Results (chapter) VALUES (2), (3), (4), (5), (6), (7);";
        // use exec() because no results are returned
        $bd->exec($str);

        $reponse = $bd->prepare("SELECT user_id FROM Users WHERE username = '$username';");
        $reponse->execute();
        $donnees = $reponse->fetch();
        $uid = $donnees['user_id'];
        $reponse->closeCursor(); // Termine le traitement de la requête

        $mult = ($uid - 1) * 7;
        $str = "INSERT INTO Tests (user_id, result_id)
        VALUES ($uid, $mult + 1), ($uid, $mult + 2), ($uid, $mult + 3),
        ($uid, $mult + 4), ($uid, $mult + 5), ($uid, $mult + 6), ($uid, $mult + 7);";
        // use exec() because no results are returned
        $bd->exec($str);

    } catch(PDOException $e) {
        //echo $str . "<br>" . $e->getMessage();
        echo '<script>window.location = "../DBerror.php";</script>';
    }

    $bd = null;
    echo '<script>window.location = "index.php?error=3";</script>';

} else {

    ?>
    <form class="" action="index.php" method="post">
        <label class="label">Nom d'utilisateur<sup class="t">*</sup>: </label>
        <input class="login username" type="text" name="uname_sign" id="uname_sign" value="<?php if($uname_ok && $new_uname) {echo $_POST['uname_sign'];}?>" placeholder=" <?php if (!$uname_ok) {echo "Erreur";} else if (!$new_uname) {echo "Déjà utilisé";}?>" title="Entre 3 et 24 caractères.">

        <label class="label">Mot de passe<sup class="t">*</sup>: </label>
        <input class="login" type="password" name="pwd1_sign" id="pwd1_sign" value="<?php if($pwd1_ok && $pwds_ok) {echo $_POST['pwd1_sign'];}?>" placeholder=" <?php if (!$pwd1_ok) {echo "Erreur";} elseif (!$pwds_ok) {echo "Mots de passe différents";}?>" title="Minimum 4 caractères, au moins 1 majuscule, 1 minuscule et 1 chiffre.">

        <label class="label">Mot de passe<sup class="t">*</sup>: </label>
        <input class="login" type="password" name="pwd2_sign" id="pwd2_sign" value="<?php if($pwd2_ok && $pwds_ok) {echo $_POST['pwd2_sign'];}?>" placeholder=" <?php if (!$pwd2_ok) {echo "Erreur";} elseif (!$pwds_ok) {echo "Mots de passe différents";}?>" title="Minimum 4 caractères, au moins 1 majuscule, 1 minuscule et 1 chiffre.">

        <input type="submit" value="Enregistrement" id="disabled" class="signup" disabled>
    </form>

    <?php

}

?>
