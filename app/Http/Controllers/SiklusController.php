<?php

namespace App\Http\Controllers;

use App\Siklus;
use Illuminate\Http\Request;

class SiklusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siklus::latest()->paginate(5);

        return view('siklus.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siklus.create');
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
            'nomor'  =>  'required',
            'nama'    =>  'required',
            'tahun' =>  'required',
            'sk' =>  'required',
            'tanggal' =>  'required'
        ]);

        $form_data = array(
            'nomor'  =>   $request->nomor,
            'nama'    =>   $request->nama,
            'tahun' =>   $request->tahun,
            'sk' =>   $request->sk,
            'tanggal' =>   $request->tanggal
        );

        Siklus::create($form_data);

        return redirect('akademik')->with('success', 'Data Added successfully.');
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
        $data = Siklus::findOrFail($id);
        return view('siklus.edit', compact('data'));
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
        $request->validate([
            'nomor'  =>  'required',
            'nama'    =>  'required',
            'tahun' =>  'required',
            'sk' =>  'required',
            'tanggal' =>  'required'
        ]);

        $form_data = array(
            'nomor'  =>   $request->nomor,
            'nama'    =>   $request->nama,
            'tahun' =>   $request->tahun,
            'sk' =>   $request->sk,
            'tanggal' =>   $request->tanggal
        );

        Siklus::whereId($id)->update($form_data);

        return redirect('akademik')->with('success', 'Data is successfully updated');
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
