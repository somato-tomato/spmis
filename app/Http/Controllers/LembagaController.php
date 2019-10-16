<?php

namespace App\Http\Controllers;

use App\Fakultas;
use App\Lembaga;
use App\Prodi;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lembaga::latest()->paginate(5);

        return view('lembaga.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lembaga.create');
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

        Prodi::create($form_data);

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
        $data = Lembaga::findOrFail($id);
        return view('lembaga.edit', compact('data'));
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
            'namaLembaga'    =>  'required',
            'alamatLembaga'  =>  'required',
            'kotkabLembaga'  =>  'required',
            'notelpLembaga'  =>  'required'
        ]);

        $form_data = array(
            'namaLembaga'    =>   $request->namaLembaga,
            'alamatLembaga'  =>   $request->alamatLembaga,
            'kotkabLembaga'  =>   $request->kotkabLembaga,
            'notelpLembaga'    =>   $request->notelpLembaga
        );

        Lembaga::whereId($id)->update($form_data);

        return redirect('lembaga')->with('success', 'Data is successfully updated');
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
