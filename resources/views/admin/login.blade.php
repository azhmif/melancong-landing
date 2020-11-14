<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Melancong Landing | {{ $tools['title']}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/font/simple-line-icons/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-float-label.min.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/main.css')}}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap.rtl.only.min.css')}}" />
</head>

<body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">MELANCONG WISATA LOGIN</p>

                            <p class="white mb-0">
                                Login Terlebih Dahulu Untuk Mendapatkan Akses Ke Admin Landing Melancong Wisata.
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.html">
                                <span class="logo-single">
                                    <img class="card-img-top" src="{{ url('logo.jpg')}}" alt="Card image cap" style="width:250px">
                                </span>
                            </a>
                            @if ($message = Session::get('gagal'))
                            <div class="alert alert-warning alert-dismissible fade show rounded mb-0" role="alert">
                                <strong>Gagal Login !!</strong> Username atau Password salah !!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div><br><br>
                            @endif
                            <form method="post" action="{{ url('/do_login') }}">
                                {{ csrf_field() }}
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan E-mail" required/>
                                    <span>E-mail</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" placeholder="" name="password" id="password" placeholder="Masukkan Password" required/>
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Lupa Password ?</a>
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit" >LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ url('Html-Version/Source/src/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('Html-Version/Source/src/js/dore.script.js')}}"></script>
    <script src="{{ url('Html-Version/Source/src/js/scripts.js')}}"></script>
    <script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap-notify.min.js')}}"></script>
</body>

</html>
