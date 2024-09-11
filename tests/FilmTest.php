<?php
require_once "vendor/autoload.php";
use App\Film;
use App\Acteur;
use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase {

    private Film $film;
    protected function setUp() : void
    {
        // Cette méthode est appelée lors de l'exécution de chaque test
        $this->film = new Film("oui","paul",new DateTime("2023-02-02"));
    }

    public function testOK()
    {
        // Arrange

        // Act

        // Assert
        $this->assertTrue(true);
    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function ajouterActeur_ActeurExistant_Exception()
    {
        // Vérification de l'exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("L'acteur existe déjà");
        // Arrange
        $acteur = new Acteur("paul","walker");
        $this->film->ajouterActeur($acteur);
        // Act
        $this->film->ajouterActeur($acteur);
        // Assert
    }
    #[\PHPUnit\Framework\Attributes\Test]
    public function getAnciennete_DateEgale_True()
    {
        // Arrange
        $anneeDifference = 1;
        // Act
        $resultat = $this->film->getAnciennete();
        // Assert
        $this->assertEquals($anneeDifference,$resultat);
    }



}