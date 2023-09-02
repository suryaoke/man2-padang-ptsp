<header class="header-area">
    <div class="navbar-area">
        <div class="container relative">
            <div class="row">
                <div class="w-full">
                    <nav class="flex items-center justify-between navbar navbar-expand-lg">
                        <a class="mr-4 navbar-brand">
                            <img src="{{ asset('backend/dist/images/man1.png') }}" width="75px">
                        </a>
                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button"
                            data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none"
                            id="navbarOne">
                            <ul id="nav"
                                class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                <li class="nav-item ">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ url('/tamu') }}">Buku Tamu Digital</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown mr-2">
                                        <button class="dropdown-toggle items-center ml-2" aria-expanded="false"
                                            data-tw-toggle="dropdown"> <a> Layanan</a></button>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li>
                                                    <a href="{{ url('/suratmasuk') }}" data-tw-toggle="modal"
                                                        data-tw-target="#new-order-modal"class="dropdown-item">
                                                        <span class="truncate">Surat Masuk</span>
                                                    </a>
                                                </li>
                                                {{--  <li>
                                                    <hr class="dropdown-divider">
                                                </li>  --}}

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        <div
                            class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">
                            <a class="main-btn gradient-btn" data-scroll-nav="0" href="{{ route('login') }}"
                                rel="nofollow">Login</a>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    <div id="home" class="header-hero" style="background-image: url(frontend/assets/images/banner-bg.svg)">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pt-32 mb-4 text-center  header-hero-content">
                        <h3 class="text-4xl font-light leading-tight text-white header-sub-title wow fadeInUp"
                            data-wow-duration="1.3s" data-wow-delay="0.2s">Selamat Datang di Aplikasi <br>
                            Pelayanan
                            Terpadu Satu Pintu (PTSP)</h3>
                        <h2 class="mb-3 text-4xl font-bold text-white header-title wow fadeInUp"
                            data-wow-duration="1.3s" data-wow-delay="0.5s">MAN 1 Kota Padang</h2>
                        <a href="#" class="main-btn gradient-btn gradient-btn-2 wow fadeInUp"
                            data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a>
                    </div> <!-- header hero content -->

                </div>

            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s"
                        data-wow-delay="1.4s">
                        <img src="{{ asset('backend/dist/images/layanan.png') }}" alt="hero">
                    </div> <!-- header hero image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div> <!-- header hero -->
</header>
