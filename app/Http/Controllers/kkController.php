<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kk;
use Illuminate\Support\Facades\DB;
class kkController extends Controller
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
            $kk = Kk::where('nama_kk','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kk = kk::all();
        }
        return view('kk.kk',['kk'=>$kk]);
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
    //     DB::table('kk')->insert([
    //     'nama_kk' => $request->nama_kk,
    //     'alamat_kk' => $request->alamat_kk,
     
    //     'created_at' => \Carbon\Carbon::now(),
    //     'updated_at' => \Carbon\Carbon::now()
    // ]);

            $data = new kk();
            $data->nama_kk       = $request->nama_kk;
            $data->alamat_kk     = $request->alamat_kk;
            $data->created_at    = \Carbon\Carbon::now();
            $data->updated_at    = \Carbon\Carbon::now();
            $data->save();


    // alihkan halaman ke halaman kk
    return redirect('/kk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($no_kk)
    {
        //
        $output = 'Daftar kepalakeluarga';
        $kk = penduduk::get();
        return view('show', array(
          'kk' => $output,
          'kk' => $kk
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($no_kk)
    {
         $data = kk::where('no_kk' ,$no_kk)->get();
    // $kk = DB::table('kk')->where('no_kk',$no_kk)->get();
    // passing data pegawai yang did_pendudukapat ke view edit.blade.php
    return view('kk.edit',compact('data'));
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
    // DB::table('kk')->where('no_kk',$request->no_kk)->update([
    //     'nama_kk' => $request->nama_kk,
    //     'alamat_kk' => $request->alamat_kk, 
    //     'updated_at' => \Carbon\Carbon::now()
    // ]);
            $data = kk::find($request->no_kk);
            $data->nama_kk       = $request->nama_kk;
            $data->alamat_kk     = $request->alamat_kk;
            $data->created_at    = \Carbon\Carbon::now();
            $data->updated_at    = \Carbon\Carbon::now();
            $data->save();

    // alihkan halaman ke halaman kk
    return redirect('/kk');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_kk)
    //

     {
             $data = kk::find($no_kk);
        $data->delete();
    //     DB::table('kk')->where('no_kk', $no_kk)->delete();
            return redirect('/kk');
    }

}
