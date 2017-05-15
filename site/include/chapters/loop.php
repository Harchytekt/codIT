<h2>Les boucles</h2>
<section id="cslide-slides" class="cslide-slides-master clearfix">
    <div class="cslide-slides-container clearfix">
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Les structures itératives</h3>

                <blockquote>
                    <span class="underline">Bon à savoir :</span><br><br>
                    Ceci est la dernière structure de base de l'algorithmique
                    <span class="italic">(et donc de la programmation)</span>.<br>
                    Une fois ce chapitre clos, le reste consistera en une
                    application ou une dérivation de ces structures de base.
                </blockquote>

                <h4>Définition</h4>
                <p>
                    Une <span class="bold">itération</span>, ou
                    <span class="bold">structure itérative</span>, est une
                    séquence d'instructions destinée à être exécutée plusieurs
                    fois.<br>
                    C'est aussi l'action d'exécuter cette instruction.
                </p>

                <blockquote>
                    <span class="underline">Remarque :</span><br><br>
                    On les appelle parfois <span class="bold">structures
                    répétitives</span>.<br>
                    Leur nom le plus utilisé est <span class="bold">boucles</span>.
                </blockquote>

                <h4>Principe</h4>

                <p>
                    Le but d'une boucle est de répéter un bloc d'instructions
                    <span class="italic">(indenté)</span> plusieurs fois.<br>
                    Selon son type, la boucle répètera le bloc un nombre fixé de
                    fois <span class="italic">(n fois)</span>, ou selon un
                    certain nombre de critères <span class="italic">(un test de
                    une ou plusieurs conditions)</span>.<br>
                    À première vue, la boucle est un élément très simple, mais,
                    comme nous allons le voir, elle peut vite devenir la bête
                    noire des programmeurs !
                </p>

                <h4>Comportement</h4>

                <p>Quel que soit le type de la boucle, voici comment le code se comportera:</p>
                <ol>
                    <li>
                        l'ordinateur lit le code normalement
                        <span class="italic">(de haut en bas)</span>;
                    </li>
                    <li>
                        une fois arrivé à la fin de la boucle, il repart au
                        début de la boucle;
                    </li>
                    <li>
                        l'ordinateur lit le code normalement…
                    </li>
                    <li>
                        et repart au début de la boucle.
                    </li>
                </ol>

                <p>
                    Le problème de cette approche c'est que, si on ne l'arrête
                    pas, l'ordinateur rentrera dans la boucle une infinité de
                    fois, on parle alors de <span class="bold">boucle infinie</span>.<br>
                    Le programme peut alors être bloqué dans une boucle infinie
                    qui pourrait aller jusqu'à <span class="bold">bloquer</span>
                    l'ordinateur ! C'est d'ailleurs l'une des nombreuses craintes
                    des développeurs.
                </p>
                <p>
                    Pour nous sortir de cette situation, nous retrouvons les
                    <span class="bold">conditions</span>.<br>
                    Dès que l'on crée une boucle, on indique une condition
                    signifiant: &laquo; Tant que la condition est vraie, répète
                    la boucle &raquo;.
                </p>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h4>On continue d'avancer !</h4>

                <fieldset class="qcm1">
                    <legend>Question 1</legend>
                    <label>Un autre nom pour &lsquo;<span class="italic">boucle</span>&rsquo; est :</label><br><br>
                    <input type="radio" name="qcm1" id="qcm1_1" value="1" checked="checked">
                    <label for="qcm1_1"><span class="bold">structure itérative.</span>
                    <span class="concealed ok">C'est bien ça !</span></label><br><br>

                    <input type="radio" name="qcm1" id="qcm1_2" value="2">
                    <label for="qcm1_2"><span class="bold">boucle infinie.</span>
                    <span class="concealed wrong">Nooon !</span></label><br><br>

                    <input type="radio" name="qcm1" id="qcm1_3" value="3">
                    <label for="qcm1_3"><span class="bold">structure impérative.</span>
                    <span class="concealed wrong">Non</span></label>
                </fieldset><br>

                <fieldset class="qcm2">
                    <legend>Question 2</legend>
                    <label>La boucle <span class="code">if</span> :</label><br><br>
                    <input type="radio" name="qcm2" id="qcm2_1" value="1" checked="checked">
                    <label for="qcm2_1"><span class="bold">est une structure répétitive.</span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm2" id="qcm2_2" value="2">
                    <label for="qcm2_2"><span class="bold">est une sorte de boucle infinie.</span>
                    <span class="concealed wrong">Faux</span></label><br><br>

                    <input type="radio" name="qcm2" id="qcm2_3" value="3">
                    <label for="qcm2_3"><span class="bold">n'est pas une boucle, mais une
                    <span class="italic">instruction conditionnelle</span>.</span>
                    <span class="concealed ok">Oui !</span></label>
                </fieldset>

                <h4>Plus que deux QCM et c'est le quizz ! 💯</h4>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Types de boucles</h3>

                <p>
                    La majorité des langages de programmation mettent à
                    disposition différents types de boucle.<br>
                    Le Python - <span class="italic">ne faisant pas exception à
                    la règle</span> - permet d'utiliser deux types de boucle :
                </p>

                <ul>
                    <li>la boucle <span class="code">while</span></li>
                    <li>la boucle <span class="code">for</span></li>
                </ul>

                <h4>La boucle <span class="code">while</span></h4>

                <p>
                    Cette boucle se retrouve dans la plupart des langages de
                    programmation et porte le même nom.<br>
                    Elle est utilisée pour répéter un bloc d'instructions tant
                    que la condition est vérifiée, donc vraie -
                    <span class="code">while</span> signifiant
                    <span class="bold">tant que</span> en anglais.
                </p>

                <p>
                    Voici sa structure générale :
<pre class="language-python">
    <code class="language-python">        >>> while maCondition:
        >>>     #maPremiereInstruction
        >>>     #maSecondeInstruction</code>
</pre>
                    Lors de l'exécution du programme, celui-ci arrive à
                    l'instruction <span class="code">while</span>.<br>
                    Il évalue alors l'expression booléenne
                    <span class="code">maCondition</span>: si elle retourne
                    <span class="code">True</span>, alors le programme exécute
                    le bloc d'instructions à l'intérieur de la boucle jusqu'à la
                    fin de celui-ci.<br>
                    À ce moment, il remonte au <span class="code">while</span> et
                    évalue à nouveau <span class="code">maCondition</span>.<br>
                    Si elle est toujours vraie, il exécute les instructions, et
                    ainsi de suite, tant que l'expression retourne
                    <span class="code">True</span>.<br>
                    Si elle est fausse, alors le programme
                    &lsquo;<span class="italic">sort</span>&rsquo; de la boucle
                    et passe son contenu.
                </p>
                <p>
                    Voici un exemple affichant les nombres de 1 à 10 :
<pre class="language-python">
    <code class="language-python">        >>> i = 1
        >>> while i <= 10:
        >>>     print(i)
        >>>     i += 1</code>
</pre>
                </p>

                <blockquote>
                    <span class="underline">Remarques :</span><br><br>
                    <ul>
                        <li>
                            On peut écrire <span class="code">i += 1</span>, ce
                            qui est le diminutif de
                            <span class="code">i = i + 1</span>.<br>
                            Il en est de même pour les quatre autres opérateurs
                            arithmétiques.
                        </li>
                        <li>
                            Il est important de modifier la valeur de
                            <span class="code">i</span>, sinon la boucle sera
                            <span class="bold">infinie</span>.<br>
                            En effet, <span class="code">i</span> vaudra
                            toujours 1, rendant la condition toujours vraie.
                        </li>
                        <li>
                            On dit qu’on <span class="italic">incrémente</span>
                            une variable quand on met à jour une variable en lui
                            ajoutant un nombre.<br>
                            Pour la soustraction, on dit qu’on
                            <span class="italic">décrémente</span> la variable.
                        </li>
                    </ul>
                </blockquote>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h4>C'est la fin… du chapitre !</h4>

                <fieldset class="qcm3">
                    <legend>Question 1</legend>
                    <label>Laquelle est fausse ?</label><br><br>
                    <input type="radio" name="qcm3" id="qcm3_1" value="1" checked="checked">
                    <label for="qcm3_1"><span class="bold">Le <span class="code">if</span> est une boucle spéciale.</span>
                    <span class="concealed ok">Correct !</span></label><br><br>

                    <input type="radio" name="qcm3" id="qcm3_2" value="2">
                    <label for="qcm3_2"><span class="bold">Il existe différents types de boucle.</span>
                    <span class="concealed wrong">Raté</span></label><br><br>

                    <input type="radio" name="qcm3" id="qcm3_3" value="3">
                    <label for="qcm3_3"><span class="bold">Si la boucle est vraie, la boucle se répète.</span>
                    <span class="concealed wrong">Non</span></label>
                </fieldset><br>

                <fieldset class="qcm4">
                    <legend>Question 2</legend>
                    <label>À quoi sert l'incrémentation ?</label><br><br>
                    <input type="radio" name="qcm4" id="qcm4_1" value="1" checked="checked">
                    <label for="qcm4_1"><span class="bold">Elle sert à calculer la valeur d'une variable.</span>
                    <span class="concealed wrong">Mauvais</span></label><br><br>

                    <input type="radio" name="qcm4" id="qcm4_2" value="2">
                    <label for="qcm4_2"><span class="bold">Elle sert à diminuer la valeur d'une variable.</span>
                    <span class="concealed wrong">Noooon !</span></label><br><br>

                    <input type="radio" name="qcm4" id="qcm4_3" value="3">
                    <label for="qcm4_3"><span class="bold">Elle sert à augmenter la valeur d'une variable.</span>
                    <span class="concealed ok">Correct</span></label>
                </fieldset>

                <h4>Plus qu'un ! 👌🏻</h4>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h4>La boucle <span class="code">for</span></h4>

                <p>
                    Tout comme la boucle <span class="code">while</span>,
                    la boucle <span class="code">for</span> se retrouve dans la
                    plupart des autres langages, mais pas sous cette forme.<br>
                    En effet, en Python, la boucle <span class="code">for</span>
                    est utilisée sur des séquences.
                </p>
                <p>
                    Les instructions sont exécutées de manière répétées pour
                    chaque élément de la séquence: à chaque itération, l'élément
                    est affecté à la variable.
                </p>

                <blockquote>
                    <span class="underline">Remarque :</span><br><br>
                    Dans certains langages, vous retrouverez cette boucle sous
                    le nom de <span class="code">foreach</span>.
                </blockquote>

                <p>
                    Voici sa structure générale :
<pre class="language-python">
    <code class="language-python">        >>> for élément in séquence:
        >>>     #maPremiereInstruction
        >>>     #maSecondeInstruction</code>
</pre>
                    Lors de l'exécution du programme, celui-ci arrive à
                    l'instruction <span class="code">for</span>.<br>
                    Il affecte alors le premier élément de
                    <span class="code">séquence</span> à
                    <span class="code">élément</span>, puis exécute les
                    instructions internes à la boucle.<br>
                    Une fois arrivé à la fin du bloc d'instructions, l'élément
                    suivant est affecté à <span class="code">élément</span>, et
                    les instructions sont exécutées.<br>
                    Dès que tous les éléments de la séquence ont été affectés,
                    le programme &lsquo;<span class="italic">sort</span>&rsquo;
                    de la boucle.
                </p>
                <p>
                    Voici un exemple affichant les lettres d'un mot les unes en
                    dessous des autres :
<pre class="language-python">
    <code class="language-python">        >>> mot = 'Bonjour'
        >>> for lettre in mot:
        >>>     print(lettre)</code>
</pre>
                </p>

                <blockquote>
                    <span class="underline">Information :</span><br><br>
                    On apprend ici que les chaînes de caractères sont des
                    séquences (<span class="italic">ou collections ordonnées
                    d'éléments</span>).<br>
                    Il existe d'autres types de séquences comme les
                    <span class="bold">tuples</span> ou les
                    <span class="bold">listes</span>.
                </blockquote>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h4>Un dernier avant le quizz !</h4>

                <fieldset class="qcm5">
                    <legend>Question 1</legend>
                    <label>La boucle utilisée sur les séquences s'appelle :</label><br><br>
                    <input type="radio" name="qcm5" id="qcm5_1" value="1" checked="checked">
                    <label for="qcm5_1"><span class="bold"><span class="code">while</span></span>
                    <span class="concealed wrong">Non</span></label><br><br>

                    <input type="radio" name="qcm5" id="qcm5_2" value="2">
                    <label for="qcm5_2"><span class="bold"><span class="code">for</span></span>
                    <span class="concealed ok">C'est bon !</span></label><br><br>

                    <input type="radio" name="qcm5" id="qcm5_3" value="3">
                    <label for="qcm5_3"><span class="bold"><span class="code">foreach</span></span>
                    <span class="concealed wrong">Mauvais</span></label>
                </fieldset><br>

                <fieldset class="qcm6">
                    <legend>Question 2</legend>
                    <label>Choisissez l'affirmation erronée !</label><br><br>
                    <input type="radio" name="qcm6" id="qcm6_1" value="1" checked="checked">
                    <label for="qcm6_1"><span class="bold">Les séquences sont des collections ordonnées d'éléments.</span>
                    <span class="concealed wrong">Et non</span></label><br><br>

                    <input type="radio" name="qcm6" id="qcm6_2" value="2">
                    <label for="qcm6_2"><span class="bold">Les chaînes de caractères sont des séquences.</span>
                    <span class="concealed wrong">Faux, c'est vrai !</span></label><br><br>

                    <input type="radio" name="qcm6" id="qcm6_3" value="3">
                    <label for="qcm6_3"><span class="bold">Les booléens sont des séquences.</span>
                    <span class="concealed ok">C'est vrai que c'est faux !</span></label>
                </fieldset>

                <h4>Bonne chance ! 🤞🏻</h4>
            </div>
        </div>
        <div class="cslide-slide">
            <div class="slide-content">
                <h3>Mots-clés</h3>

                <p>
                    Faites toujours bien attention à ce que votre boucle dispose
                    d'une condition de sortie afin d'éviter les boucles infinies.<br>
                    La majorité des langages propose ces deux instructions
                    spéciales: <span class="code">break</span> et
                    <span class="code">continue</span>.<br>
                    <span class="italic">Vous ne les utiliserez peut-être pas
                    beaucoup, mais vous devez au moins savoir qu'elles existent…
                    et à quoi elles servent.</span>
                </p>
                <p>
                    <span class="wrong">Attention !</span> L'utilisation de ces
                    deux mots-clés est <span class="bold">très déconseillée</span>:
                    il est préférable de réunir toutes les conditions d'arrêt de
                    la boucle en un seul point.<br>
                    Il faut cependant remarquer que,
                    <span class="bold">dans certains cas</span>, il est
                    préférable d'utiliser un <span class="code">break</span>
                    plutôt que de compliquer le code uniquement pour respecter
                    ce principe.
                </p>
                <p>
                    &ldquo;<span class="italic">Le tout est de trouver un
                    équilibre entre la condition de sortie et la lisibilité du
                    code.</span>&rdquo;
                </p>

                <h4><span class="code">break</span></h4>

                <p>
                    Ce mot-clé permet d'arrêter une boucle quelle que soit la
                    condition de la boucle.<br>
                    Python &lsquo;<span class="italic">sort</span>&rsquo;
                    immédiatement de la boucle et exécute le code qui suit,
                    s'il y en a.
                </p>
                <p>
                    Voici un exemple d'utilisation :
<pre class="language-python">
    <code class="language-python">        >>> while True: # toujours vrai donc boucle infinie
        >>>     stop = input('Tapez "Q" pour quitter : ')
        >>>     if stop == 'Q':
        >>>         break</code>
</pre>
                </p>

                <h4><span class="code">continue</span></h4>

                <p>
                    Permet de continuer une
                    boucle, en repartant directement à la ligne du
                    <span class="code">while</span> ou du
                    <span class="code">for</span>.
                </p>
                <p>
                    Exemple de code n'affichant que les nombres pairs de 1 à 10 :
<pre class="language-python">
    <code class="language-python">        >>> n = 1
        >>> while n < 11:
        >>>     if n % 2 == 1:
        >>>         continue
        >>>     print(n)
        >>>     n += 1</code>
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
