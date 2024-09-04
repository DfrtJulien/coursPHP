<?php
$myPage = "constante";
    require 'partials/head.php';
?>
    <h1 class="ps-4">Les constantes</h1>
<?php
    echo '<p class="ps-4">Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l\'exécution du ou des scripts. Utile pour par exemple conserver les paramètres de connexion à la BDD sans pouvoir les modifier une fois définis.</p>';
    echo '<p class="ps-4">Par convention les constantes sont toujours écrites en majuscules.<br>
    On déclare une constante avec la fonction prédéfinie define()</p>';

    //Ici on déclare une constante du nom de CAPITAL avec la valeur Paris
    define('CAPITAL', 'Paris');

    //Ici on affiche la valeur de la constante CAPITAL
    echo '<p class="ps-4">' . CAPITAL . '</p>';
?>
    <h2 class="ps-4">Constante magique</h2>
<?php
    echo '<p class="ps-4">Il y a neuf constantes magiques qui changent suivant l\'emplacement où elles sont utilisées.</p>';
    // affiche le chemin complet vers le dossier de notre fichier
    echo __DIR__ . '<br>';
    // affiche le chemin complet vers le fichier (dossier + nom du fichier)
    echo __FILE__ . '<br>';
?>
    <button type="button" class="btn btn-danger ms-4 mt-5">
        <a href="https://www.php.net/manual/fr/language.constants.magic.php#constant.dir" class="text-white">Documentation PHP</a>
    </button>
<?php
    require 'partials/footer.php';
?>