<?php if ($res >= 7) { ?>
    <h3 class="quizzResult">Bravo ! Vous avez réussi le chapitre<br>avec un score de <?php echo "$res"; ?>/10 !</h3>
<?php } else { ?>
    <h3 class="quizzResult wasted">Dommage ! Vous n'avez pas la note minimale.<br>Votre score est de <?php echo "$res"; ?>/10 !</h3>
<?php } ?>
