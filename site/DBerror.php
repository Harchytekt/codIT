<?php
    http_response_code(503);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Erreur 503</title>
        <!-- css -->
        <link rel="stylesheet" href="styles/DBError_style.css">

        <!-- js -->
        <script src="js/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <header>
            <div id="logo">
                <a href="index.php">
                    <!--[if lte IE 8]><img src="img/DBerror/logo.png" title="Accueil" alt="Logo" style="border-width:0"
                    width="100" height="100" /><![endif]-->
                    <!--[if !IE]> --><img src="img/DBerror/logo.svg" title="Accueil" alt="Logo" style="border-width:0" width="100" height="100"><!-- <![endif]-->
                </a>
            </div>

        </header>
        <main>
            <div id="admin">
                <a href="mailto:admin@codit.be?subject=Problem%20%7C%20codIT">
                    <!--[if lte IE 8]><img src="img/DBerror/contact_admin.png" title="Contacter l'administrateur" alt="Contacter l'administrateur" style="border-width:0"
                    width="80" height="80" /><![endif]-->
                    <!--[if !IE]> --><img src="img/DBerror/contact_admin.svg" title="Contacter l'administrateur" alt="Contacter l'administrateur" style="border-width:0" width="80" height="80"><!-- <![endif]-->
                </a>
            </div>
        </main>
        <script>
            $(document).ready(function() {
                $('img').mouseenter(function() {
                    var imgPath       = $(this).attr('src');
                    var currentLength = imgPath.length;
                    var currentPath   = imgPath.substr(0, currentLength-4);
                    var currentExt    = imgPath.substr(currentLength-4);
                    $(this).attr('src', currentPath + '_hover' + currentExt);
                });
                $('img').mouseleave(function() {
                    var imgPath       = $(this).attr('src');
                    var currentLength = imgPath.length;
                    var currentPath   = imgPath.substr(0, currentLength-10);
                    var currentExt    = imgPath.substr(currentLength-4);
                    $(this).attr('src', currentPath + currentExt);
                });
            });
        </script>
    </body>
</html>
