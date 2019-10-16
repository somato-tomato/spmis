<?php

namespace App\Http\Controllers;

use App\Akademik;
use App\Tahun;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Akademik::latest()->paginate(5);

        return view('akademik.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahuns = Tahun::all();


        return view('akademik.create', compact('tahuns'));
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
            'namaAkademik'  =>  'required',
            'tahunJalan'    =>  'required',
            'semesterJalan' =>  'required'
        ]);

        $form_data = array(
            'namaAkademik'  =>   $request->namaAkademik,
            'tahunJalan'    =>   $request->tahunJalan,
            'semesterJalan' =>   $request->semesterJalan
        );

        Akademik::create($form_data);

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
        $data = Akademik::findOrFail($id);
        return view('akademik.edit', compact('data'));
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
            'namaAkademik'  =>  'required',
            'tahunJalan'    =>  'required',
            'semesterJalan' =>  'required'
        ]);

        $form_data = array(
            'namaAkademik'  =>   $request->namaAkademik,
            'tahunJalan'    =>   $request->tahunJalan,
            'semesterJalan' =>   $request->semesterJalan
        );

        Akademik::whereId($id)->update($form_data);

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
