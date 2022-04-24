@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">

            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Araç Satış</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">

            </div>
            <div class="col-lg-3 col-6 text-right">
                {{--            <a href="" class="btn border">--}}
                {{--                <i class="fas fa-heart text-primary"></i>--}}
                {{--                <span class="badge">0</span>--}}
                {{--            </a>--}}
                {{--            <a href="" class="btn border">--}}
                {{--                <i class="fas fa-shopping-cart text-primary"></i>--}}
                {{--                <span class="badge">0</span>--}}
                {{--            </a>--}}

                <div class="navbar-nav mr-auto py-0">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                           style="width: 50%;float: right;">Ayarlar</a>
                        <div class="dropdown-menu rounded-0 m-0" style="right: 0px; width: 50%;">
                            <a href="{{route('admin')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Anasayfa</a>
                            <a href="{{route('admindetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Profil Bilgileri</a>
                            <a href="{{route('userdetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Kullanıcı Profilleri</a>

                            <a href="{{route('itemDetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Ürün Ekle</a>
                            <a href="{{route('logout')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #8b3a3a; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Çıkış Yap</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-9">

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5" style="flex: 100%; max-width: 100%;">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Kullanıcı Numarası</th>
                        <th>Tc No</th>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Telefon Numarası</th>
                        <th>Doğum Tarihi</th>
                        <th>E Posta</th>
                        <th>Adres</th>
                        <th>Siparişler</th>
                        <th>Durum</th>

                    </tr>
                    </thead>


                    <tbody class="align-middle">
                    <tr>
                        <form action="{{route('userUpgrade')}}" method="post">
                            @csrf

                            <td style="vertical-align: inherit;"><input type="text" name="id"
                                                                        value="{{$kullanici['id']}}" disabled></td>
                            <td class="align-middle"><input type="text" name="tcno" value="{{$kullanici['tcNo']}}"
                                                            required></td>
                            <td class="align-middle"><input type="text" name="isim" value="{{$kullanici['isim']}}"
                                                            required></td>
                            <td class="align-middle"><input type="text" name="soyisim"
                                                            value="{{$kullanici['soyisim']}}" required></td>
                            <td class="align-middle"><input type="text" name="telefon"
                                                            value="{{$kullanici['telefon']}}" required></td>
                            <td class="align-middle"><input type="text" name="dogumTarihi"
                                                            value="{{$kullanici['dogumTarihi']}}" required></td>
                            <td class="align-middle"><input type="text" name="eMail" value="{{$kullanici['eMail']}}"
                                                            required>
                            </td>

                            <td class="align-middle">

                                @php
                                $address="";
                                    if ($kullanici['adresId']!=null){
                                    $address = \App\Models\Address::where("id",$kullanici['adresId'])->first();
                                    $city = \App\Models\City::where("plakaKodu",$address['sehirId'])->first();
                                    echo "
                                       <input type='text' name='mahalle' value='{$address['mahalle']} '  placeholder='Mahalle Giriniz'>
                                      <input type='text' name='cadde' value='{$address['cadde']} ' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' value='{$address['sokak']} ' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo' value='{$address['binaNo']} ' placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo' value='{$address['daireNo']} ' placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' value='{$address['ilce']} ' placeholder='İlçe Giriniz' required>";
                                     }
                                    else{
                                        echo "<input type='text' name='mahalle'  placeholder='Mahalle Giriniz' required>
                                      <input type='text' name='cadde' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo'  placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo'  placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' placeholder='İlçe Giriniz' required>";
                                        }

                                @endphp

                                <select name="sehirler">
                                    @foreach($sehirler as $item)
                                        <option value="{{$item['isim']}}" {{$address!="" ? $item['plakaKodu'] == $address['sehirId']  ? 'selected' : '':''}}>{{$item['isim']}}</option>

                                    @endforeach
                                </select>

                            </td>

                            <td class="align-middle">{{$kullanici['id']}}</td>
                            <td class="align-middle">

                                <input type="hidden" name="hiddenid" value="{{$kullanici['id']}}">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Kaydet
                                </button>
                        </form>


                        @php
                            $id=$kullanici['id'];
                            if ($kullanici['aktif']==1){
                            echo '<form action="http://aracsatis.yakupakdin.site/admin/pasifyap" method="get">
                            <input  type="hidden" name="hiddenid" value="'.$id.'">';
                            echo '<br/><button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Pasif Yap</button>';
                            echo'</form>';}
                             else if ($kullanici['aktif']==0){
                                  echo '<form action="http://aracsatis.yakupakdin.site/admin/aktifyap" method="get">
                                  <input type="hidden" name="hiddenid" value="'.$id.'">';
                                 echo '<br/><button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Aktif Yap</button>';
                                 echo'</form>';
                                 }
                        @endphp
                        </td>

                    </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum
                    dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                                       required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                       required="required"/>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved.
                    Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
@endsection
