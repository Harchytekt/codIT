<h2>Introduction</h2>
<section id="cslide-slides" class="cslide-slides-master clearfix">
    <div class="cslide-slides-container clearfix">
        <div class="cslide-slide" id="intro">
            <div class="slide-content">
                <h3>Qu’est-ce qu’un algorithme ?</h3>
                <p>
                    <span class="bold underline">Voici une définition simple d’un algorithme</span> :
                    c’est une <span class="bold">suite d’instructions</span> qui, quand elles
                    sont exécutées correctement, aboutissent au résultat attendu.<br>
                    C’est un énoncé dans un <span class="bold">langage clair</span>, bien
                    <span class="bold">défini</span> et <span class="bold">ordonné</span> qui
                    permet de <span class="bold">résoudre un problème</span>, le plus souvent par calcul.
                </p>
                <blockquote>
                    L’algorithme est donc une recette pour qu’un programme d’ordinateur
                    puisse donner un résultat donné.
                </blockquote>

                <h4> Mais encore ? 🤔</h4>

                <p>
                    Un programme est écrit à l’aide de <span class="italic">langages de
                        programmation</span> dont les instructions permettent, par exemple, de :
                    <ul style="list-style-type: square;">
                        <li>
                            réaliser des opérations mathématiques (additions, soustraction,…).
                        </li>
                        <li>
                            obtenir des données au clavier, depuis un fichier,…
                        </li>
                        <li>
                            afficher des données à l’écran ou écrire dans un fichier.
                        </li>
                        <li>
                            vérifier si certaines conditions sont respectées et exécuter la
                            séquence d’instructions appropriée.
                        </li>
                        <li>
                            réaliser une tâche de manière répétitive.
                        </li>
                    </ul>
                </p>

                <h3>Qu’est-ce qu’un langage de programmation ?</h3>

                <p>
                    On distingue deux types de langages :
                    <ul style="list-style-type: decimal;">
                        <li>
                            <span class="bold">ceux de haut niveau</span>, compréhensibles par
                            l’humain : Python, Java, C, PHP, Perl,…<br>
                            <span class="italic">Il s’agit souvent d'un langage formel avec des
                            mots anglais.</span>
                        </li>
                        <li>
                            <span class="bold">ceux de bas niveau</span>, exécutables par un
                            ordinateur : Atmel, MIPS32,…<br>
                            <span class="italic">Nommés langages machine ou assembleur.</span>
                        </li>
                    </ul>
                </p>

                <p>
                    Les avantages des langages de haut niveau sont :
                    <ul>
                        <li>
                            une facilité d’écriture et de <span class="italic">(re)</span>lecture,
                        </li>
                        <li>
                            une rapidité d’écriture,
                        </li>
                        <li>
                            un code plus court,
                        </li>
                        <li>
                            un code <span class="italic">portable</span> ou multi-plateforme.
                            <ul>
                                <li>
                                    En effet, ils peuvent être utilisés sur différents types
                                    d’ordinateurs avec peu ou pas de modifications.
                                </li>
                                <li>
                                    À l’inverse des programmes de bas niveau qui ne sont
                                    exécutables que sur un type bien particulier d’ordinateurs
                                    et doivent être réécrits pour d’autres.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </p>

                <blockquote>
                    En plus de pouvoir crééer des programmes, le code  permet de créer des jeux
                    et des sites web (<span class="bold">à l’aide de langages spécialisés</span>).
                </blockquote>

                <h3>Pourquoi apprendre le Python ?</h3>
                <p>
                    <ul>
                        <li>
                            <span class="bold">Simplicité</span> : le Python est simple.
                        </li>
                        <li>
                            <span class="bold">Portabilité</span> : il est indépendant de la
                            plateforme, il est même préinstallé sur la plupart des systèmes
                            d'exploitation.
                        </li>
                        <li>
                            <span class="bold">Bibliothèque</span> : le langage intègre de base
                            un ensemble de libraires très complet. Que ce soit pour faire du Web,
                            des calculs scientifiques ou même les deux.
                        </li>
                        <li>
                            <span class="bold">Lisibilité</span> : avec son principe d’indentation,
                            les codes Python sont généralement très simples à lire.
                        </li>
                        <li>
                            <span class="bold">Gratuité</span> : l'éditeur (IDLE) ainsi que
                            l'interpréteur sont gratuits.
                        </li>
                    </ul>
                </p>

                <h4>À quoi ça ressemble ?</h4>

                <p>
                    Ceci est le <span class="bold italic">Hello world!</span> en Python 3, il
                    est d'usage de le présenter afin d'illustrer assez rapidement la syntaxe
                    superficielle d'un langage.


<pre class="language-python">
    <code class="language-python">        print("Hello world!")</code>
</pre>

                </p>

                <p>
                    Et voici un code plus complexe qui calcule la factorielle d'un nombre :

<pre class="language-python">
    <code class="language-python">        def factorial (n):
            # Retourne la factorielle de n
            if (n == 0 or n == 1):
                return 1
            else:
                return n * factorial (n - 1)</code>
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
