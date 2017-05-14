<?php
    session_start();

    if(!empty($_POST['user_updating'])) {
        include '../connexion/connexion.php';
        try {
            // set the PDO error mode to exception
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $str = "UPDATE Users SET active = 0 WHERE user_id = {$_POST['user_updating']};";
            // use exec() because no results are returned
            $bd->exec($str);
        } catch(PDOException $e) {
            //echo $str . "<br>" . $e->getMessage();
            echo '<script>window.location = "../DBerror.php";</script>';
        }
        $bd = null;
    }
?>
