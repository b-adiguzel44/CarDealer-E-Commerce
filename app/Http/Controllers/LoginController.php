<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Users;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
class LoginController extends Controller
{
    public function index(){
        $data['title'] = "Giriş Ekranı";
        return view('layouts.login',$data);
    }
    public function loginControl(Request $request){
        $incomingMail = $request->mail;
        $incomingPass = $request->pass;
        $admin=DB::select('select id from yonetici where eMail = :eMail and sifre = :sifre',['eMail' => $incomingMail,'sifre' => md5($incomingPass)]);
        $user=DB::select('select id from kullanicilar where eMail =:eMail and sifre = :sifre',['eMail'=>$incomingMail,'sifre'=>md5($incomingPass)]);
        $aktifmi = DB::select('select id from kullanicilar where eMail =:eMail and sifre = :sifre and aktif=1',['eMail'=>$incomingMail,'sifre'=>md5($incomingPass)]);

        if ($admin) {
            Session::put('Mail',$incomingMail);
            Session::put('Password',$incomingPass);
            return redirect('admin');

        }
        else if ($user){
            if ($aktifmi){
                Session::put('UMail',$incomingMail);
                Session::put('Password',$incomingPass);
                return redirect('users');
            }
            else    {
                return redirect()->back()->withErrors(['msg' => 'Hesabınız Pasif Durumdadır.','alert'=>'alert-danger']);

            }




        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Kullanıcı adı veya şifre hatalı...','alert'=>'alert-danger']);
        }


    }
    public function forgotpassword(Request $request){
        $incomingMail = $request->mail;
        if ($incomingMail){
            $array = [
                'mesaj'=>"Bu maili şifre sıfırlama isteğiniz üzere aldınız.",
                'buton'=>'<a href="" style="color: #fff">Şifremi Unuttum</a>',


            ];
            mail::send('admin.mailcontrol',  $array, function ($message) use ($incomingMail) {
                $message->subject("Sisteme Giriş Bilgileri");

                $message->to($incomingMail);
            });


        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Mail Adresi Bulunamadı...','alert'=>'alert-danger']);
        }

    }
}
