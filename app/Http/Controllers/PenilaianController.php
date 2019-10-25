<?php

namespace App\Http\Controllers;

use App\Isi;
use App\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenilaianController extends Controller
{

    public function tambahnilai($id)
    {
        $find = Isi::findOrfail($id);

        return view('nilai.create',compact('find'));
    }

    public function simpan(Request $request)
    {
        $rules =[];

        $form_data = array(
            'idIsi'    =>   $request->idIsi,
            'angka'    =>   $request->angka,
            'keterangan'  =>   $request->keterangan
        );

        foreach ($form_data as $key=>$value){
            $rules ["idIsi.{$key->idIsi}"]='required';
            $rules ["angka.{$key->angka}"]='required';
            $rules ["keterangan.{$key->keterangan}"]='required';
        }
        $validator=Validator::make($request->all(), $rules);
        if ($validator->passes()){
            foreach($request->input($form_data) as $key => $value){
                Penilaian::create($value);
            }

            return view('sisi');
        }
    }

    public function index()
    {
        //
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
