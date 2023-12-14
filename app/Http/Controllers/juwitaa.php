<?php

namespace App\Http\Controllers;



use App\Models\juwita1;
use Illuminate\Http\Request;
class juwitaa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=juwita1::all();
        return view('/isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'NIM'=> 'required|numeric',
            'Kelas'=> 'required',
            'Angkatan'=> 'required'
        ],[
            'Nama.required'=> 'Nama Wajib Diisi!',       
            'NIM.required'=> 'NIM Wajib Diisi!',
            'Kelas.required'=> 'Kelas Wajib Diisi!',
            'Angkatan.required'=> 'Angkatan Wajib Diisi!'
        ]);
        $data =[
            'Nama'=>$request->input('Nama'),
            'NIM'=>$request->input('NIM'),
            'Kelas'=>$request->input('Kelas'),
            'Angkatan'=>$request->input('Angkatan')
        ];
        juwita1::create($data);
        return redirect('/isian')->with('success', 'Data berhasil disimpan!');

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
        $data = juwita1::where('Nama',$id)->first();
        return view('isian.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'NIM'=> 'required|numeric',
            'Kelas'=> 'required',
            'Angkatan'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Kelas'=> $request->input('Kelas'),
            'Angkatan'=> $request->input('Angkatan')
        ];
        juwita1::where('Nama', $id)->update($data);
        return redirect('isian')->with('success','Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        juwita1::where('Nama', $id)->delete();
        return redirect('isian')->with('success','Data berhasil diHapus!');
    }
}