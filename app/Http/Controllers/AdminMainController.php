<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use App\Models\Address;
use App\Models\City;
use App\Models\Products;
use App\Models\ProductsModelBrand;
use App\Models\ProductsModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Mail;


class AdminMainController extends Controller

{
    public function adminMain()
    {
        $data['title'] = "Admin Anasayfa";
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.main', $data);
    }

    public function admindetail()
    {
        $data['title'] = "Admin Profil Bilgileri";
        $data['user'] = Admin::where("eMail", Session::get('Mail'))->first();
        $data['yonetici'] = Admin::where("id", $data['user']['id'])->first();

        return view('admin.adminDetail', $data);
    }

    public function adminUpdate()
    {
        $data['title'] = "Bilgi Güncelleme";
        $data['user'] = Admin::where("eMail", Session::get('Mail'))->first();
        $data['yonetici'] = Admin::where("id", $data['user']['id'])->first();

        return view('admin.adminUpdate', $data);


    }

    public function adminUpgrade(Request $request)
    {

        $ad = $request->ad;
        $soyad = $request->soyad;
        $tcno = $request->tcno;
        $email = Session::get('Mail');
//        $id = Admin::where("email",Session::get('Mail'))->first();

        $adminUpdate = Admin::where("eMail", Session::get('Mail'))->update(array(

            'tcNo' => $tcno,
            'ad' => $ad,
            'soyad' => $soyad,

        ));
        if ($adminUpdate) {
            $array = [
                'mesaj' => " Sisteme giriş bilgileriniz şu şekilde güncellenmiştir;",
                'tcno' => 'Tc Kimlik Numaranız : ' . $tcno . '  ',
                'name' => 'İsim : ' . $ad . '  ',
                'surname' => 'Soyisim : ' . $soyad . '  ',
                'mail' => 'E-Mail Adresiniz : ' . Session::get('Mail') . '  ',
                'password' => 'Şifreniz : ' . Session::get('Password') . '  ',

            ];
            mail::send('admin.mailcontrol', $array, function ($message) use ($email) {
                $message->subject("Sisteme Giriş Bilgileri");

                $message->to($email);
            });

        }


        $data['title'] = "Admin Profil Bilgileri";
        $data['user'] = Admin::where("eMail", Session::get('Mail'))->first();
        $data['yonetici'] = Admin::where("id", $data['user']['id'])->first();
        return view('admin.adminDetail', $data);
//        return redirect('admin/adminUpgrade',$data)->withErrors(['msg' => 'Bilgiler Güncellendi.','alert'=>'alert-success']);


    }

    public function userdetail()
    {#kullanıcı bilgileri görüntüleme kısmı
        $data['title'] = "Kullanıcı Bilgileri Görüntüleme";
        $data['users'] = Users::get();
        $data['address'] = Address::get();

        return view('admin.userDetail', $data);


    }

    public function userDelete(Request $request)
    {
        $id = $request->id;
        $data['id'] = $id;
        $delete = DB::delete('DELETE FROM kullanicilar WHERE id = ?', [$id]);


        $data['title'] = "Kullanıcı Bilgileri Görüntüleme";
        $data['users'] = Users::get();
        $data['address'] = Address::get();

        return view('admin.userDetail', $data);

    }

    public function userUpdate(Request $request)
    {
        $id = $request->id;
        $data['id'] = $id;
        $data['sehirler'] = City::get();
        $data['kullanici'] = Users::where("id", $data['id'])->first();
        $data['title'] = "Kullanıcı Bilgi Güncelleme";
        return view('admin.userUpdate', $data);

    }

    public function userUpgrade(Request $request)
    {
        $id = $request->hiddenid;
        $tcno = $request->tcno;
        $isim = $request->isim;
        $soyisim = $request->soyisim;
        $telefon = $request->telefon;
        $dogumTarihi = $request->dogumTarihi;
        $eMail = $request->eMail;

        $adresselect = $request->sehirler;

        $mahalle = $request->mahalle;
        $cadde = $request->cadde;
        $sokak = $request->sokak;
        $binaNo = $request->binaNo;
        $daireNo = $request->daireNo;
        $ilce = $request->ilce;
        $sehirids = City::where("isim", $adresselect)->first();

        $sehirid = $sehirids['plakaKodu'];

        $userAdressUpdate = Address::create([

            "sehirId" => $sehirid,
            "ilce" => $ilce,
            "cadde" => $cadde,
            "mahalle" => $mahalle,
            "sokak" => $sokak,
            "binaNo" => $binaNo,
            "daireNo" => $daireNo,

        ]);

        $userSehirId = DB::table('adresler')->where('ilce', $ilce)
            ->where('cadde', $cadde)
            ->where('mahalle', $mahalle)
            ->where('sokak', $sokak)
            ->where('binaNo', $binaNo)
            ->where('daireNo', $daireNo)
            ->first();

        $usersehir = $userSehirId->id;
        $userUpdate = Users::where("id", $id)->update(array(

            'tcNo' => $tcno,
            'isim' => $isim,
            'soyisim' => $soyisim,
            'telefon' => $telefon,
            'dogumTarihi' => $dogumTarihi,
            'eMail' => $eMail,
            'adresId' => $usersehir,


        ));


        $data['title'] = "Kullanıcı Bilgileri Görüntüleme";
        $data['users'] = Users::get();
        $data['address'] = Address::get();

        return view('admin.userDetail', $data);

    }

    public function aktifyap(Request $request)
    {
        $id = $request->hiddenid;
        $userUpdate = Users::where("id", $id)->update(array(
            'aktif' => 1,

        ));
        $data['title'] = "Kullanıcı Bilgileri Görüntüleme";
        $data['users'] = Users::get();
        $data['address'] = Address::get();

        return view('admin.userDetail', $data);

    }

    public function pasifyap(Request $request)
    {
        $id = $request->hiddenid;
        $userUpdate = Users::where("id", $id)->update(array(
            'aktif' => 0,

        ));
        $data['title'] = "Kullanıcı Bilgileri Görüntüleme";
        $data['users'] = Users::get();
        $data['address'] = Address::get();

        return view('admin.userDetail', $data);

    }

    public function itemDetail()
    {
        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();


        return view('admin.itemDetail', $data);
    }

    public function itemUpdate(Request $request)
    {
        $id=$request->hiddenid;
        $data['title'] = "Ürün Güncelleme";
        $data['products'] = Products::where("id", $id)->first();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemUpdate', $data);


    }

    public function itemUpgrade(Request $request)
    {
        $id = $request->hiddenid;
        $ad = $request->ad;
        $fiyat = $request->fiyat;
        $marka = $request->markalar;
        $model = $request->modeller;
        $stok = $request->stok;
        $aciklama = $request->aciklama;





        if (isset($_FILES["resim"])) {

            $hata = $_FILES["resim"]["error"];
            if ($hata != 0) {

                return redirect('admin/itemDetail')->withErrors(['msg' => 'Resim yüklenirken hata oluştu.', 'alert' => 'alert-danger']);
            } else {
                $boyut = $_FILES["resim"]["size"];
                if ($boyut > (1024 * 1024 * 3)) {

                    return redirect('admin/itemDetail')->withErrors(['msg' => "Resim 3Mb'dan büyük olamaz.", 'alert' => 'alert-danger']);
                } else {
                    $isim = $_FILES["resim"]["name"];
                    $dosya = $_FILES["resim"]["tmp_name"];
                    @copy($dosya, "img/items/" . $_FILES["resim"]["name"]);
                    $resim_url = "img/items/" . $isim;

                    $modelid = ProductsModel::where("isim", $model)->first();

                    $productsUpdate = Products::where("id", $id)->update(array(

                        "ad" => $ad,
                        "fiyat" => $fiyat,
                        "model" => $modelid['id'],
                        "stokAdet" => $stok,
                        "resimUrl" => $resim_url,
                        "aciklama" => $aciklama,

                    ));


                }
            }
        }
        else  {
            $modelid = ProductsModel::where("isim", $model)->first();

            $productsUpdate = Products::where("id", $id)->update(array(

                "ad" => $ad,
                "fiyat" => $fiyat,
                "model" => $modelid['id'],
                "stokAdet" => $stok,

                "aciklama" => $aciklama,

            ));

        }




        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemDetail', $data);

    }

    public function itemaktifyap(Request $request)
    {
        $id = $request->hiddenid;
        $itemActive = Products::where("id", $id)->update(array(
            'aktif' => 1,

        ));
        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemDetail', $data);


    }

    public function itempasifyap(Request $request)
    {
        $id = $request->hiddenid;
        $itemActive = Products::where("id", $id)->update(array(
            'aktif' => 0,

        ));
        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemDetail', $data);

    }

    public function itemDelete(Request $request)
    {
        $id = $request->hiddenid;
        $data['id'] = $id;
        $delete = DB::delete('DELETE FROM tasitlar WHERE id = ?', [$id]);


        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemDetail', $data);

    }

    public function itemAdd(Request $request)
    {
        $ad = $request->ad;
        $fiyat = $request->fiyat;
        $marka = $request->markalar;
        $model = $request->modeller;
        $stok = $request->stokAdet;
        $aciklama = $request->aciklama;




        if (isset($_FILES["resim"])) {

            $hata = $_FILES["resim"]["error"];
            if ($hata != 0) {

                return redirect('admin/itemDetail')->withErrors(['msg' => 'Resim yüklenirken hata oluştu.', 'alert' => 'alert-danger']);
            } else {
                $boyut = $_FILES["resim"]["size"];
                if ($boyut > (1024 * 1024 * 3)) {

                    return redirect('admin/itemDetail')->withErrors(['msg' => "Resim 3Mb'dan büyük olamaz.", 'alert' => 'alert-danger']);
                } else {
                    $isim = $_FILES["resim"]["name"];
                    $dosya = $_FILES["resim"]["tmp_name"];
                    @copy($dosya, "img/items/" . $_FILES["resim"]["name"]);
                    $resim_url = "img/items/" . $isim;

                    $modelid = ProductsModel::where("isim", $model)->first();

                    $itemAdd = Products::create([

                        "ad"=>$ad,
                        "fiyat"=>$fiyat,
                        "model"=>$modelid['id'],
                        "stokAdet"=>$stok,
                        "resimUrl"=>$resim_url,
                        "aciklama"=>$aciklama,
                        "aktif"=>"1",
                    ]);


                }
            }
        }



        $data['title'] = 'Ürün Detayları';
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();

        return view('admin.itemDetail', $data);


    }


}
