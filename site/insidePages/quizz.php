<?php
    session_set_cookie_params(0);
    session_start();

    if (!isset($_SESSION['current_user_id'])) {
        echo '<script>window.location = "../index.php?error=2";</script>';
    } else {
        $current_id = $_SESSION['current_user_id'];
    }

    if (!isset($_SESSION['current_chapter'])) {
        echo '<script>window.location.href = "course.php";</script>';
    } else {
        $chapter = $_SESSION['current_chapter'];
        if (!empty($_POST['q1']) || !empty($_POST['q2'])
        || !empty($_POST['q3'])|| !empty($_POST['q4'])) {
            include('../connexion/verifQuizz.php');
            $chapter = $chapter . "_corr";
        }
        if (!empty($_SESSION['res'])) {
            include '../connexion/connexion.php';
            try {
                $mult = (($current_id - 1) * 7);
                // set the PDO error mode to exception
                $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $res_id = $mult + $_SESSION['chp'];
                $str = "UPDATE Results SET score = {$_SESSION['res']} WHERE score < {$_SESSION['res']} AND result_id = $res_id;";
                // use exec() because no results are returned
                $bd->exec($str);
                if ($_SESSION['chp'] < 5 && $_SESSION['res'] >= 7) {
                    $res_id = $mult + $_SESSION['chp'] + 1;
                    $str = "UPDATE Results SET state = 1 WHERE state = 0 AND result_id = $res_id;";
                    // use exec() because no results are returned
                    $bd->exec($str);
                }
            } catch(PDOException $e) {
                //echo $str . "<br>" . $e->getMessage();
                echo '<script>window.location = "../DBerror.php";</script>';
            }

            $bd = null;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quizz</title>
        <!-- css -->
        <link rel="stylesheet" href="../styles/style.css" />
        <link rel="stylesheet" href="../styles/inside_style.css" />
        <link rel="stylesheet" href="../styles/prism.css">

        <!-- js -->
        <script src="../js/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <header><?php include '../include/navbar.php'; ?></header>
        <main>
            <div class="quizz content">
                <div id="vignette">
                    <?php include '../include/quizzes/'.$chapter.'.php'; ?>
                </div>
            </div>
        </main>
        <script src="../js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('nav').stop().toggle( 'slide' );
            });
            $('.btn.return').click(function() {
                window.location = "course.php";
            });
        </script>
    </body>
</html>
