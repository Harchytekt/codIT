<h2>Les conditions</h2>
<section id="cslide-slides" class="cslide-slides-master clearfix">
    <div class="cslide-slides-container clearfix">
        <div class="cslide-slide">
            <div class="slide-content">
                <p>
                    Voici un nouveau principe de base de la programmation.<br>
                    En effet, sans conditions, les programmes informatiques
                    feraient toujours la même chose !
                </p>

                <h4>Principe</h4>

                <p>
                    Les opérateurs, et les expressions booléennes, sont
                    principalement utilisés dans les conditions pour tester des
                    variables.<br>
                    Les expressions étant soit vraies, soit fausses, l’algorithme
                    va effectuer une action, ou une autre.
                </p>
                <p>
                    On peut, par exemple, dire &laquo; <span class="italic">Si la
                    variable x est négative, alors fait ceci.</span> &raquo;.
                </p>

                <blockquote>
                    <span class="underline">Remarque :</span><br><br>
                    L’expression booléenne se trouvant à l’intérieur d’une
                    <span class="bold">instruction conditionnelle</span> est
                    appelée un <span class="bold">prédicat</span>.<br><br>
                    La valeur des <span class="bold">prédicats</span> est de
                    type <span class="code">bool</span>.
                </blockquote>

                <h3>Le <span class="code">if</span></h3>

                <p>
                    En anglais, le mot <span class="bold">si</span> se traduit
                    par <span class="code">if</span>.<br>
                    C’est celui-ci que l’on utilise en programmation pour débuter
                    une instruction conditionnelle.<br>
                    Le prédicat est écrit à la suite,
                    <span class="italic">souvent entre parenthèses</span>, et
                    est terminée par <span class="bold">:</span>.<br>
                    Le code à exécuter si la condition est vérifiée doit être
                    <span class="bold"><span class="italic">indenté</span></span>
                    une fois.
                </p>

                <blockquote>
                    <span class="underline">Définition</span><br><br>
                    Une <span class="bold">indentation</span> est un
                    <span class="bold">décalage</span> du code vers la droite.<br><br>
                    La convention veut qu’une indentation soit de
                    <span class="bold">quatre espaces</span>, ou
                    d’<span class="bold">une tabulation</span>.
                </blockquote>

                <p>
                    <span class="underline">Exemple théorique :</span>
<pre class="language-python">
    <code class="language-python">        >>> if (""" prédicat """):
        >>>     # code</code>
</pre>
                </p>

                <p>
                    <span class="underline">Exemple concret :</span>
<pre class="language-python">
    <code class="language-python">        >>> if x >= 0:
        >>>     print("La variable est négative ou nulle.")</code>
</pre>
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Le <span class="code">else</span></h3>

                <p>
                    Tout comme pour le <span class="code">if</span>, c'est de
                    l'anglais que vient le mot <span class="code">else</span>,
                    qui signifie <span class="bold">sinon</span> en français.
                </p>
                <p>
                    Grâce au <span class="code">else</span>, nous pouvons
                    améliorer notre code.<br>
                    Désormais, on peut dire &laquo; <span class="italic">Si la
                    variable x est négative, alors fait ceci.
                    Sinon, fait cela</span> &raquo;.
                </p>
                <p>
                    Comme en français, l'instruction <span class="code">else</span>
                    n'est pas suivie du prédicat, mais garde le même format que
                    <span class="code">if</span>.<br>
                    Par contre, s'il y a un <span class="code">else</span>,
                    il se trouve à la fin des conditions.
                </p>

                <p>
                    <span class="underline">Exemple théorique :</span>
<pre class="language-python">
    <code class="language-python">        >>> if (""" prédicat """):
        >>>     # code
        >>> else:
        >>>     # code</code>
</pre>
                </p>

                <p>
                    <span class="underline">Exemple concret :</span>
<pre class="language-python">
    <code class="language-python">        >>> if x >= 0:
        >>>     print("La variable est négative ou nulle.")
        >>> else:
        >>>     print("La variable est strictement positive.")</code>
</pre>
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Le <span class="code">elif</span></h3>

                <p>
                    On a vu comment faire un <span class="bold">si</span> et
                    un <span class="bold">sinon</span>. Il est possible de
                    faire un <span class="bold">sinon si</span> pour faire
                    un autre test si le premier n'a pas marché.<br>
                    Le <span class="bold">sinon si</span>, ou
                    <span class="code">elif</span>, se place entre le
                    <span class="code">if</span> et le
                    <span class="code">else</span>, et à la même structure.
                </p>

                <blockquote>
                    <span class="underline">Remarque ;</span><br><br>
                    Le <span class="code">elif</span> est une abbréviation
                    pour <span class="code">else if</span>.<br><br>
                    C'est d'ailleurs <span class="code">else if</span> qui
                    est utilisé dans les autres langages.
                </blockquote>

                <p>
                    À présent, on peut dire &laquo; <span class="italic">Si la
                    variable x est négative, alors fait ceci. Sinon, si elle est
                    plus petite que 10, fait ça. Sinon, fait cela.</span> &raquo;.
                </p>

                <p>
                    <span class="underline">Exemple théorique :</span>
<pre class="language-python">
    <code class="language-python">        >>> if (""" prédicat """):
        >>>     # code
        >>> elif (""" autre prédicat """):
        >>>     # code
        >>> else:
        >>>     # code</code>
</pre>
                </p>

                <p>
                    <span class="underline">Exemple concret :</span>
<pre class="language-python">
    <code class="language-python">        >>> if x >= 0:
        >>>     print("La variable est négative ou nulle.")
        >>> elif (x < 10):
        >>>     print("La variable est comprise entre 0 et 10.")
        >>> else:
        >>>     print("La variable est supérieure ou égale à 10.")</code>
</pre>
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Les conditions ternaires</h3>

                <p>
                    Il existe une autre façon de faire des conditions.<br>
                    Une <span class="bold">opération ternaire</span> peut,
                    <span class="italic">dans certains cas</span>, remplacer
                    une structure <span class="bold">if…else</span>. <br>
                    Ses possibilités sont plus limitées, mais son exécution est
                    plus rapide.
                </p>
                <p>
                    Une opération ternaire est donc similaire à un
                    <span class="bold">if…else</span>, sauf qu'elle s'écrit en
                    une seule ligne !
                </p>

                <p>
                    <span class="underline">Format :</span>
<pre class="language-python">
    <code class="language-python">        >>> z = x if C else y</code>
</pre>
                    Cela se traduit par <span class="bold">z</span> vaut
                    <span class="bold">x</span> si la condition
                    <span class="bold">C</span> est vraie, sinon,
                    <span class="bold">z</span> vaut <span class="bold">y</span>.
                </p>

                <p>
                    <span class="underline">Exemple concret avec <span class="bold">if…else</span> :</span>
<pre class="language-python">
    <code class="language-python">        >>> x = 4
        >>> y = 3
        >>> if x < y:
        >>>     z = x
        >>> else:
        >>>     z = y
        >>> print("z vaut ", z)
        >>> z vaut 3</code>
</pre>
                </p>

                <p>
                    <span class="underline">Exemple ternaire concret :</span>
<pre class="language-python">
    <code class="language-python">        >>> x = 4
        >>> y = 3
        >>> z = x if x < y else y
        >>> print("z vaut ", z)
        >>> z vaut 3</code>
</pre>
                </p>
                <div class="btn quizz">
                    Vers le quizz
                </div>
        </div>
    </div>
    <div class="cslide-prev-next clearfix">
        <span class="cslide-prev">Précédent</span>
        <span class="cslide-next">Suivant</span>
    </div>
</section><!-- /sliding content section -->
