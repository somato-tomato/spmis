<?php

namespace App\Http\Controllers;

use App\Isi;
use App\Siklus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IsiController extends Controller
{

    public function daftarisi($id)
    {
        $find = DB::table('isis')
            ->join('sikluses', 'isis.idSiklus', '=', 'sikluses.id')
            ->select('sikluses.nama', 'isis.judulIsi', 'isis.keterangan', 'isis.id')
            ->where('sikluses.id', '=', $id)
            ->get(); //Ini RAW Query

        $ids = DB::table('sikluses')
            ->select('id')
            ->where('id', '=', $id)
            ->get();

        //ddd($find);

        return view('sisi.daftarisi', compact('find', 'ids'));
    }

    public function viewisi($id)
    {
        $find = DB::table('isis')
            ->join('sikluses', 'isis.idSiklus', '=', 'sikluses.id')
            ->select('sikluses.nama', 'isis.judulIsi', 'isis.keterangan', 'isis.isi', 'isis.id')
            ->where('isis.id', '=', $id)
            ->get(); //Ini RAW Query

        //ddd($find);

        return view('sisi.isi', compact('find'));
    }

    public function buat($id)
    {
        $data = Siklus::findOrfail($id);

       // ddd($data);
        return view('sisi.buat', compact('data'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siklus::latest()->paginate(5);

        return view('sisi.index',compact('data'));
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
            'idSiklus'  =>  'required',
            'judulIsi'    =>  'required',
            'keterangan' =>  'required',
            'isi' =>  'required'
        ]);

        $form_data = array(
            'idSiklus'  =>   $request->idSiklus,
            'judulIsi'    =>   $request->judulIsi,
            'keterangan' =>   $request->keterangan,
            'isi' =>   $request->isi
        );

        //ddd($form_data);

        Isi::create($form_data);

        return redirect('sisi')->with('success', 'Data Added successfully.');
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
        $data = Isi::findOrFail($id);

        return view('sisi.edit', compact('data'));
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
            'judulIsi'    =>  'required',
            'keterangan' =>  'required',
            'isi' =>  'required'
        ]);

        $form_data = array(
            'judulIsi'    =>   $request->judulIsi,
            'keterangan' =>   $request->keterangan,
            'isi' =>   $request->isi
        );

        //ddd($form_data);

        Isi::whereId($id)->update($form_data);

        return redirect('sisi')->with('success', 'Data Added successfully.');
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
