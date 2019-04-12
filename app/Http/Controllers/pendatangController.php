<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendatang;
use Illuminate\Support\Facades\DB;
class pendatangController extends Controller
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
            $pendatang = \App\Pendatang::where('alamat_pendatang','LIKE','%'.$request->cari.'%')->get();
        } else {
            $pendatang = pendatang::all();
        }
        return view('pendatang.pendatang', compact('pendatang'));
    }
    //   public function search(Request $request)
    // {
    //     $query = $request->input('cari');
    //     $hasil = pendatang::where('nama_pendatang', 'LIKE', '%' . $query . '%')->paginate(10);
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
     // insert data ke table pendatang
        $data = new pendatang();
        $data->tgl_pendatang        = $request->tgl_pendatang;
        $data->alamat_pendatang     = $request->alamat_pendatang;
        $data->keterangan           = $request->keterangan;
        $data->created_at           = \Carbon\Carbon::now();
        $data->updated_at           = \Carbon\Carbon::now();
        $data->save();


    //     DB::table('pendatang')->insert([
        
    //     'tgl_pendatang' => $request->tgl_pendatang,
    //     'alamat_pendatang' => $request->alamat_pendatang,
    //     'keterangan' => $request->keterangan,
    //     'created_at' => \Carbon\Carbon::now(),
    //     'updated_at' => \Carbon\Carbon::now()
    // ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/pendatang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_pendatang
     * @return \Illuminate\Http\Response
     */
    public function show($no_pendatang)
    {
        //
        $output = 'Daftar pendatang';
        $pendatang = pendatang::get();
        return view('show', array(
          'pendatang' => $output,
          'pendatang' => $pendatang
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_pendatang
     * @return \Illuminate\Http\Response
     */
    public function edit($no_pendatang)
    {

         $data = pendatang::where('no_pendatang' ,$no_pendatang)->get();
    // $pendatang = DB::table('pendatang')->where('no_pendatang',$no_pendatang)->get();
    // passing data pegawai yang did_pendatangapat ke view edit.blade.php
    return view('pendatang.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_pendatang
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
{
    // update data pendatang
   $data = pendatang::find($request->no_pendatang);
        $data->tgl_pendatang        = $request->tgl_pendatang;
        $data->alamat_pendatang     = $request->alamat_pendatang;
        $data->keterangan           = $request->keterangan;
        $data->created_at           = \Carbon\Carbon::now();
        $data->updated_at           = \Carbon\Carbon::now();
        $data->save();



    // DB::table('pendatang')->where('no_pendatang',$request->no_pendatang)->update([
    //     'tgl_pendatang' => $request->tgl_pendatang,
    //     'alamat_pendatang' => $request->alamat_pendatang,
    //      'keterangan' => $request->keterangan,
        
    //        'created_at' => \Carbon\Carbon::now(),
    //     'updated_at' => \Carbon\Carbon::now()
   
    // ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/pendatang');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_pendatang
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_pendatang)
    {
        $data = pendatang::find($no_pendatang);
        $data->delete();
        return redirect('/pendatang');
            // $pendatang = DB::table('pendatang')->where('no_pendatang', $no_pendatang)->delete();
    }

}
