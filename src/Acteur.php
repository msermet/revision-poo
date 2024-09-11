<?php
namespace App;
class Acteur {
    // Attributs
    private string $prenom;
    private string $nom;

    // Méthodes
    // Constructeur permettant de créer des instances d'une classe
    // INSTANCIATION

    public function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }



}