<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transportadora;

class TransportadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportadoras =  Transportadora::all();
        return view('transportadoras.index', ['transportadoras' => $transportadoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportadoras = DB::table('transportadoras')->select('IDTransportadora')->orderBy('IDTransportadora','DESC')->limit(1)->get();

        return view('transportadoras.create', compact('transportadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $transportadoras = \App\Models\Transportadora::create($data);

        return redirect()->route('transportadoras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportadora = \App\Models\Transportadora::where('IDTransportadora', $id)->first();

        return view('transportadoras.edit', compact('transportadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $transportadora = \App\Transportadora::where('IDTransportadora', $id)->first();
        $transportadora->update($data);

        return redirect()->route('transportadoras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Transportadora::where('IDTransportadora', $id)->delete();
    }
}
