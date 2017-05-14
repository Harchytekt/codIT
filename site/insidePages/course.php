<?php
    session_set_cookie_params(0);
    session_start();

    if (!isset($_SESSION['current_user_id'])) {
        echo '<script>window.location = "../index.php?error=2";</script>';
    } else {
        $current_id = $_SESSION['current_user_id'];
    }

    include '../connexion/connexion.php';
    $reponse = $bd->query("SELECT chapter, state FROM Results NATURAL JOIN Tests WHERE user_id = {$_SESSION['current_user_id']} AND chapter != 1;");
    //Retourne tous les chapitres (autre que le premier) de l'utilisateur

    $_SESSION['res'] = 0;
    $_SESSION['current_chapter'] = 0;
    $_SESSION['chp'] = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours</title>
        <!-- css -->
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/inside_style.css">

        <!-- js -->
        <script src="../js/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <header><?php include '../include/navbar.php'; ?></header>
        <main>
            <div class="content">
                <h2 id="title">
                    Apprenons le Python !
                    <img style="vertical-align:bottom" src="../img/titles/snake.png" alt="" width="64" height="64">
                </h2>

                <div class="flex-container">
                    <div class="flex-item unlocked" id="chap1" style="order: 1;">
                        <div class="insideText">
                            <h3>Introduction</h3>
                            <div class="hidden">
                                <p>
                                    Qu’est-ce qu’un algorithme ?<br>
                                    Qu’est-ce qu’un langage de programmation ?
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/unlocked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap2" style="order: 2;">
                        <div class="insideText">
                            <h3>Les variables</h3>
                            <div class="hidden">
                                <p>
                                    Qu'est-ce qu'une variable ?<br>
                                    Quelles sont les différences entre type et valeur ?
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap3" style="order: 3;">
                        <div class="insideText">
                            <h3>Les booléens</h3>
                            <div class="hidden">
                                <p>
                                    Que sont les booléens ?<br>
                                    Que sont les opérateurs logiques ?
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap4" style="order: 4;">
                        <div class="insideText">
                            <h3>Les conditions</h3>
                            <div class="hidden">
                                <p>
                                    Comment utiliser les conditions ?<br>
                                    Qu'est-ce qu'un prédicat ?
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap5" style="order: 5;">
                        <div class="insideText">
                            <h3>Les boucles</h3>
                            <div class="hidden">
                                <p>
                                    Pourquoi utiliser des boucles ?<br>
                                    Y en a-t-il plusieus sortes ?
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap6" style="order: 6;">
                        <div class="insideText">
                            <h3>Les tableaux</h3>
                            <div class="hidden">
                                <p>
                                    Bientôt disponible !
                                    <!--À quoi servent les tableaux ?<br>
                                    Pourquoi et comment les utiliser ?-->
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap7" style="order: 7;">
                        <div class="insideText">
                            <h3>La complexité</h3>
                            <div class="hidden">
                                <p>
                                    Bientôt disponible !
                                    <!--Comment améliorer un code ?<br>
                                    Que signifie &ldquo;grand O de n&rdquo; ?-->
                                </p>
                            </div>
                        </div>
                        <div class="lockContainer">
                            <div class="lock">
                                <img src="../img/locked.png" alt="" width="25" height="25">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                while ($donnees = $reponse->fetch()) {
                    if ($donnees['state'] == 1) {
                        ?>
                        <script>
                            var chapter = <?php echo $donnees['chapter']; ?>;
                            $('#chap'+chapter).removeClass('locked');
                            $('#chap'+chapter).addClass('unlocked');
                            $('#chap'+chapter+' img').attr("src","../img/unlocked.png");
                        </script>
                        <?php
                    }
                }
            ?>
        </main>
        <script src="../js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('.tab.course').attr('id', 'current');
                $('nav').stop().toggle( 'slide' );

                $('.flex-item').mouseenter(function() {
                    var item = $(this);
                    item.addClass('hover');
                    setTimeout(function(){ item.find('.hidden').stop().show(800); }, 300);
                });
                $('.flex-item').mouseleave(function() {
                    $(this).find('.hidden').stop().hide(800);
                    var item = $(this);
                    setTimeout(function(){ item.removeClass('hover'); }, 560);
                });
                $('.flex-item.unlocked').click(function() {
                    window.location.href = "chapter.php?chp=" + $(this).css('order');
                });
            });
        </script>
    </body>
</html>
