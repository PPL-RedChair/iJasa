<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use Illuminate\Http\Request;

class RincianDistribusiController extends Controller
{
    public function show()
    {
        $bencana = Bencana::with('logistik')->first();

        return view('donasi.show', compact('bencana'));
    }
}
