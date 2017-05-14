<form class="" action="index.php" method="post">
    <label class="label">Nom d'utilisateur: </label>
    <input class="login username" type="text" name="uname_log" id="uname">

    <label class="label">Mot de passe: </label>
    <input class="login" type="password" name="pwd_log" id="pwd">

    <input type="submit" value="Connexion" id="disabled" disabled>
    <br>

    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == '1') {
               echo "<span class='error' id='log'>Login incorrect !</span>";
           } else if ($_GET['error'] == '2') {
               echo "<span class='error' id='access'>Connectez-vous pour accéder au site !</span>";
           } else if ($_GET['error'] == '3') {
               echo "<span class='error' id='created'>Le compte a bien été créé !</span>";
           }
       }
    ?>
</form>
