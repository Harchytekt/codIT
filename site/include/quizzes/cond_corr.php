<h2>Les conditions</h2>

<?php include('resultMessage.php'); ?>

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
            <span class="response">x est impair</span>, car
            <span class="explaination">33 est impair et que, vu que l'on passe
            par le premier <span class="code">elif</span>, on ne passe pas dans
            le second</span>.
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
            <span class="response">Le reste vaut 1</span>, car
            <span class="explaination">21 = 20 + 1, 20 étant un multiple de 4</span>.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="left">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>La ligne: <span class="code">z = x if x < y else y</span> signifie que :</label><br><br>
            <span class="response">z prend la valeur de <span class="code">x</span> si <span class="code">x</span> est inférieur à <span class="code">y</span>, sinon il prend la valeur de <span class="code">y</span>.</span>
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 3</h3>
        <fieldset>
            <label>Une indentation n'est pas :</label><br><br>
            <ul>
                <li>
                    <span class="response">facultative dans les instructions conditionnelles.</span>
                </li>
                <li>
                    <span class="response">suivie de <span class="code">:</span>.</span>
                </li>
            </ul>
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="btn return" title="Retour aux chapitres">
        Retour aux chapitres
    </div>
</form>
