<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class KelolaLogistikTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCorrectSubmit()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/kelolalogistik')
                ->type('banyak_selimut', '300')
                ->type('banyak_masker', '700')
                ->type('banyak_mie', '90')
                ->type('banyak_beras', '40')
                ->type('banyak_gandum', '30')
                ->type('banyak_kasur', '325')
                ->type('kebutuhan_lain', 'Susu Formula untuk Balita')
                ->press('Perbarui')
                ->assertPathIs('/lihatbencana');
        });
    }

    public function testNonIntegerValue()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/kelolalogistik')
                ->type('banyak_selimut', 'satu')
                ->type('banyak_masker', 'dua')
                ->type('banyak_mie', 'tiga')
                ->type('banyak_beras', 'empat')
                ->type('banyak_gandum', 'lima')
                ->type('banyak_kasur', 'enam')
                ->type('kebutuhan_lain', 'tidak ada')
                ->press('Perbarui')
                ->assertSee('Anda harus memasukkan banyak donasi dengan digit angka');
        });
    }

    public function testEmptyOnSubmit()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/kelolalogistik')
                ->press('Perbarui')
                ->assertPathIs('/lihatbencana');
        });
    }
}
