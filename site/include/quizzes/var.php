<h2>Les variables</h2>
<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>

<pre class="language-python">
    <code class="language-python">        >>> a = 2
        >>> b = 3
        >>> c = b % a
        >>> print("c = ", c)</code>
</pre>
        <fieldset>
            <label>Choisissez la réponse correcte</label><br>
            <input type="radio" name="q1" value="1" checked="checked"> c = 0<br>
            <input type="radio" name="q1" value="2"> c = 1<br>
            <input type="radio" name="q1" value="3"> c = 1.5
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>

<pre class="language-python">
    <code class="language-python">        >>> a, b = 5, 10
        >>> c = a + b
        >>> b = a + b
        >>> a = c</code>
</pre>
        <fieldset>
            <label>Choisissez la bonne réponse</label><br>
            <input type="radio" name="q2" value="1" checked="checked"> (a, b, c) = (15, 15, 15)<br>
            <input type="radio" name="q2" value="2"> (a, b, c) = (15, 25, 15)<br>
            <input type="radio" name="q2" value="3"> (a, b, c) = (15, 5, 15)
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>

<pre class="language-python">
    <code class="language-python">        >>> a = 2 * 0.5
        >>> type('a')</code>
</pre>
        <fieldset>
            <label>Choisissez la bonne réponse</label><br>
            <input type="radio" name="q3" value="1" checked="checked"> &lt;type 'int'&gt;<br>
            <input type="radio" name="q3" value="2"> &lt;type 'float'&gt;<br>
            <input type="radio" name="q3" value="3"> &lt;type 'str'&gt;
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 4</h3>
        <fieldset>
            <label>Cochez ce qui est correct</label><br><br>
            <label><span class="italic">Les variables permettent :</span></label><br>
            <input type="checkbox" name="q4[]" value="1"> d'associer un nom à une valeur<br>
            <input type="checkbox" name="q4[]" value="2"> de déterminer le type de la valeur<br>
            <input type="checkbox" name="q4[]" value="3"> de réutiliser une valeur.
        </fieldset>
    </div>
    <div class="clear"></div>
    <input type="submit" value="Valider le questionnaire">
</form>
