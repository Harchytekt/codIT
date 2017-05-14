<h2>Les booléens</h2>

<?php include('resultMessage.php'); ?>

<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Cochez ce qui vous parait correct:</label><br>
            <ul>
                <li>
                    <span class="response">Les opérateurs de comparaison comme <span class="code">&lt;</span> et <span class="code">&gt;</span> retournent des valeurs booléennes.</span>
                </li>
                <li>
                    <span class="response">Les valeurs booléennes ne peuvent être que <span class="code">True</span> et <span class="code">False</span>.</span>
                </li>
            </ul>
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Quelle(s) ligne(s) affichera(ront) <span class="code">False</span> ?</label><br><br>
            <span class="response">print(<span class="code">True</span> and <span class="code">False</span>)</span>, car <span class="explaination">vérifier si une chose est vraie et fausse donne un résultat faux</span>.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Comment vérifier si la variable <span class="code">nom</span> vaut codIT ?</label><br><br>
            <span class="response"><span class="code">nom</span> == "codIT"</span>, car <span class="explaination"><span class="code">==</span> compare deux <span class="bold">variables</span>
            entre-elles,<br>alors que <span class="code">=</span> assigne une
            <span class="bold">valeur</span> à une <span class="bold">variable</span></span>.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 4</h3>
        <fieldset>
            <label>Quelle ligne affichera <span class="code">True</span> si <span class="code">x</span> est pair ?</label><br><br>
            <span class="response">print(<span class="code">x</span> % 2 == 0)</span>, car <span class="explaination">, si <span class="code">x</span> est pair, sa division par deux est sans reste</span>.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="btn return" title="Retour aux chapitres">
        Retour aux chapitres
    </div>
</form>
