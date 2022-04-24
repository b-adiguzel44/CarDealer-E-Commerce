<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "kullanicilar";
    protected $fillable=["id","tcNo","isim","soyisim","telefon","dogumTarihi","eMail","sifre","adresId","siparisId","aktif"];
    public $timestamps=false;
}
