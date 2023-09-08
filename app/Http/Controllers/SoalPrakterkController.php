<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class SoalPrakterkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {




        return view('soal2');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->all();

        Pegawai::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        $id = $request->post('id');

        $data = $request->all();
        // unset($data['id_pegawai']);

        $dokumen = Pegawai::find($id);

        $dokumen->update($data);


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $dokumen = Pegawai::find($id);

        $dokumen->delete();

        return redirect()->back();
    }
}
