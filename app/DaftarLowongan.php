<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarLowongan extends Model
{
    protected $fillable = ['nama','pendidikan','keahlian','telepon','vc'];
    public $timestamps = true;

    public function Lowongan() {
        return $this->hasone('App\Lowongan','lowongan_id');
    }
}
