<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\Logistik;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function PHPUnit\Framework\isNull;

class LogistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $bencana = Bencana::all();
        return view('logistik.create', compact('bencana'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $request->validate([
            'dropdownbencana' => 'required',
            'jumlah_pengungsi' => 'required',
            'banyak_selimut' => 'required',
            'banyak_beras' => 'required',
            'banyak_masker' => 'required',
            'banyak_gandum' => 'required',
            'banyak_mie' => 'required',
            'banyak_kasur' => 'required',
        ]);

        return redirect('/lihatbencana');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Logistik $logistik
     * @return Response
     */
    public function show(Logistik $logistik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Logistik $logistik
     * @return Response
     */
    public function edit(Logistik $logistik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Logistik $logistik
     * @return Response
     */
    public function update(Request $request, Logistik $logistik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Logistik $logistik
     * @return Response
     */
    public function destroy(Logistik $logistik)
    {
        //
    }
}
