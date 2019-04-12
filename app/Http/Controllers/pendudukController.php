<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use Illuminate\Support\Facades\DB;
class pendudukController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mencari data
        if ($request->has('cari')) {
            $penduduk = \App\Penduduk::where('nama_penduduk','LIKE','%'.$request->cari.'%')->get();
        } else {
            $penduduk = penduduk::all();
        }
        return view('penduduk.penduduk', compact('penduduk'));
        
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = penduduk::where('nama_penduduk', 'LIKE', '%' . $query . '%')->paginate(10);
    //     return view('dashboard.result', compact('hasil', 'query'));
    // }

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
     // insert data ke table penduduk
        $data = new penduduk();
        $data->nama_penduduk        = $request->nama_penduduk;
        $data->agama                = $request->agama;
        $data->pendidikan_terakhir  = $request->pendidikan_terakhir;
        $data->status               = $request->status;
        $data->created_at           = \Carbon\Carbon::now();
        $data->updated_at           = \Carbon\Carbon::now();
        $data->save();


         // ini kalo kita pakek DB ya...
        // DB::table('penduduk')->insert([
        // 'nama_penduduk' => $request->nama_penduduk,
        // 'agama' => $request->agama,
        // 'pendidikan_terakhir' => $request->pendidikan_terakhir,
        // 'status' => $request->status,
        // 'created_at' => \Carbon\Carbon::now(),
        // 'updated_at' => \Carbon\Carbon::now()
        // ]);



    // alihkan halaman ke halaman penduduk (tampilan/dilontarkan )
    return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */


    public function show($id_penduduk)
    {
        //
        $output = 'Daftar penduduk';
        $penduduk = penduduk::get();
        return view('show', array(
          'penduduk' => $output,
          'penduduk' => $penduduk
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */



    //buat edit form pada tabel penduduk
    public function edit($id_penduduk)
    {
        $data = penduduk::where('id_penduduk' ,$id_penduduk)->get();

     //INI PKEK DB YA    
    // $penduduk = DB::table('penduduk')->where('id_penduduk',$id_penduduk)->get();
    // passing data pegawai yang did_pendudukapat ke view edit.blade.php
    return view('penduduk.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
{
    // update data pegawai
         $data = penduduk::find($request->id_penduduk);
         $data->nama_penduduk         = $request->nama_penduduk;
         $data->agama                 = $request->agama;
         $data->pendidikan_terakhir   = $request->pendidikan_terakhir;
         $data->status                = $request->status;
         $data->created_at            = \Carbon\Carbon::now();
         $data->updated_at            = \Carbon\Carbon::now();
         $data->save(); 

    // DB::table('penduduk')->where('id_penduduk',$request->id_penduduk)->update([
    //     'nama_penduduk' => $request->nama_penduduk,
    //     'agama' => $request->agama,
    //      'pendidikan_terakhir' => $request->pendidikan_terakhir,
    //       'status' => $request->status,
         
    //     'updated_at' => \Carbon\Carbon::now()
   
    // ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/penduduk');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_penduduk)
    {
        $data = penduduk::find($id_penduduk);
        $data->delete();
        // DB::table('penduduk')->where('id_penduduk', $id_penduduk)->delete();
            return redirect('/penduduk');
    }

}
