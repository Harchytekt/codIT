<h2>Les booléens</h2>
<section id="cslide-slides" class="cslide-slides-master clearfix">
    <div class="cslide-slides-container clearfix">
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Expression booléenne</h3>

                <h4>Définitions</h4>
                <p>
                    Une <span class="italic">expression <span
                    class="bold">booléenne</span></span> est une expression qui
                    retourne soit vrai, soit faux.
                </p>
                <p>
                    Le <span class="italic">type</span> <span class="bold">bool</span>
                    possède deux valeurs uniques: <span class="code">True</span>
                    (vrai) et <span class="code">False</span> (faux).
                </p>

                <blockquote>
                    <span class="underline">Remarque :</span><br><br>
                    <span class="code">True</span> et <span class="code">False</span>
                    sont des <span class="bold">valeurs</span> dont la première
                    lettre est une majuscule.<br>
                    Si vous écrivez <span class="code wrong">true</span>, il ne sera pas
                    reconnu.
                </blockquote>

                <h4>Le type bool</h4>

                <p>
                    Les valeurs <span class="code">True</span> et
                    <span class="code">False</span> sont de type
                    <span class="bold">bool</span>,
                    ce ne sont donc pas des <span class="bold">str</span> !
                </p>
                <p>
                    <span class="underline">Exemples de l’interpréteur :</span>
<pre class="language-python">
    <code class="language-python">        >>> type(True)
        >>> &lt;type 'bool'&gt;
        >>> type('True')
        >>> &lt;type 'str'&gt;</code>
</pre>
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Les opérateurs de comparaison</h3>

                <p>
                    Pour comparer l’égalité de deux variables, on utilise
                    l’opérateur <span class="code">==</span>.<br>
                    C’est ce qu’on appelle un opérateur de comparaison:<br>
                    il retourne <span class="code">True</span> si les variables
                    sont égales et <span class="code">False</span> dans le cas contraire.
                </p>
                <p>
                    <span class="underline">Exemples de l’interpréteur :</span>
<pre class="language-python">
    <code class="language-python">        >>> 42 == 42
        >>> True
        >>> 3.14 == 3
        >>> False</code>
</pre>
                </p>

                <blockquote>
                    <span class="underline">Erreur à éviter !</span><br><br>
                    L’opérateur <span class="code">==</span> compare deux
                    <span class="bold">variables</span> entre-elles, alors que
                    l’opérateur <span class="code">=</span> assigne une
                    <span class="bold">valeur</span> à une
                    <span class="bold">variable</span>.
                </blockquote>

                <p>
                    Comme on peut s’en douter, ce n’est pas le seul.
                    Il en existe même cinq autres que voici :
                    <ul>
                        <li>
                            x <span class="code">!=</span> y : x est différent de y
                        </li>
                        <li>
                            x <span class="code"><</span> y  : x est plus petit que y
                        </li>
                        <li>
                            x <span class="code"><=</span> y  : x est plus petit ou égal que y
                        </li>
                        <li>
                            x <span class="code">></span> y  : x est plus grand que y
                        </li>
                        <li>
                            x <span class="code">>=</span> y  : x est plus grand ou égal que y
                        </li>
                    </ul>
                </p>

                <blockquote>
                    <span class="underline">Remarques :</span><br>
                    <ol>
                        <li>
                            x <span class="code">=<</span> y et x
                            <span class="code">=></span> y sont prohibés, ils
                            représentent une <span class="italic">erreur de syntaxe</span>.
                        </li><br>
                        <li>
                            En Python, il est possible d’écrire l'expression
                            2 <span class="code"><</span> x
                            <span class="code"><</span> 4, mais la majorité des
                            autres langages interdisent cette pratique.
                        </li>
                    </ol>
                </blockquote>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Les opérateurs logiques</h3>

                <p>
                    Si on met de côté cette pratique rare de Python, comment
                    peut-on comparer une variable à deux valeurs ?
                </p>
                <p>
                    En analysant l’expression 2 <span class="code"><</span> x
                    <span class="code"><</span> 4, on voit qu’elle se décompose
                    en deux expressions primaires:<br>
                    2 <span class="code"><</span> x <span class="bold">et</span>
                    x <span class="code"><</span> 4.
                </p>

                <p>
                    On aimerait bien avoir un opérateur et pour effectuer cette
                    opération, n’est-ce pas ?<br>
                    Eh bien, il existe !<br><br>
                    Il y en a même trois que l'on appelle opérateurs logiques:
                    <span class="code">and</span>, <span class="code">or</span>
                    et <span class="code">not</span>.<br>
                    Leur sémantique est similaire à leur signification anglaise:
                    <span class="italic">et</span>, <span class="italic">ou</span>
                    et <span class="italic">non</span>.
                </p>

                <p>
                    En combinant les opérateurs de comparaisons et logiques, on
                    peut construire des expressions booléennes composées.
                </p>

                <p>
                    <span class="underline">Par exemple :</span>
<pre class="language-python">
    <code class="language-python">        >>> 2 < x and x < 4
        >>> # x est compris entre 2 et 4
        >>>
        >>> x <= 5 or x > 10
        >>> # x est plus petit ou égal à 5, ou supérieur à 10
        >>>
        >>> x < 0 and x % 2 == 0
        >>> # x est un nombre négatif pair
        >>>
        >>> not (x % 5 == 0)
        >>> # x n’est pas divisible par 5</code>
</pre>

                </p>
                <div class="btn quizz">
                    Vers le quizz
                </div>
            </div>
        </div>
    </div>
    <div class="cslide-prev-next clearfix">
        <span class="cslide-prev">Précédent</span>
        <span class="cslide-next">Suivant</span>
    </div>
</section><!-- /sliding content section -->
