{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>{{$title}}</title>--}}
{{--    <meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">--}}

{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
@extends('index')
@section('body')
<link rel="stylesheet" href="{{asset('css/loginstyle.css')}}">

</head>

<body class="img js-fullheight" style="background-image: url({{asset('img/bg.jpg')}});">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">AraçSatış.com</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">

                    <h3 class="mb-4 text-center">Buradan Giris Yapın</h3>

                    <form action="{{route('logincontrol')}}" class="signin-form" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" placeholder="Mail" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" name="pass" type="password" class="form-control" placeholder="Şifre" >
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            @if($errors->any())
                                <div class="alert" role="alert" style="background-color: #fbceb5;border: #fbceb5;text-align: center;color:darkred;">
                                    <span class="text-sm" style="font-size: 0.875rem !important;"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</span>
                                </div>
                            @endif
                            <button type="submit" class="form-control btn btn-primary submit px-3">Giriş Yap</button>
                        </div>
                    </form>
                        <div class="form-group" style="text-align: center;">
                            <span> Ya Da </span>
{{--                            <button type="submit" class="form-control btn btn-primary submit px-3"></button>--}}
                            <a href="{{route('userRegister')}}" class="form-control btn btn-primary submit px-3">Kayıt Ol</a>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Beni Hatırla
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">

                                <form action="{{route('forgotpassword')}}" method="post">
                                    <input type="submit" value="Şifremi Unuttum" style="color: #fff">
{{--                                <a href="{{}}"  ></a>--}}
                                </form>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@endsection
{{--</body>--}}
{{--</html>--}}

