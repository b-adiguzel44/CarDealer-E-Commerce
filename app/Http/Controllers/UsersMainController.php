<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use App\Models\Address;
use App\Models\City;
use App\Models\Products;
use App\Models\ProductsModel;
use App\Models\ProductsModelBrand;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Mail;


class UsersMainController extends Controller{
    public function usersMain()
    {

        $data['title'] = "Anasayfa";
        $data['products'] = Products::get();
        $data['productsmodel'] = ProductsModel::get();
        $data['productsmodelbrand'] = ProductsModelBrand::get();
        return view('userPage.main', $data);
    }










}
