<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModelBrand extends Model
{
    use HasFactory;
    protected $table = "marka";
    protected $fillable=["id","isim"];
    public $timestamps=false;
}
