<?php
    session_set_cookie_params(0);
    session_start();

    if (!isset($_SESSION['current_user_id'])) {
        echo '<script>window.location = "../index.php?error=2";</script>';
    } else {
        $current_id = $_SESSION['current_user_id'];
    }

    include '../connexion/connexion.php';
    $reponse = $bd->query("SELECT chapter, score, state FROM Results NATURAL JOIN Tests WHERE user_id = {$_SESSION['current_user_id']};");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trophées</title>
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
                <!--<h2 id="title">Où en sommes-nous ?</h2>-->
                <h2 id="title">
                    Où en sommes-nous ?
                    <img style="vertical-align:bottom" src="../img/titles/trophy.png" alt="" width="64" height="64">
                </h2>

                <div class="flex-container trophies">
                    <div class="flex-item unlocked" id="chap1">
                        <div class="heads">
                            <p>1</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked" id="chap2">
                        <div class="heads">
                            <p>2</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap3">
                        <div class="heads">
                            <p>3</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap4">
                        <div class="heads">
                            <p>4</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap5">
                        <div class="heads">
                            <p>5</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap6">
                        <div class="heads">
                            <p>6</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                    <div class="flex-item locked"   id="chap7">
                        <div class="heads">
                            <p>7</p>
                        </div>
                        <div class="tails">
                            <p>0/10</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                while ($donnees = $reponse->fetch()) {
                    ?>
                    <script>
                        var chapter = <?php echo $donnees['chapter']; ?>;
                        var score = <?php echo $donnees['score']; ?>;
                        <?php
                        if ($donnees['state'] == 1) {
                            ?>
                            $('#chap'+chapter).removeClass('locked');
                            $('#chap'+chapter).addClass('unlocked');
                            $('#chap'+chapter+' img').attr("src","../img/unlocked.png");
                            <?php
                        }
                        ?>
                        if (score >= 7) {
                            $('#chap'+chapter+' .tails').addClass('succeeded');
                        }
                        $('#chap'+chapter+' .tails p').text(score+'/10');
                    </script>
                    <?php
                }
            ?>
        </main>
        <script src="../js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('.tab.trophies').attr('id', 'current');
                $('nav').stop().toggle( 'slide' );

                $('.flex-container.trophies').children().mouseenter(function() {
                    $(this).css('transform', 'rotateY(180deg)');
                    $(this).css('box-shadow', '-3px 3px 1px rgba(0, 0, 0, 0.4)');
                });
                $('.flex-container.trophies').children().mouseleave(function() {
                    $(this).css('transform', 'rotateY(0deg)');
                    $(this).css('box-shadow', '3px 3px 1px rgba(0, 0, 0, 0.4)');
                });

            });
        </script>
    </body>
</html>
