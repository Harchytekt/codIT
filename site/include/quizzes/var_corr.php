<h2>Les variables</h2>

<?php include('resultMessage.php'); ?>

<form class="" action="course.php" method="post">
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
            <span class="response">c = 1</span>, car
            <span class="explaination">3 = 2 + 1</span>.
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
            <span class="response">(a, b, c) = (15, 15, 15)</span>, car
            <span class="explaination">a + b = 15</span>.<br>
            Or, <span class="explaination">b = c = a + b et a = c</span>.
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
            <span class="response">&lt;type 'str'&gt;</span>, car
            <span class="explaination">on demande le type de <span class="code">'a'</span> qui est une chaîne de caractères</span>.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 4</h3>
        <fieldset>
            <label>Cochez ce qui est correct</label><br><br>
            <span class="italic">Les variables permettent :</span>
            <ul>
                <li>
                    <span class="response">d'associer un nom à une valeur</span>,
                </li>
                <li>
                    <span class="response">de réutiliser une valeur</span>.
                </li>
            </ul>
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="btn return" title="Retour aux chapitres">
        Retour aux chapitres
    </div>
</form>
