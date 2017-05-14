<h2>Introduction</h2>
<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Laquelle de ces affirmations est fausse ?</label><br><br>
            <input type="radio" name="q1" value="1" checked="checked"> Python est une bibliothèque<br><br>
            <input type="radio" name="q1" value="2"> Python est portable<br><br>
            <input type="radio" name="q1" value="3"> Python est simple
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Cochez ce qui est incorrect :</label><br><br>
            <label><span class="italic">Les programmes de haut niveau :</span></label><br>
            <input type="checkbox" name="q2[]" value="1"> ne sont exécutables que sur un type d’ordinateurs.<br>
            <input type="checkbox" name="q2[]" value="2"> ont l'avantage d'être facile à écrire et à (re)lire</span>.<br>
            <input type="checkbox" name="q2[]" value="3"> sont souvent des langages formels avec des mots anglais.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div>
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Cochez ce qui est correct :</label><br><br>
            <label><span class="italic">Les instructions permettent de :</span></label><br>
            <input type="checkbox" name="q3[]" value="1"> réaliser des tâches de manière répétitive.<br><br>
            <input type="checkbox" name="q3[]" value="2"> réaliser des opérations mathématiques (additions, soustraction,…).<br><br>
            <input type="checkbox" name="q3[]" value="3"> afficher des données à l’écran ou écrire dans un fichier.
        </fieldset>
    </div>
    <input type="submit" value="Valider le questionnaire">
</form>
