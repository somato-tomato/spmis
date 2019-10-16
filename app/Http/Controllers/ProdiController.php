<?php

namespace App\Http\Controllers;

use App\Fakultas;
use App\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{

    public function buat($id)
    {
        $data = Fakultas::findOrfail($id);
        return view('prodi.create', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fakultas::latest()->paginate(5);

        return view('prodi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaProdi'    =>  'required',
            'kodeProdi'  =>  'required',
            'idFakultas'  =>  'required'
        ]);

        $form_data = array(
            'namaProdi'    =>   $request->namaProdi,
            'kodeProdi'  =>   $request->kodeProdi,
            'idFakultas'  =>   $request->idFakultas
        );

        Prodi::create($form_data);

        return redirect('prodi')->with('success', 'Data is successfully updated');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
