<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RencanaPemberianDonasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCorrectPemberianDonasi()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rencanadonasi')
                ->type('banyak_beras', '10')
                ->type('banyak_uang', '1000000')
                ->type('banyak_pakaian_bekas', '200')
                ->press('Rencanakan')
                ->assertPathIs('/donasi');
        });
    }

    public function testInCorrectPemberianDonasi()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rencanadonasi')
                ->type('banyak_beras', 'sepuluh')
                ->type('banyak_uang', 'satu juta')
                ->type('banyak_pakaian_bekas', '2 ratus')
                ->press('Rencanakan')
                ->assertSee('Anda harus memasukkan banyak donasi dengan digit angka');
        });
    }

    public function testEmptyPemberianDonasi()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rencanadonasi')
                ->press('Rencanakan')
                ->assertSee('Anda harus memasukkan setidaknya satu rencana donasi');
        });
    }
}
