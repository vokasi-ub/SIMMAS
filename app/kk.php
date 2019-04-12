<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kelahiran;

class kk extends Model
{
    protected $table = 'kk';
    protected $fillabel =['no_kk','nama_kk','alamat_kk'];
    protected $primaryKey = 'no_kk';
    public $timestamps = true;

    public function kelahiran()
    {
      return $this->belongsTo(kelahiran::class, 'no_kk', 'no_kk');
    }
}

