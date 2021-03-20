<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalcularTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testcomprobarArea()
    {
        $response = $this->post('/area', ['radio' => 4]);

        $response2 = $this->get('/');
        $response2->assertSee('El area del círculo de radio 4 m es: 50.265482457437 m^2.');
    }

    



    public function testcomprobarPerimetro()
    {
        $response = $this->post('/perimetro',['radio2'=>5]);

        $response2 = $this->get('/');
        $response2->assertSee('El perimetro del círculo de radio 5 m es: 47.123889803847 m.');
    }
}
