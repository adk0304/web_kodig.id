<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    protected $table = "promo";
    protected $fillable = ['nama_promo','jenis_promo','nominal_promo','expired_date'];

}
