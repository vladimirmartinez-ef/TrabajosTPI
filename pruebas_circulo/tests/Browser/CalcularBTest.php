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
}
