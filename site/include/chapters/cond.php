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
                    est suivi par <span class="bold">:</span>.<br>
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
                <h4>Voici notre petit rendez-vous en début de chapitre…</h4>

                <fieldset class="qcm1">
                    <legend>Question 1</legend>
                    <label>Un prédicat n'est pas :</label><br><br>
                    <input type="radio" name="qcm1" id="qcm1_1" value="1" checked="checked">
                    <label for="qcm1_1"><span class="bold">indenté.</span>
                    <span class="concealed wrong">Incorrect</span></label><br><br>

                    <input type="radio" name="qcm1" id="qcm1_2" value="2">
                    <label for="qcm1_2"><span class="bold">de type float.</span>
                    <span class="concealed ok">Correct</span></label><br><br>

                    <input type="radio" name="qcm1" id="qcm1_3" value="3">
                    <label for="qcm1_3"><span class="bold">indispensable aux instructions conditionnelles.</span>
                    <span class="concealed wrong">Non</span></label>
                </fieldset><br>

                <fieldset class="qcm2">
                    <legend>Question 2</legend>
                    <label>Choisis la bonne réponse :</label><br><br>
                    <input type="radio" name="qcm2" id="qcm2_1" value="1" checked="checked">
                    <label for="qcm2_1"><span class="bold">Le code à l'intérieur
                    du <span class="code">if</span>  doit être indenté quatre fois.</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm2" id="qcm2_2" value="2">
                    <label for="qcm2_2"><span class="bold">Une indentation est un décalage du code vers la droite.</span>
                    <span class="concealed ok">Correct !</span></label><br><br>

                    <input type="radio" name="qcm2" id="qcm2_3" value="3">
                    <label for="qcm2_3"><span class="bold">Le prédicat est suivi par ;.</span>
                    <span class="concealed wrong">Non</span></label>
                </fieldset>

                <h4>Et ça continue ! 👨🏻‍💻</h4>
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
                <h4>Plus qu'un avant la fin du chapitre !</h4>

                <fieldset class="qcm3">
                    <legend>Question 1</legend>
                    <label><span class="code">else</span> signifie :</label><br><br>
                    <input type="radio" name="qcm3" id="qcm3_1" value="1" checked="checked">
                    <label for="qcm3_1"><span class="bold">si</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm3" id="qcm3_2" value="2">
                    <label for="qcm3_2"><span class="bold">sinon si</span>
                    <span class="concealed wrong">Mauvais</span></label><br><br>

                    <input type="radio" name="qcm3" id="qcm3_3" value="3">
                    <label for="qcm3_3"><span class="bold">sinon</span>
                    <span class="concealed ok">Oui !</span></label>
                </fieldset><br>

                <fieldset class="qcm4">
                    <legend>Question 2</legend>
                    <label>La position du <span class="code">else</span> est :</label><br><br>
                    <input type="radio" name="qcm4" id="qcm4_1" value="1" checked="checked">
                    <label for="qcm4_1"><span class="bold">à la fin.</span>
                    <span class="concealed ok">Mauvais</span></label><br><br>

                    <input type="radio" name="qcm4" id="qcm4_2" value="2">
                    <label for="qcm4_2"><span class="bold">au début.</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm4" id="qcm4_3" value="3">
                    <label for="qcm4_3"><span class="bold">où on veut.</span>
                    <span class="concealed wrong">Mauvais</span></label>
                </fieldset>

                <h4>C'est bientôt fini… 👉🏻</h4>
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
                <h4>Si tout va bien, vous le réussirez !</h4>

                <fieldset class="qcm5">
                    <legend>Question 1</legend>
                    <label>L'ordre doit être :</label><br><br>
                    <input type="radio" name="qcm5" id="qcm5_1" value="1" checked="checked">
                    <label for="qcm5_1"><span class="bold">au choix.</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm5" id="qcm5_2" value="2">
                    <label for="qcm5_2"><span class="bold"><span class="code">if</span>
                    - <span class="code">else</span> - <span class="code">elif</span></span>
                    <span class="concealed wrong">Mauvais</span></label><br><br>

                    <input type="radio" name="qcm5" id="qcm5_3" value="3">
                    <label for="qcm5_3"><span class="bold"><span class="code">if</span>
                    - <span class="code">elif</span> - <span class="code">else</span></span>
                    <span class="concealed ok">C'est bon !</span></label>
                </fieldset><br>

                <fieldset class="qcm6">
                    <legend>Question 2</legend>
                    <label>Le <span class="code">elif</span> sert à : </label><br><br>
                    <input type="radio" name="qcm6" id="qcm6_1" value="1" checked="checked">
                    <label for="qcm6_1"><span class="bold">conclure la structure conditionnelle.</span>
                    <span class="concealed wrong">Et non</span></label><br><br>

                    <input type="radio" name="qcm6" id="qcm6_2" value="2">
                    <label for="qcm6_2"><span class="bold">vérifier les conditions précédentes.</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm6" id="qcm6_3" value="3">
                    <label for="qcm6_3"><span class="bold">rajouter une condition si la précédente est fausse.</span>
                    <span class="concealed ok">Correct</span></label>
                </fieldset>

                <h4>Voici venir le grand test ! 📄</h4>
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
