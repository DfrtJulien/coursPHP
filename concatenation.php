<?php
    require 'partials/head.php';
?>
    <h1 class="ps-4">La concaténation</h1>
<?php
    $x = 'Bonjour';
    $y = 'Tout le monde !';

    // Dans l'instruction echo on peut séparer les éléments à afficher par une virgule. 
    // Cette syntaxe est spécifique à echo et ne marche pas avec print.
    echo '<p class="ps-4">' . $x . ' ' . $y  . '</p>';
    echo '<p class="ps-4">' . $x , ' ' . $y  , '</p>';

   //Ici je créer une variable prenom je lui donne la valeur Abdou
   $prenom = 'Abdou';
   //Ici j'appel ma variable prenom je lui donne une nouvelle valeur Sarah
   $prenom = 'Sarah';
   // Ici j'affiche la valeur de ma variable prenom
   echo "<p class='ps-4'>$prenom</p>";

   //Ici je créer une variable prenomBis je lui donne la valeur Mathis
   $prenomBis = 'Mathis';
   //Ici j'appel ma varible prenomBis et je lui AJOUTE la valeur Fatima
   $prenomBis .= ' Fatima';
   //Ici j'appel ma varible prenomBis et je lui AJOUTE la valeur Radouane
   $prenomBis .= ' Radouane';

   //Ici j'affiche dans un p les valeurs donc "Mathis Fatima Radouane"
   echo "<p class='ps-4'>$prenomBis</p>"
?>
    <h2>Guillemets et les quotes</h2>
<?php
    $message = 'ajourd\'hui';

    $message = "ajourd'hui";

    echo '<p class="ps-4">$message</p>';
    echo "<p class='ps-4'>$message</p>";
?>
<?php
    require 'partials/footer.php';
?>