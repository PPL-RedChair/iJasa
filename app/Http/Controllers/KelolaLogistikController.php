<?php

namespace App\Http\Controllers;

use App\Models\Logistik;
use Illuminate\Http\Request;

class KelolaLogistikController extends Controller
{
    public function kelola()
    {
        $logistik = Logistik::with('bencana')->first();

        return view('logistik.edit', compact('logistik'));
    }

    public function perbarui(Request $request)
    {
        $rule = 'required|numeric';
        $request->validate([
            'banyak_selimut' => $rule,
            'banyak_masker' => $rule,
            'banyak_mie' => $rule,
            'banyak_beras' => $rule,
            'banyak_gandum' => $rule,
            'banyak_kasur' => $rule,
        ]);

        return redirect('/lihatbencana');
    }
}
