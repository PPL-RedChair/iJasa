<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CatatJumlahPengungsiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCorrectSavePengungsi()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/catatpengungsi')
                ->select('dropdownbencana', 'Gunung Merapi')
                ->type('jumlah_pengungsi', '300')
                ->type('pengungsi_dewasa', '200')
                ->type('pengungsi_anak', '30')
                ->type('pengungsi_lansia', '50')
                ->type('pengungsi_bumil', '10')
                ->type('pengungsi_balita', '10')
                ->type('banyak_selimut', '200')
                ->type('banyak_beras', '10')
                ->type('banyak_masker', '600')
                ->type('banyak_gandum', '10')
                ->type('banyak_mie', '70')
                ->type('banyak_kasur', '300')
                ->type('kebutuhan_lain', 'tidak ada')
                ->press('SIMPAN')
                ->assertPathIs('/lihatbencana');
        });
    }

    public function testEmptyBencana()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/catatpengungsi')
                ->type('jumlah_pengungsi', '300')
                ->type('pengungsi_dewasa', '200')
                ->type('pengungsi_anak', '30')
                ->type('pengungsi_lansia', '50')
                ->type('pengungsi_bumil', '10')
                ->type('pengungsi_balita', '10')
                ->type('banyak_selimut', '200')
                ->type('banyak_beras', '10')
                ->type('banyak_masker', '600')
                ->type('banyak_gandum', '10')
                ->type('banyak_mie', '70')
                ->type('banyak_kasur', '300')
                ->type('kebutuhan_lain', 'tidak ada')
                ->press('SIMPAN')
                ->assertSee('Anda harus memilih bencana');
        });
    }

    //
    public function testEmptyJumlahPengungsi()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/catatpengungsi')
                ->select('dropdownbencana', 'Gunung Merapi')
                ->type('pengungsi_dewasa', '200')
                ->type('pengungsi_anak', '30')
                ->type('pengungsi_lansia', '50')
                ->type('pengungsi_bumil', '10')
                ->type('pengungsi_balita', '10')
                ->type('banyak_selimut', '200')
                ->type('banyak_beras', '10')
                ->type('banyak_masker', '600')
                ->type('banyak_gandum', '10')
                ->type('banyak_mie', '70')
                ->type('banyak_kasur', '300')
                ->type('kebutuhan_lain', 'tidak ada')
                ->press('SIMPAN')
                ->assertSee('Anda harus memasukkan jumlah pengungsi');
        });
    }

    public function testEmptyLogistik()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/catatpengungsi')
                ->select('dropdownbencana', 'Gunung Merapi')
                ->type('jumlah_pengungsi', '300')
                ->type('pengungsi_dewasa', '200')
                ->type('pengungsi_anak', '30')
                ->type('pengungsi_lansia', '50')
                ->type('pengungsi_bumil', '10')
                ->type('pengungsi_balita', '10')
                ->press('SIMPAN')
                ->assertSee('Anda harus memasukkan kebutuhan logistik');
        });
    }
}
