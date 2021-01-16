<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MencatatKejadianBencanaTest extends DuskTestCase
{
    /**
     * A Dusk test exam ple.
     *
     * @return void
     */
    public function testInput()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tambahkejadianbencana')
                ->type('nama_bencana', 'Gempa Bumi Sulbar')
                ->select('dropdownJenisBencana', '2')
                ->type('deskripsi', 'Kejadian gempa bumi sulbar tahun 2021, merusak 230 pemukiman warga.')
                ->attach('photo', storage_path('app/public/placeholder-1.png'))
                ->check('checkboxLogistik[]')
                ->press('SIMPAN')
                ->assertSee('Selamat! Kejadian anda telah direkam!');
        });
    }

    public function testEmptyDescription()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tambahkejadianbencana')
                ->type('nama_bencana', 'Gempa Bumi Sulbar')
                ->select('dropdownJenisBencana', 'Gempa Bumi')
                ->attach('photo', storage_path('app/public/placeholder-1.png'))
                ->check('checkboxLogistik[]')
                ->press('SIMPAN')
                ->assertSee('Rekaman anda gagal! Silahkan isi dengan benar dan pastikan tidak ada yang kosong!');
        });
    }
}
