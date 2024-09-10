<?php

namespace App;

class Validateur
{
    // Méthode qui vérifie si un nombre est strictement positif

    public function verifieNombre(int $nombre) : bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            return false;
        }
        return true;
    }

    public function verifieNombre2(int $nombre) : bool
    {
        // On teste toujours les cas d'erreurs en premier
        if ($nombre <= 0) {
            // Lancer une Exception
            throw new \Exception("Le nombre est invalide");
        }
        return true;
    }

    public function verifieMotDePasse(string $motDePasse) : bool
    {
        if (strlen($motDePasse)<8) {
            throw new \Exception("Le mot de passe doit contenir au moins 8 caractères");
        }
        $chiffre=false;
        $majuscule=false;
        $minuscule=false;
        for ($i=0;$i<strlen($motDePasse);$i++) {
            $char = $motDePasse[$i];
            if ($char >= '0' && $char <= '9') {
                $chiffre=true;
            }
            if ($char >= 'A' && $char <= 'Z') {
                $majuscule=true;
            }
            if ($char >= 'a' && $char <= 'z') {
                $minuscule=true;
            }
        }
        if (!$majuscule) {
            throw new \Exception("Le mot de passe doit contenir au moins une majuscule");
        } elseif (!$minuscule) {
            throw new \Exception("Le mot de passe doit contenir au moins une minuscule");
        } elseif (!$chiffre) {
            throw new \Exception("Le mot de passe doit contenir au moins un chiffre");
        }
        return true;
    }
}