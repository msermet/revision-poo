<?php
require_once "vendor/autoload.php";
use App\Personne;
use App\Entites\Equipe;
use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase {

    private Personne $personne;
    protected function setUp() : void
    {
        // Cette méthode est appelée lors de l'exécution de chaque test
        $this->personne = new Personne("Sermet");
    }

    public function testOK()
    {
        // Arrange

        // Act

        // Assert
        $this->assertTrue(true);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function liker_AjoutNombreLike_True()
    {
        // Arrange
        $equipe = new Equipe("PSG");
        $resultat=1;
        // Act
        $this->personne->liker($equipe);
        // Assert
        $this->assertEquals($equipe->getNombreLikes(),$resultat);
    }



}