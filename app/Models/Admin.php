<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "yonetici";
    protected $fillable=["id","tcNo","ad","soyad","eMail","sifre"];
    public $timestamps=false;
}
