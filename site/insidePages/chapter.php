<?php
    session_set_cookie_params(0);
    session_start();

    if (!isset($_SESSION['current_user_id'])) {
        echo '<script>window.location = "../index.php?error=2";</script>';
    } else {
        $current_id = $_SESSION['current_user_id'];
    }

    if (!isset($_GET['chp'])) {
        echo '<script>window.location.href = "course.php";</script>';
    } else {
        $chp = $_GET['chp'];
        if ($chp == "1") {
            $chapter = 'intro';
        } elseif ($chp == "2") {
            $chapter = 'var';
        } elseif ($chp == "3") {
            $chapter = 'bool';
        } elseif ($chp == "4") {
            $chapter = 'cond';
        } elseif ($chp == "5") {
            $chapter = 'loop';
        } /*elseif ($chp == "6") {
            $chapter = 'array';
        } *//*elseif ($chp == "7") {
            $chapter = 'O';
        }*/ else {
            echo '<script>window.location.href = "course.php";</script>';
        }
        $_SESSION['current_chapter'] = $chapter;
        $_SESSION['chp'] = $chp;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chapitre</title>
        <!-- css -->
        <link rel="stylesheet" href="../styles/slider.css" />
        <link rel="stylesheet" href="../styles/style.css" />
        <link rel="stylesheet" href="../styles/inside_style.css" />
        <link rel="stylesheet" href="../styles/prism.css">

        <!-- js -->
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/jquery.cslide.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
            $("#cslide-slides").cslide();
        });
        </script>
    </head>
    <body>
        <header><?php include '../include/navbar.php'; ?></header>
        <main>
            <div class="chapter content">
                <div id="vignette">
                    <?php include '../include/chapters/'.$chapter.'.php'; ?>
                </div>
            </div>
        </main>
        <script src="../js/prism.js"></script>
        <script src="../js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('nav').stop().toggle( 'slide' );
            });
            $('.btn.quizz').click(function() {
                window.location = "quizz.php";
            });
        </script>
    </body>
</html>
