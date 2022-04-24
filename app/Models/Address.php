<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = "adresler";
    protected $fillable=["id","sehirId","ilce","cadde","mahalle","sokak","binaNo","daireNo"];
    public $timestamps=false;
}
