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

    public function index()
    {
        $data = Penilaian::all();
        return view('nilai.view',compact('data'));
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
            'addmore.*.idIsi' => 'required',
            'addmore.*.keterangan' => 'required',
            'addmore.*.angka' => 'required',
        ]);

        ///ddd($request);

        foreach ($request->addmore as $key => $value) {
            Penilaian::create($value);
        }

        return redirect()->route('sisi');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = Penilaian::findOrfail($id);

        return view('nilai.view', compact('find'));
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
