<h2>Introduction</h2>

<?php include('resultMessage.php'); ?>

<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Laquelle de ces affirmations est fausse ?</label><br><br>
            <span class="response">Python est une bibliothèque</span>, car
            <span class="explaination">le Python est un
                <span class="bold">langage de programmation</span> qui
                <span class="bold">contient</span> des bibliothèques</span>.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Cochez ce qui est incorrect :</label><br><br>
            <label><span class="italic">Les programmes de haut niveau :</span></label><br>
            <span class="response">ne sont exécutables que sur un type d’ordinateurs</span>, car
            <span class="explaination">les programmes de haut niveau sont
                <span class="bold">portables</span>
                <span class="italic">(ou multi-plateforme)</span></span>.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div>
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Cochez ce qui est correct :</label><br><br>
            <label><span class="italic">Les instructions permettent de :</span></label><br>
            <ul>
                <li>
                    <span class="response">réaliser des tâches de manière répétitive.</span>
                </li>
                <li>
                    <span class="response">réaliser des opérations mathématiques (additions, soustraction,…).</span>
                </li>
                <li>
                    <span class="response">afficher des données à l’écran ou écrire dans un fichier.</span>
                </li>
            </ul>
        </fieldset>
    </div>
    <div class="btn return" title="Retour aux chapitres">
        Retour aux chapitres
    </div>
</form>
