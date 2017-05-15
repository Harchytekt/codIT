<?php
    session_set_cookie_params(0);
    session_start();

    if (!empty($_POST['uname_log'])) {
        include('connexion/verifLogin.php');
    } else if (!empty($_POST['uname_sign'])) {
        include('connexion/verifSignup.php');
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/style.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <meta charset="utf-8">
        <title>Accueil</title>
        <script>
            /**
             * Disable the submit button until an username and
             * a password are entered.
             */
            $(document).ready(function(){
                $(function () {
                    $("#uname, #pwd").bind("change keyup", function () {
                        if ($("#uname").val() != "" && $("#pwd").val() != "") {
                            $(":submit").prop('disabled', false);
                            $(":submit").prop('id', '');
                        } else {
                            $(":submit").prop('disabled', true);
                            $(":submit").prop('id', 'disabled');
                        }
                    });
                    $("#uname_sign, #pwd1_sign, #pwd2_sign").bind("change keyup", function () {
                        if ($("#uname_sign").val() != "" && $("#pwd1_sign").val() != "" && $("#pwd2_sign").val() != "") {
                            $(".signup:submit").prop('disabled', false);
                            $(".signup:submit").prop('id', '');
                        } else {
                            $(".signup:submit").prop('disabled', true);
                            $(".signup:submit").prop('id', 'disabled');
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <header>
            <h1>Bienvenue sur codIT !</h1>
            <div id="movingQuestions">
                <h2 id="item1">Qu'est-ce qu'un algorithme ?</h2>
                <h2 id="item2">Qu'est-ce qu'un langage de haut niveau ?</h2>
                <h2 id="item3">Qu'est-ce qu'une variable ?</h2>
                <h2 id="item4">Qu'est-ce que le Python ?</h2>
            </div>
        </header>
        <main>
            <div class="presentation">
                <div class="test" id="left">
                    <h3>Présentation</h3>
                    <div class="insideText">
                        <p>
                            <span id="codIT">codIT</span> vous permet d'apprendre
                            les bases de la programmation à l'aide de Python.<br>
                            L’apprentissage se fera en trois étapes :
                        </p>
                        <ol>
                            <li>
                                Apprentissage théorique accompagné d'exemples.
                            </li>
                            <li>
                                Après chaque partie théorique, exercices pour fixer la matière.
                            </li>
                            <li>
                                QCM noté sur 10 requerrant une cote minimale de 7/10 pour le passage au chapitre suivant.
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="test" id="center">
                    <h3>Connectez-vous</h3>
                    <?php
                        if (!empty($_POST['uname_log'])) {
                            include('forms/loginForm_verif.php');
                        }
                        include('forms/loginForm.php');
                    ?>
                </div>
                <div class="test" id="right">
                    <h3>Enregistrez-vous</h3>
                    <?php
                        if (!empty($_POST['uname_sign'])) {
                            include('forms/signUpForm_verif.php');
                        } else {
                            include('forms/signUpForm.php');
                        }
                    ?>
                </div>
                <div class="clear"></div>
            </div>
        </main>
        <script>
            $(document).ready(function() {
                var i = 0;
                while (i < 1000) {
                    $('#item1').animate({left: '100%'}, 13000);
                    $('#item2').animate({left: '-30%'}, 10000);
                    $('#item3').animate({left: '100%'}, 17000);
                    $('#item4').animate({left: '-30%'}, 15000);

                    $('#item1').animate({left: '-30%'}, 17000);
                    $('#item2').animate({left: '100%'}, 9000);
                    $('#item3').animate({left: '-30%'}, 11000);
                    $('#item4').animate({left: '100%'}, 15000);
                    i++;
                }
            });
        </script>
    </body>
</html>
