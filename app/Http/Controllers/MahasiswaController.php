<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamahasiswa = Mahasiswa::get(); // compact($var);
        return view('viewmahasiswa', ['datamahasiswa'=>$datamahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responsize:10
     */
    public function create()
    {
        return view('viewtambahmahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => ['required'],
            'hp' => 'required',            
        ]);

        /* cara 1  
        $mahasiswa = new mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->hp = $request->hp;
        $mahasiswa->save();
       */

        /* cara 2 

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'hp' => $request->hp,
            
        ]);
*/
        $mahasiswa = new mahasiswa;
        $mahasiswa::create($request->all());

        
        
        return redirect('/add')->with('status', 'Data Mahasiswa berhasil ditambahkan');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        return view('viewdetailmahasiswa', ['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
