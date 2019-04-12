<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelahiran;
use App\kk;
use Illuminate\Support\Facades\DB;
class kelahiranController extends Controller
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
            $kelahiran = Kelahiran::where('nama_ortu','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kelahiran = kelahiran::all();
        }
        $datakk = kk::all();
 return view('kelahiran.kelahiran', compact('kelahiran','datakk'));
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


     // insert data ke table kelahiran
     // ini pakek model 
    public function store(Request $request)
    {
    
       
    //     'no_akta'        => $request->no_akta,
    //     'nama_anak'      => $request->nama_anak,
    //     'nama_ortu'      => $request->nama_ortu,
    //     'jenis_kelamin'  => $request->jenis_kelamin,
    //     'no_kk'          => $request->no_kk,
    //     'created_at'     => \Carbon\Carbon::now(),
    //     'updated_at'     => \Carbon\Carbon::now()
    // ]);
 $data = new kelahiran();
         $data->no_akta         = $request->no_akta;
         $data->nama_anak       = $request->nama_anak;
         $data->nama_ortu       = $request->nama_ortu;
         $data->jenis_kelamin   = $request->jenis_kelamin;
         $data->no_kk           = $request->no_kk;
         $data->created_at      = \Carbon\Carbon::now();
         $data->updated_at      = \Carbon\Carbon::now();   
         $data->save();


    // alihkan halaman ke halaman kelahiran
    return redirect('/kelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */


    //buat nampilin tabel kelahiran
    public function show($id_kelahiran)
    {
        //
        $output = 'Daftar Kelahiran';
        $kelahiran = kelahiran::get();
        return view('show', array(
          'kelahiran' => $output,
          'kelahiran' => $kelahiran
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kelahiran)
    {
      
        $kk = kk::all();
          $datakk = kk::all();
        //buat edit form
        $data = kelahiran::where('id_kelahiran' ,$id_kelahiran)->get();
        // $kelahiran = DB::table('kelahiran')->where('id_kelahiran',$id_kelahiran)->get();
     
        return view('kelahiran.edit',compact('data','datakk'));
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
    // update data kelahiran

    $data = kelahiran::find($request->id_kelahiran);
         $data->no_akta         = $request->no_akta;
         $data->nama_anak       = $request->nama_anak;
         $data->nama_ortu       = $request->nama_ortu;
         $data->jenis_kelamin   = $request->jenis_kelamin;
         $data->no_kk           = $request->no_kk;
         $data->created_at      = \Carbon\Carbon::now();
         $data->updated_at      = \Carbon\Carbon::now();   
         $data->save();
    //ini yang pakek DB
    // DB::table('kelahiran')->where('id_kelahiran',$request->id_kelahiran)->update([
    //     'no_akta' => $request->no_akta,
    //     'nama_anak' => $request->nama_anak,
    //      'nama_ortu' => $request->nama_ortu,
    //       'jenis_kelamin' => $request->jenis_kelamin,
    //       'no_kk' => $request->no_kk,
         
    //     'updated_at' => \Carbon\Carbon::now()
   
    // ]);


    // alihkan halaman ke halaman pegawai
    return redirect('/kelahiran');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelahiran)
    {

        $data = kelahiran::find($id_kelahiran);
        $data->delete();
       
            return redirect('/kelahiran');
        // DB::table('kelahiran')->where('id_kelahiran', $id_kelahiran)->delete();
        //     return redirect('/kelahiran');
    }

}
