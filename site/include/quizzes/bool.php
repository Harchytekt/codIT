<h2>Les booléens</h2>
<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Cochez les affirmations correctes:</label><br><br>
            <input type="checkbox" name="q1[]" value="1"> Les opérateurs de comparaison comme <span class="code">&lt;</span> et <span class="code">&gt;</span> retournent des valeurs booléennes.<br>
            <input type="checkbox" name="q1[]" value="2"> Les valeurs booléennes ne peuvent être que <span class="code">True</span> et <span class="code">False</span>.<br>
            <input type="checkbox" name="q1[]" value="3"> Les opérateurs arithmétiques comme <span class="code">+</span> et <span class="code">-</span> retournent des valeurs booléennes.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Quelle(s) ligne(s) affichera(ront) <span class="code">False</span> ?</label><br><br>
            <input type="checkbox" name="q2[]" value="1"> print(<span class="code">True</span> or <span class="code">False</span>)<br><br>
            <input type="checkbox" name="q2[]" value="2"> print(not <span class="code">False</span>)<br><br>
            <input type="checkbox" name="q2[]" value="3"> print(<span class="code">True</span> and <span class="code">False</span>)
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Comment vérifier si la variable <span class="code">nom</span> vaut codIT ?</label><br><br>
            <input type="radio" name="q3" value="1" checked="checked"> <span class="code">nom</span> = "codIT"<br><br>
            <input type="radio" name="q3" value="2"> <span class="code">nom</span> == "codIT"<br><br>
            <input type="radio" name="q3" value="3"> on ne peut pas faire ça
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 4</h3>
        <fieldset>
            <label>Quelle ligne affichera <span class="code">True</span> si <span class="code">x</span> est pair ?</label><br><br>
            <input type="radio" name="q4" value="1" checked="checked"> print(<span class="code">x</span> / 2 == 0)<br><br>
            <input type="radio" name="q4" value="2"> print(<span class="code">x</span> / 2 == 1)<br><br>
            <input type="radio" name="q4" value="3"> print(<span class="code">x</span> % 2 == 0)
        </fieldset>
    </div>
    <div class="clear"></div>
    <input type="submit" value="Valider le questionnaire">
</form>
