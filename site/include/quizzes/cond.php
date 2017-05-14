<h2>Les conditions</h2>
<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>

<pre class="language-python">
    <code class="language-python">>>> x = 33
>>> if x % 2 == 0:
>>>     print("x est pair")
>>> elif x % 2 == 1:
>>>     print("x est impair")
>>> elif x >= 0:
>>>     print("x est positif")</code>
</pre>
        <fieldset>
            <label>Le code ci-dessus affichera :</label><br><br>
            <input type="checkbox" name="q1[]" value="1"> x est pair<br><br>
            <input type="checkbox" name="q1[]" value="2"> x est impair<br><br>
            <input type="checkbox" name="q1[]" value="3"> x est positif
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>

<pre class="language-python">
    <code class="language-python">>>> a = 21
>>> if a % 4 == 0:
>>>     print("a est divisible par 4")
>>> else:
>>>     print("Le reste vaut", a % 4)</code>
</pre>
        <fieldset>
            <label>Laquelle de ces lignes sera affichée ?</label><br><br>
            <input type="radio" name="q2" value="1" checked="checked"> a est divisible par 4<br><br>
            <input type="radio" name="q2" value="2"> Le reste vaut 1<br><br>
            <input type="radio" name="q2" value="3"> Le reste vaut 2<br><br>
            <input type="radio" name="q2" value="4"> Le reste vaut 3
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>La ligne: <span class="code">z = x if x < y else y</span> signifie que :</label><br><br>
            <input type="radio" name="q3" value="1" checked="checked"> z prend la valeur de <span class="code">x</span> si <span class="code">x</span> est supérieur à <span class="code">y</span>, sinon il prend la valeur de <span class="code">y</span>.<br><br>
            <input type="radio" name="q3" value="2"> z prend la valeur de <span class="code">x</span> si <span class="code">x</span> est inférieur à <span class="code">y</span>, sinon il prend la valeur de <span class="code">x</span>.<br><br>
            <input type="radio" name="q3" value="3"> z prend la valeur de <span class="code">x</span> si <span class="code">x</span> est inférieur à <span class="code">y</span>, sinon il prend la valeur de <span class="code">y</span>.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Une indentation n'est pas :</label><br><br>
            <input type="checkbox" name="q4[]" value="1"> facultative dans les instructions conditionnelles.<br><br>
            <input type="checkbox" name="q4[]" value="2"> un décalage du code vers la droite.<br><br>
            <input type="checkbox" name="q4[]" value="3"> suivie de <span class="code">:</span>.
        </fieldset>
    </div>
    <div class="clear"></div>
    <input type="submit" value="Valider le questionnaire">
</form>
