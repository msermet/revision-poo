<?php
require_once "vendor/autoload.php";

use App\Validateur;

$validateur = new Validateur();
$nombre = 10;
if ($validateur->verifieNombre($nombre)) {
    echo "Le nombre $nombre est valide";
} else {
    echo "Le nombre $nombre est invalide";
}

echo PHP_EOL;

// Avec gestion des exceptions
$nombre = -10;
try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}

echo PHP_EOL;

$valid = new Validateur();
$mdp = "HIUFGUYGUj5";
try {
    // Code surveillé (susceptible de lancer une exception)
    $valid->verifieMotDePasse($mdp);
    echo "Le mot de passe $mdp est valide";
} catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}
