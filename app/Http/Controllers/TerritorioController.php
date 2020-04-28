<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Territorio;

class TerritorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $territorios = DB::table('territorios')->get();
        return view('territorios.index', ['territorios' => $territorios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $territorios = DB::table('territorios')->select('IDTerritorio')->orderBy('IDTerritorio','DESC')->limit(1)->get();

        return view('territorios.create', compact('territorios'));
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

        $territorios = \App\Models\Territorio::create($data);

        return redirect()->route('territorios.index');
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
        $territorio = \App\Models\Territorio::where('IDTerritorio', $id)->first();

        return view('territorios.edit', compact('territorio'));
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

        $territorio = \App\Models\Territorio::where('IDTerritorio', $id)->first();
        $territorio->update($data);

        return redirect()->route('territorios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Territorio::where('IDTerritorio', $id)->delete();
    }
}
