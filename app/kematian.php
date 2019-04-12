<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\penduduk;

class kematian extends Model
{
    protected $table = 'kematian';
    protected $fillabel =['id_kematian','id_penduduk','hari_meninggal','tanggal_meninggal','tempat_meninggal','sebab_kematian'];
      public $primaryKey = 'id_kematian';
    public $timestamps = false;

      public function Penduduk(){
    	
    	return $this->belongsTo(Penduduk::class,'id_penduduk','id_penduduk');
    
}
}
