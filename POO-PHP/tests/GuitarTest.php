<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Guitar;

class GuitarTest extends TestCase
{
    public function test_Guitarra_tiene_6_cuerdas()
    {
        // Arrange
        $guitar = new Guitar('verde',true );
        // Action
        $sut = $guitar->strings;
        // Assert
        $this->assertEquals(6, $sut);
    }

    public function test_Guitarra_tiene_color()
    {
   
        $guitar = new Guitar('verde', true);

        $sut = $guitar->color;

        $this->assertEquals('verde', $sut);
    }

    public function test_Guitarra_es_electrica()
    {
        $guitar = new Guitar('rojo', true);

        $sut = $guitar->electric;

        $this->assertTrue($sut);
    }
    public function test_Guitarra_no_es_electrica()
    {
        $guitar = new Guitar('amarillo', false);

        $sut = $guitar->electric;

        $this->assertFalse($sut);
    }
    public function test_Guitarra_puede_cambiar_color()
    {
        $guitar = new Guitar('rojo', true);

        $guitar->color = 'negro';

        $sut = $guitar->color;

        $this->assertEquals('negro', $sut);  
    }

}

?>