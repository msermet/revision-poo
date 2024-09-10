<?php
require_once "vendor/autoload.php";
use App\Validateur;
use PHPUnit\Framework\TestCase;

class ValidateurTest extends TestCase {

    private \App\Validateur $validateur;
    protected function setUp() : void
    {
        // Cette méthode est appelée lors de l'exécution de chaque test
        $this->validateur = new Validateur();
    }

    public function testOK()
    {
        // Arrange

        // Act

        // Assert
        $this->assertTrue(true);
    }

    public function testVerifieNombre_NombrePositif_true()
    {
        // Arrange
        $nombre = 10;
        // Act
        $resultat = $this->validateur->verifieNombre2($nombre);
        // Assert
        $this->assertTrue($resultat);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function verifieNombre_NombreNegatifZero_Exception()
    {
        // Vérification de l'exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nombre est invalide");
        // Arrange
        $nombre = -10;
        // Act
        $this->validateur->verifieNombre2($nombre);
        // Assert
    }

}