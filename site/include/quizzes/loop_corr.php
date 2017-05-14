<h2>Les boucles</h2>

<?php include('resultMessage.php'); ?>

<form class="" action="quizz.php" method="post">
    <div class="left">
        <h3 class="question">Question 1</h3>
        <fieldset>
            <label>Qu'est-ce qu'une boucle infinie ?</label><br>
            <span class="response">Une boucle dont la condition
            est toujours vraie</span>, car
            <span class="explaination">, le code boucle tant que la condition
            n'est pas fausse.</span.
        </fieldset>
    </div>
    <div class="right">
        <h3 class="question">Question 2</h3>
        <fieldset>
            <label>Cochez ce qui est correct :</label><br>
            <ul>
                <li>
                    <span class="response">Le bloc d'instructions doit être indenté.</span>
                </li>
                <li>
                    <span class="response">Une boucle se répètera un certain
                        nombre de fois ou selon une ou plusieurs conditions.</span>
                </li>
            </ul>
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
            <span class="response">3, 9 et 27</span>, car
            <ul>
                <li>
                    <span class="explaination">1 * 3 = 3 < 10</span>;
                </li>
                <li>
                    <span class="explaination">3 * 3 = 9 < 10</span>;
                </li>
                <li>
                    <span class="explaination">9 * 3 = 27 > 10</span>.
                </li>
            </ul>
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
            <span class="response">une infinité de 0</span>, car
            <span class="explaination">i n'est jamais incrémenté, le programme
            tombe donc dans une boucle infinie</span.
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="btn return" title="Retour aux chapitres">
        Retour aux chapitres
    </div>
</form>
