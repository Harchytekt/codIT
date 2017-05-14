<h2>Variables</h2>
<section id="cslide-slides" class="cslide-slides-master clearfix">
    <div class="cslide-slides-container clearfix">
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Valeurs et types</h3>

                <h4>Définition d’une valeur</h4>

                <p>
                    Une <span class="bold">valeur</span> est un des éléments de base d’un
                    programme, comme un nombre ou une lettre.<br>
                    <span class="underline">Exemples :</span> <span class="code">1</span>, <span class="code">2.0</span> ou
                    <span class="code">'Bonjour'</span>
                </p>

                <h4>Les différents types</h4>

                <p>
                    Un langage de programmation a besoin d’associer un type à une valeur afin de
                    définir les opérations autorisées sur cette donnée en particulier.
                </p>

                <p>
                    Toute valeur possède un <span class="bold">type</span> particulier :
                    <ul>
                        <li>
                            <span class="code">'Bonjour'</span> est une chaîne de caractères
                            (<span class="bold">string</span>) : str
                        </li>
                        <li>
                            <span class="code">1</span> et <span class="code">1994</span> sont des
                            entiers (<span class="bold">integer</span>) : int
                        </li>
                        <li>
                            <span class="code">4.2</span> et <span class="code">3.14159</span>
                            sont des réels (nombres à virgule flottante ou
                            <span class="bold">floating-point</span>) : float
                        </li>
                        <li>
                            <span class="code">True</span> et <span class="code">False</span>
                            sont le résultat d'une <span class="bold">expression booléenne</span>
                            : bool
                        </li>
                        <li>
                            il existe aussi les <span class="bold">listes</span>, les
                            <span class="bold">tuples</span>, les <span class="bold">dictionnaires</span>,…
                        </li>
                    </ul>
                </p>

                <blockquote>
                    Comme la plupart du temps en informatique, les types et mots-clés du Python
                    sont en anglais.
                </blockquote>

                <p>
                    Comment le type est-il déterminé ?
                    <ul>
                        <li>
                            le point détermine un <span class="bold">float</span>;
                        </li>
                        <li>
                            les apostrophes déterminent un <span class="bold">str</span>.
                        </li>
                    </ul>
                </p>

                <blockquote>
                    L’interpréteur peut donner le type d’une valeur par l'utilisation de la commande :
                    <span class="code">type(<span class="italic">variable</span>)</span>
                </blockquote>

                <p>
<pre class="language-python">
    <code class="language-python">        >>> type(2)
        &lt;type 'int'&gt;
        >>> type('2')
        &lt;type 'str'&gt;
        >>> type(2.)
        &lt;type 'float'&gt;</code>
</pre>
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Variables</h3>

                <p>
                    Une <span class="bold">variable</span> est un nom qui nous permet de faire
                    référence à une valeur (et de la stocker en mémoire). En effet, l’ordinateur
                    utilise des nombres (adresses) pour identifier les valeurs, mais il nous est
                    plus facile d’utiliser des mots.
                </p>
                <p>
                    Une <span class="bold">assignation</span> est une instruction qui permet de
                    créer une nouvelle variable et de lui attribuer une valeur. Elle permet
                    également de mettre à jour la valeur d’une variable déjà créée.
                </p>

                <p>
                    <span class="underline">Exemple :</span>
<pre class="language-python">
    <code class="language-python">        >>> # Assignation des variables
        >>> i = 12
        >>> message = 'La valeur de PI est'
        >>> pi = 3.14159
        >>>
        >>> print i
        12
        >>> print message, pi
        La valeur de PI est 3.14159
        >>>
        >>> i = 5
        >>> print i
        5</code>
</pre>

                </p>

                <p>
                    Les variables permettent :
                    <ul>
                        <li>
                            d’associer un nom à une valeur;
                        </li>
                        <li>
                            de réutiliser une valeur (la conserver).
                        </li>
                    </ul>
                </p>

                <p>
                On peut bien entendu <span class="bold">réaffecter</span> une valeur à une variable.

<pre class="language-python">
    <code class="language-python">        >>> rayon = 2
        >>> print aire
        12.56636</code>
</pre>

                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h4>Opérateurs</h4>

                <p>
                    Les <span class="bold">opérateurs</span> sont des symboles spéciaux qui
                    représentent des opérateurs arithmétiques comme l'addition ou la multiplication.<br>
                    Les <span class="bold">opérandes</span> peuvent être
                    (<span class="italic">entre autres</span>) des valeurs ou des variables de
                    type <span class="code">int</span> ou <span class="code">float</span>.
                    <ul>
                        <li>
                            <span class="code">+</span> &rarr; <span class="bold">Addition</span>
                        </li>
                        <li>
                            <span class="code">-</span> &rarr; <span class="bold">Soustraction</span>
                        </li>
                        <li>
                            <span class="code">*</span> &rarr; <span class="bold">Multiplication</span>
                        </li>
                        <li>
                            <span class="code">/</span> &rarr; <span class="bold">Division</span>
                        </li>
                        <li>
                            <span class="code">**</span> &rarr; <span class="bold">Exposant</span>
                        </li>
                        <li>
                            <span class="code">%</span> &rarr; <span class="bold">Modulo</span>
                        </li>
                    </ul>
                </p>

                <blockquote>
                    <ol>
                        <li>
                            Pour avoir une division entière en Python 3, il est nécessaire
                            d'utiliser <span class="code">//</span>.
                        </li>
                        <li>
                            Le modulo est le reste de la division entière.<br>
                            On a donc: 15 % 2 = 1, car 15 / 2 = 7 + 1.
                        </li>
                        <li>
                            Les parenthèses peuvent être utilisées pour faciliter la lisibilité
                            du code.
                        </li>
                    </ol>
                </blockquote>

<pre class="language-python">
    <code class="language-python">        >>> (3 // 2) + (8 % 3)
        3</code>
</pre>
                <h5>Règles de précédence</h5>

                <p>
                    L’ordre de précédence des opérateurs est le même qu’en mathématiques :
                    <ol>
                        <li>
                            <span class="bold">parenthèses</span> : 2 * (3 - 1) = 4
                        </li>
                        <li>
                            <span class="bold">exposant</span> : 2 ** 1 + 1 = 3 et 3 * 1 ** 3 = 3
                        </li>
                        <li>
                            <span class="bold">multiplication</span> et
                            <span class="bold">division</span> : 2 * 3 - 1 = 5
                        </li>
                        <li>
                            <span class="bold">addition</span> et <span class="bold">soustraction</span>
                        </li>
                    </ol>
                </p>

                <blockquote>
                    Les opérateurs ayant la même précédence sont évalués de gauche à droite.
                </blockquote>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h5>Opérations sur les chaînes de caractères</h5>

                <p>
                    On ne peut pas utiliser tous les opérateurs mathématiques sur des opérandes
                    de type <span class="code">str</span>.<br>

                    Opérateurs acceptés pour les chaînes :
                    <ul>
                        <li>
                            l’opérateur <span class="code">+</span> permet de concaténer deux
                            <span class="code">str</span> :
<pre class="language-python">
    <code class="language-python">        >>> premier = 'chat'
        >>> second = 'eau'
        >>> ensemble = premier + second
        >>> print(ensemble)
        chateau</code>
</pre>
                        </li>
                        <li>
                            l’opérateur <span class="code">*</span> - utilisé sur un
                            <span class="code">str</span> et un <span class="code">int</span> -
                            permet de répéter le <span class="code">str</span> :
<pre class="language-python">
    <code class="language-python">        >>> 'ha' * 3
        hahaha</code>
</pre>
                        </li>
                    </ul>
                </p>
                <h4>Commentaires</h4>

                <p>
                    Pour être plus simple à lire, un code source devrait être correctement
                    <span class="bold">documenté</span>.
                </p>

                <p>
                    On peut ajouter des notes dans du code, qui ne seront pas interprétées.<br>
                    On appelle cela des <span class="bold">commentaires</span>.
                </p>

                <p>
                    Il existe deux manière de faire en Python :
                    <ul>
                        <li>
                            les commentaires sur une ligne sont précédés par
                            <span class="code">#</span>.
                        </li>
                        <li>
                            les commentaires multilignes entourés par
                            <span class="code">'''</span> ou par <span class="code">"""</span>.
                        </li>
                    </ul>
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
