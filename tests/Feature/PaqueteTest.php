<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaqueteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testTramiteCosto()
    {
        $this->visit('paquetes/agregar')
        ->type("Paquete80","nombre")
        ->type("120","costo")
        ->press('Agregar')
        ->see("Paquete80 ha sido agregado");
    }
    public function testSinTramiteCosto()
    {
        $this->visit('paquetes/agregar')
        ->type("140","costo")
        ->press('Agregar')
        ->see("El campo nombre es obligatorio");
}
}