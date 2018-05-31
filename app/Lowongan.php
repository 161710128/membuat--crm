<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['nama_lowongan','perusahaan_id'];
    public $timestamps = true;

    public function Perusahaan() {
        return $this->belongsTo('App\Perusahaan','perusahaan_id');
    }
}

