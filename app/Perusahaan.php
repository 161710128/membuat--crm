<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['nama_perusahaan','alamat','deskripsi'];
    public $timestamps = true;

    public function Lowongan() {
        return $this->hasmany('App\Lowongan','perusahaan_id ');
    }
}
