<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = "sehirler";
    protected $fillable=["plakaKodu","isim"];
    public $timestamps=false;
}
