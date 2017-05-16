<?php
    session_set_cookie_params(0);
    session_start();

    if (!isset($_SESSION['current_user_id'])) {
        echo '<script>window.location = "../index.php?error=2";</script>';
    } else {
        $current_id = $_SESSION['current_user_id'];
    }

    include('../connexion/connexion.php');
    $reponse    = $bd->prepare("SELECT * FROM Users WHERE user_id = $current_id;");
    $reponse->execute();
    $donnees    = $reponse->fetch();
    $username   = $donnees['username'];
    include('../connexion/verifModifAcc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Compte</title>
        <!-- css -->
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/inside_style.css">

        <!-- js -->
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script>
            var id = "<?php Print($current_id); ?>";
        </script>
    </head>
    <body>
        <header><?php include '../include/navbar.php'; ?></header>
        <main>
            <?php
                include '../connexion/connexion.php';
                $str = "SELECT username, user_id, lastname, firstname, mail FROM Users WHERE user_id = $current_id;";
                $reponse = $bd->prepare($str);
                $reponse->execute();
                $donnees = $reponse->fetch();
                $name = (empty($donnees['firstname'])) ? $donnees['username'] : $donnees['firstname'];
            ?>
            <div class="content">
                <h2 id="title">
                    Bonjour <?php Print($name); ?> !
                    <?php if ($current_id == 1) { ?>
                        <img style="vertical-align:bottom" src="../img/titles/admin.png" alt="" width="64" height="64">
                    <?php } else { ?>
                        <img style="vertical-align:bottom" src="../img/titles/user.png" alt="" width="64" height="64">
                    <?php } ?>
                </h2>
                <div class="account" id="vignette">
                    <div class="left">
                        <?php
                            if (!empty($_POST['last']) || !empty($_POST['first']) || !empty($_POST['mail'])) {
                                include('../forms/modifAccForm_verif.php');
                            } else {
                                include('../forms/modifAccForm.php');
                            }
                        ?>
                    </div>
                    <div class="right">
                        <div id="middle">
                            <div class="btn changePwd">
                                <p>Changer le mot de passe</p>
                            </div>
                            <?php if ($current_id != 1) { ?>
                                <div class="btn deactivateAccount">
                                    <p>Supprimer le compte</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <?php
                $reponse->closeCursor(); // Termine le traitement de la requête
                $bd = null;
            ?>
        </main>
        <script src="../js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('.tab.account').attr('id', 'current');
                $('nav').stop().toggle('slide');
            });
        </script>
        <script>
            if (id != 1) {
                document.getElementsByClassName('deactivateAccount')[0].addEventListener("click", deactivate);
            }
            document.getElementsByClassName('changePwd')[0].addEventListener("click", changePassword);

            function changeData() {
                $('input').prop('disabled', false);
                $('.changeData').css('display', 'none');
                $('.changingData').css('display', 'block');
            }
            function cancel() {
                $('input').prop('disabled', true);
                $('.changeData').css('display', 'block');
                $('.changingData').css('display', 'none');
            }
            function changePassword() {
                window.location = 'chgPwd.php';
            }
            function deactivate() {
                if (confirm("Êtes-vous sûr de vouloir désactiver votre compte ?")) {
                    $.post("../include/deactivateUser.php", {user_updating: id});
                    window.location = '../connexion/logout.php';
                }
            }
        </script>
    </body>
</html>
