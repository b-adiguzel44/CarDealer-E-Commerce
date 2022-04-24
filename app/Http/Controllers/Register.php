<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Users;

class Register extends Controller
{
    public function userRegister(){
        $data['title'] = "Kayıt Ol";
        return view('layouts.register',$data);
    }
    public function userRegisterAgree(Request $request){

        $name=$request->name;
        $surname=$request->surname;
        $mail=$request->mail;
        $tcno=$request->tcno;
        $telno=$request->telno;
        $birthday=$request->birthday;
        $pass=$request->pass;

        $userCreate=Users::create([
            'tcNo'=>$tcno,
            'isim'=>$name,
            'soyisim'=>$surname,
            'telefon'=>$telno,
            'dogumTarihi'=>$birthday,
            'eMail'=>$mail,
            'sifre'=>md5($pass),
            'aktif'=>1,
        ]);
        if ($userCreate) {
            $data['title'] = "Giriş Ekranı";
            return view('layouts.login',$data);
        }




    }

}
