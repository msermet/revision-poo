<?php

namespace App\Entites;

class Equipe
{
    private string $nom;
    private int $nombreLikes;

    /**
     * @param string $nom
     * @param int $nombreLikes
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nombreLikes = 0;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getNombreLikes(): int
    {
        return $this->nombreLikes;
    }

    public function incrementerNombreLikes(): void
    {
        $this->nombreLikes++;
    }
}