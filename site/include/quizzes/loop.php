<h2>Les boucles</h2>
<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Qu'est-ce qu'une boucle infinie ?</label><br>
            <input type="radio" name="q1" value="1" checked="checked"> Une boucle
            dont la condition n'est jamais vraie.<br>
            <input type="radio" name="q1" value="2"> Une boucle dont la condition
            est toujours vraie.<br>
            <input type="radio" name="q1" value="3"> Une boucle dont la taille
            est très grande <span class="italic">(infinie)</span>.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Cochez ce qui est correct :</label><br>
            <input type="checkbox" name="q2[]" value="1"> Le mot-clé
            <span class="code">break</span> arrête la boucle pour repartir du début.<br>
            <input type="checkbox" name="q2[]" value="2"> Le bloc d'instructions doit être indenté.<br>
            <input type="checkbox" name="q2[]" value="3"> Une boucle se répètera un
            certain nombre de fois ou selon une ou plusieurs conditions.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>

<pre class="language-python">
    <code class="language-python">        >>> i = 0
        >>> i += 1
        >>> while i < 10:
        >>>     i *= 3
        >>>     print(i)</code>
</pre>
        <fieldset>
            <label>Le code ci-dessus affichera :</label><br><br>
            <input type="radio" name="q3" value="1" checked="checked"> tous les
            chiffres de 1 à 10 <span class="italic">(10 non inclus)</span><br>
            <input type="radio" name="q3" value="2"> 3, 6 et 9<br>
            <input type="radio" name="q3" value="3"> 3, 9 et 27
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 4</h3>

<pre class="language-python">
    <code class="language-python">        >>> i = 0
        >>> while i < 10:
        >>>     if i > 0:
        >>>         break
        >>>     print(i)</code>
</pre>
        <fieldset>
            <label>Cochez ce qui est correct</label><br><br>
            <input type="radio" name="q4" value="1" checked="checked"> 0<br>
            <input type="radio" name="q4" value="2"> tous les chiffres de 1 à 10
            <span class="italic">(10 non inclus)</span><br>
            <input type="radio" name="q4" value="3"> une infinité de 0
        </fieldset>
    </div>
    <div class="clear"></div>
    <input type="submit" value="Valider le questionnaire">
</form>
