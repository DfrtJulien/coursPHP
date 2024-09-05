<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP - <?php echo $myPage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar bg-dark py-4">
            <div class="d-flex">
                <a class="navbar-brand text-light" href="#">
                    <img src="/public/img/logo_poleS.png" alt="Logo lepoles" width="30" height="24">
                    Les bases de PHP
                </a>
                <div>
                    <?php
                    if ($myPage !== 'acceuil') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/index.php" class="text-white">Accueil</a></button>';
                    }; 
                    if ($myPage !== 'bases') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/bases.php" class="text-white">Base</a></button>';
                    }; 
                    if ($myPage !== 'variable') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/variables.php" class="text-white">Variables</a></button>';
                    }; 
                    if ($myPage !== 'constante') {
                        echo ' <button class="btn bg-danger mx-3" type="submit"><a href="/constantes.php" class="text-white">Constantes</a></button>';
                    }; 
                    if ($myPage !== 'concatenation') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/concatenation.php" class="text-white">Concaténation</a></button>';
                    }; 
                    if ($myPage !== 'arithmetique') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/arithmetique.php" class="text-white">L\'arithmétique</a></button>';
                    }; 
                    if ($myPage !== 'condition') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/condition.php" class="text-white">Les conditions</a></button>';
                    };
                    if ($myPage !== 'tableaux') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/tableaux.php" class="text-white">Les tableaux</a></button>';
                    };
                    if ($myPage !== 'boucle') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/boucles.php" class="text-white">Les Boucles</a></button>';
                    };
                    if ($myPage !== 'date') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/date.php" class="text-white">Les Dates</a></button>';
                    };
                    if ($myPage !== 'inclusion') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/inclusion.php" class="text-white">Les inclusion</a></button>';
                    };
                    if ($myPage !== 'fonction') {
                        echo '<button class="btn bg-danger mx-3" type="submit"><a href="/fonction.php" class="text-white">Les fonction</a></button>';
                    };
                    ?>
                </div>
            </div>
        </nav>
    </header>