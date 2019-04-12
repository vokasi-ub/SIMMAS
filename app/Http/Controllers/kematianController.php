<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kematian;
use Illuminate\Support\Facades\DB;
use App\Penduduk;
class kematianController extends Controller
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
            $kematian = \App\Kematian::where('id_penduduk','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kematian = kematian::all();
            $datapenduduk = Penduduk::all();
        }
        return view('kematian.kematian', compact('kematian','datapenduduk'));
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
    //     DB::table('kematian')->insert([
    //     'id_penduduk' => $request->id_penduduk,
    //     'hari_meninggal' => $request->hari_meninggal,
    //     'tanggal_meninggal' => $request->tanggal_meninggal,
    //     'tempat_meninggal' => $request->tempat_meninggal,
    //     'sebab_meninggal' => $request->sebab_meninggal,
    //     'created_at' => \Carbon\Carbon::now(),
    //     'updated_at' => \Carbon\Carbon::now()
    // ]);

         $data = new kematian();
        $data->id_penduduk = $request->id_penduduk;
          $data->hari_meninggal = $request->hari_meninggal;
            $data->tanggal_meninggal = $request->tanggal_meninggal;
              $data->tempat_meninggal = $request->tempat_meninggal;
              $data->sebab_meninggal = $request->sebab_meninggal;
             $data->created_at = \Carbon\Carbon::now();
                 $data->updated_at = \Carbon\Carbon::now();
        $data->save();

    // alihkan halaman ke halaman pegawai
    return redirect('/kematian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id_kematian)
    {
        //
        $output = 'Daftar Kematian';
        $penduduk = kematian::get();
        return view('show', array(
          'kematian' => $output,
          'kematian' => $kematian
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kematian)
    {
         $penduduk = penduduk::all();
   $data = kematian::where('id_kematian' ,$id_kematian)->get();
    // $penduduk = DB::table('penduduk')->where('id_penduduk',$id_penduduk)->get();
    // passing data pegawai yang did_pendudukapat ke view edit.blade.php
    return view('kematian.edit',compact('data','penduduk'));
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
    // update data kamatian
    // DB::table('kematian')->where('id_kematian',$request->id_kematian)->update([
    //     'id_kematian' => $request->id_kematian,
    //     'hari_meninggal' => $request->hari_meninggal,
    //      'tanggal_meninggal' => $request->tanggal_meninggal,
    //       'tempat_meninggal' => $request->tempat_meninggal,
    //       'sebab_meninggal' => $request->sebab_meninggal,
         
    //     'updated_at' => \Carbon\Carbon::now()
   
    // ]);
    // // alihkan halaman ke halaman 
      $data = new kematian();
        $data->id_penduduk = $request->id_penduduk;
          $data->hari_meninggal = $request->hari_meninggal;
            $data->tanggal_meninggal = $request->tanggal_meninggal;
              $data->tempat_meninggal = $request->tempat_meninggal;
              $data->sebab_meninggal = $request->sebab_meninggal;
             $data->created_at = \Carbon\Carbon::now();
                 $data->updated_at = \Carbon\Carbon::now();
        $data->save();
    return redirect('/kematian');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kematian)
    {
          $data = kematian::find($id_kematian);
        $data->delete();

            return redirect('/kematian');
    }

}
