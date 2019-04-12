<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kk;

class kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $fillable =['id_kelahiran', 'no_akta', 'nama_anak', 'nama_ortu', 'jenis_kelamin', 'no_kk', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_kelahiran';
    public $timestamps = false;

     //buat join dengan tabel kk
    public function kk(){
    	
    	return $this->belongsTo(kk::class,'no_kk','no_kk');
    }
}
