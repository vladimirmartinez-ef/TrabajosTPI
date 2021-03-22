<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CalcularBTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('radio', 4)
                    ->press('Area')
                    ->assertSee('El area del círculo de radio 4 m es: 50.265482457437 m^2.');
        });
    }





    public function testExample2()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('radio2', 5)
                    ->press('Perimetro')
                    ->assertSee('El perimetro del círculo de radio 5 m es: 47.123889803847 m.');
        });
    }

    


    public function testExample3()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('radio', '')
                    ->press('Area')
                    ->assertSee('El radio es obligatorio');
        });
    }



    public function testExample4()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('radio2', '')
                    ->press('Perimetro')
                    ->assertSee('El radio es obligatorio');
        });
    }

}
