@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
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
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
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


    {{--<!-- Cart 1 Start -->--}}
    {{--<div class="container-fluid pt-5">--}}
    {{--    <div class="row px-xl-5">--}}
    {{--        <h3 style="margin: auto"> Slider Ekle</h3>--}}
    {{--        <div class="col-lg-8 table-responsive mb-5" style="flex: 100%;max-width: 100%;">--}}
    {{--            <table class="table table-bordered text-center mb-0">--}}
    {{--                <thead class="bg-secondary text-dark">--}}
    {{--                <tr>--}}
    {{--                    <th>Başlık</th>--}}
    {{--                    <th>Fiyat</th>--}}
    {{--                    <th>Quantity</th>--}}
    {{--                    <th>Total</th>--}}
    {{--                    <th>Remove</th>--}}
    {{--                </tr>--}}
    {{--                </thead>--}}
    {{--                <tbody class="align-middle">--}}
    {{--                <tr>--}}
    {{--                    <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle">--}}
    {{--                        <div class="input-group quantity mx-auto" style="width: 100px;">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-minus" >--}}
    {{--                                    <i class="fa fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-plus">--}}
    {{--                                    <i class="fa fa-plus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle">--}}
    {{--                        <div class="input-group quantity mx-auto" style="width: 100px;">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-minus" >--}}
    {{--                                    <i class="fa fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-plus">--}}
    {{--                                    <i class="fa fa-plus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle">--}}
    {{--                        <div class="input-group quantity mx-auto" style="width: 100px;">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-minus" >--}}
    {{--                                    <i class="fa fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-plus">--}}
    {{--                                    <i class="fa fa-plus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle">--}}
    {{--                        <div class="input-group quantity mx-auto" style="width: 100px;">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-minus" >--}}
    {{--                                    <i class="fa fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-plus">--}}
    {{--                                    <i class="fa fa-plus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle">--}}
    {{--                        <div class="input-group quantity mx-auto" style="width: 100px;">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-minus" >--}}
    {{--                                    <i class="fa fa-minus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">--}}
    {{--                            <div class="input-group-btn">--}}
    {{--                                <button class="btn btn-sm btn-primary btn-plus">--}}
    {{--                                    <i class="fa fa-plus"></i>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </td>--}}
    {{--                    <td class="align-middle">$150</td>--}}
    {{--                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>--}}
    {{--                </tr>--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        </div>--}}

    {{--    </div>--}}
    {{--</div>--}}
    {{--<!-- Cart 1 End -->--}}
    <!-- Cart 2 Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">

            <h3 style="margin: auto"> Ürün Ekle</h3>
            <div class="col-lg-8 table-responsive mb-5" style="flex: 100%;max-width: 100%;">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Fiyat</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Stok Adet</th>
                        <th>Açıklama</th>
                        <th>Durum</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">

                    <tr>
                        <form enctype="multipart/form-data" action="{{route('itemAdd')}}" method="post">
                            @csrf
                            <td class="align-middle"><input type="file" name="resim"></td>
                            <td class="align-middle"><input type="text" name="ad" placeholder="Başlık Giriniz"></td>
                            <td class="align-middle"><input type="text" name="fiyat" placeholder="Fiyat Giriniz"></td>
                            <td class="align-middle">
                                <select name="markalar">
                                    @foreach($productsmodelbrand as $item)
                                        <option value="{{$item['isim']}}">{{$item['isim']}}</option>

                                    @endforeach
                                </select></td>
                            <td class="align-middle">
                                <select name="modeller">
                                    @foreach($productsmodel as $item)
                                        <option value="{{$item['isim']}}">{{$item['isim']}}</option>

                                    @endforeach
                                </select></td>
                            <td class="align-middle"><input type="text" name="stokAdet"
                                                            placeholder="Stok Adetini Giriniz"></td>
                            <td class="align-middle"><textarea name="aciklama" cols="30" rows="10"
                                                               placeholder="Ürün Açıklamasını Giriniz"></textarea></td>
                            <td class="align-middle">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i>
                                    Ürün Ekle
                                </button>
                            </td>
                        </form>
                    </tr>
                    @foreach($products as $item)
                        @php
                            $products=" ";
                                $products = \App\Models\Products::where("id", $item['id'])->first();
                                $productsModel=\App\Models\ProductsModel::where("id", $products['model'])->first();
                                $productsModelBrand=\App\Models\ProductsModelBrand::where("id", $productsModel['marka'])->first();

                                if ($item['aktif']==1){echo '<tr style="background-color:#cbd2d8">';}
                                else {echo '<tr style="background-color:#f8a596">';}

                        @endphp

                        <td class="align-middle"><img src="{{asset($item['resimUrl'])}}" alt="" style="width: 50px;">
                        </td>
                        <td class="align-middle">{{$item['ad']}}</td>
                        <td class="align-middle">{{$item['fiyat']}}</td>
                        <td class="align-middle">{{$productsModelBrand['isim']}}</td>
                        <td class="align-middle">{{$productsModel['isim']}}</td>
                        <td class="align-middle">{{$item['stokAdet']}}</td>
                        <td class="align-middle">{{$item['aciklama']}}</td>
                        <td class="align-middle">
                            <form action="{{route('itemDelete')}}" method="get">
                                <input name="hiddenid" type="hidden" value="{{$products['id']}}">

                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Sil
                                </button>

                            </form>
                            <br/>
                            <form action="{{route('itemUpdate')}}" method="get">
                                <input name="hiddenid" type="hidden" value="{{$products['id']}}">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Güncelle
                                </button>

                            </form>


                        </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Cart 2 End -->


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

    {{--<!-- Contact Javascript File -->--}}
    {{--<script src="mail/jqBootstrapValidation.min.js"></script>--}}
    {{--<script src="mail/contact.js"></script>--}}

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>


@endsection
