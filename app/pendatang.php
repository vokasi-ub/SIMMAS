<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendatang extends Model
{
    protected $table = 'pendatang';
    protected $fillabel =['no_pendatang','tgl_pendatang','alamat_pendatang','keterangan'];
    protected $primaryKey ='no_pendatang';
    public $timestamps = false;
}
