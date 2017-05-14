<?php
    include_once("dbInfos.php");
    try {
        $bd=new PDO('mysql:host='.$DBhost.';port='.$DBport.';dbname='.$DBname, $DBuser, $DBpwd);
        $bd->exec("SET NAMES 'utf8'");
    } catch (Exception $e) {
        //echo 'Erreur de connexion à la BD';
        echo '<script>window.location = "../DBerror.php";</script>';
    }
?>
