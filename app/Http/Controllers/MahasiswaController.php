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
        /*
        if(!session('statuslogin')){
            return redirect('/');
        }
        */
        $datamahasiswa = Mahasiswa::get(); // compact($var);
        return view('viewmahasiswa', ['datamahasiswa'=>$datamahasiswa, 'username'=>session('username')]);
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


    public function printout($param1, $param2=20){
        echo "Nilai 1 adalah $param1 <br>";
        if(isset($param2)){
            echo "Nilai 2 adalah $param2";
        }

        //redirect()->route('belajar');

    }


    public function lihat(){
        echo "Masuk Get dan Post";
    }


    public function belajar(){
        echo Route("belajar");
    }

    public function getall(mahasiswa $mahasiswa)
    {
        //dump(mahasiswa::where("nim", "2520")->first());
        //dump(mahasiswa::find(100))->first();

        dump(mahasiswa::onlyTrashed()->get());
        //dump(mahasiswa::find(3));

    }


    public function updatedata(mahasiswa $mahasiswa)
    {
        //dump(mahasiswa::where("nim", "2520")->first());
        $mahasiswa = mahasiswa::find(1);
        $mahasiswa->nama = "Tommy Tanto";
        $mahasiswa->save();

        //dump(mahasiswa::all());
        //dump(mahasiswa::find(3));

    }

    public function deletedata(mahasiswa $mahasiswa)
    {
        //dump(mahasiswa::where("nim", "2520")->first());
        $mahasiswa = mahasiswa::find(1);
        $mahasiswa->delete();

        //dump(mahasiswa::all());
        //dump(mahasiswa::find(3));

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
