<?php
require_once '../src/Film.php';

// Instancier la classe Film
$film1 = new Film("Andy le con","Clement",DateTime::createFromFormat("d/m/Y","01/12/2023"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnciennete();
echo PHP_EOL;
$film1->ajouterActeur(new Acteur("jean","dupond"));
$film1->ajouterActeur(new Acteur("christophe","durand"));
$film1->ajouterActeur(new Acteur("anne","martin"));
print_r($film1->getActeurs());
// Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur) {
    echo $acteur->getNom();
    echo PHP_EOL;
}
