<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "tasitlar";
    protected $fillable=["id","ad","fiyat","model","stokAdet","resimUrl","aciklama","aktif"];
    public $timestamps=false;
}
