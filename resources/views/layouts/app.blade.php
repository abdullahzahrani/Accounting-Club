<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{Storage::url('assets/img/logo.svg')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300;800&family=Tajawal&display=swap');
        body{
            font-family: 'Raleway', sans-serif;
        }
    </style>
    <!-- css -->
    <link rel="stylesheet" href="{{Storage::url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{Storage::url('/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body class="d-flex flex-column min-vh-100">
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
        <nav class="navbar navbar-light navbar-expand-md sticky-top" dir="rtl">
            <div class="container-fluid"><a class="navbar-brand" href="#"><img id="logoimage" src="{{Storage::url('assets/img/logo.svg')}}"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="border: 0;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto" style="padding-right: 0;background: #fff;">
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m1')}}">الرئيسية</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m2')}}">أعمالنا</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m33')}}">ضيوفنا</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m4')}}">الفعاليات</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m5')}}">الشركاء</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('/#m6')}}">من نحن</a></li>
                        <li class="nav-item navitems"><a class="nav-link active" href="{{url('member')}}">الأعضاء</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- End: Navbar - Logo Left - Phone Logo Left -->
        <main>
            @yield('content')
        </main>
{{--    </div>--}}
    <footer class=" text-center x-footer text-white mt-auto" dir="rtl">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/acc_club?s=21&t=8DltvISG1Uk7oR3KisaVxA" role="button"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="office@accgclub.com" role="button"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/acc_club_ksu?igshid=NTdlMDg3MTY=" role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/acc_club/" role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">  <a class="text-white" href="https://www.linkedin.com/in/abdullah-alzahrani-it">
            صنع بكل 💙 بواسطة
          عبدالله الزهراني</a>
        </div>
        <!-- Copyright -->
    </footer><!-- End: black footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{Storage::url('assets/js/script.min.js')}}"></script>
</body>
</html>
