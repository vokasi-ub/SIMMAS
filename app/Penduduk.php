<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillabel =['id_penduduk','nama_penduduk','agama','pendidikan_terakhir','status'];
    public $primaryKey = 'id_penduduk';
    public $timestamps = false;

    
}
