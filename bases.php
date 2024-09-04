<?php
    $myPage = "bases";
    require 'partials/head.php';
?>
    <h1>Ici ma page base!</h1>
    <?php 
        echo '<h2>les balises</h2>';
        echo '<p class="fst-italic text-secondary">Ici je suis dans les balises php.</p>';
    ?>
    <p class="fs-3"> 
        Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
        En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
    </p>
    <?php
        echo '<p class="fs-4">echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML. </p>';
    ?>
    <h3>Différents affichage</h3>
    <?php
        echo '<p>Ici c\'est un echo</p>';
        print '<p>Ici c\'est un print</p>';
    ?>
    <p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
    <?php
        echo '<p>valeur 1</p>', '<p>valeur 2</p>';
        print '<p>La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</p>';
    ?>
    <h3>D'autre affichages</h3>
    <ul>
        <li>print_r, affiche des informations à propos d'une variable, de m'anière à ce qu'elle soit lisible.</li>
        <li>var_dump, affiche les informations structurées d'une variables, y compris son type et sa valeur.</li>
    </ul>
<?php
    require 'partials/footer.php'
?>