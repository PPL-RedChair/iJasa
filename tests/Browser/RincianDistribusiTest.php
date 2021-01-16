<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RincianDistribusiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testButtonDonasi()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/rinciandistribusi')
                ->press('Donasi')
                ->assertPathIs('/rencanadonasi');
        });
    }

    public function testCardBencana()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/rinciandistribusi')
                ->clickLink('Button')
                ->assertPathIs('/lihatbencana');
        });
    }
}
