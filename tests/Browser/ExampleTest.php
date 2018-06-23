<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testCreationOfCar()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/car/new')
                ->type('brand', 'Mercedes')
                ->type('model', '2000')
                ->type('price', 12.2)
                ->press('Add')
                ->pause(1000)
                ->assertSee('Success');
        });
    }

    public function testFailedCreationOfCar()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/car/new')
                ->type('brand', '')
                ->type('model', '2000')
                ->type('price', 12.2)
                ->press('Add')
                ->pause(1000)
                ->assertSee('Error');
        });
    }
}
