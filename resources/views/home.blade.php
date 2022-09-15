@extends('layouts.index')
@section('title', 'Dashboard')
@section('content')

<!-- HEADER SECTION -->
<header id="home">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <!-- Change Logo Img Here -->
            <a class="navbar-brand col-sm-3 col-1" href="#"><img src="{{ asset ('style/images/bg_title.png')}}"
                    alt=""></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <!-- Nav Link -->
                        <a class="nav-link" data-scroll href="#home">Home.<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <!-- Nav Link -->
                        <a class="nav-link" data-scroll href="#about-us">About Us.</a>
                    </li>
            </div>
            </ul>
            <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0 mr-2">
                <!-- Contacgt Us Button -->
                <button>Contact Us</button>
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </form>
        </nav>
    </div>
    <!-- HERO SECTION -->
    <div class="container-fluid hero">
        <img src="{{asset('style/images/bgbumbu.png')}}" alt="">
        <div class="container">
            <!-- Hero Title -->
            <h1>Distributor<br>Bumbu Masak.</h1>
            <!-- Hero Title Info -->
            @auth
            {{ auth()->user()->name }}
            @endauth
            <p>Pembukuan dan informasi bagi para sales dan suppier.</p>
            <div class="hero-btns">
                <!-- Hero Btn First -->
                <div class="d-flex justify-content-start">
                    <!-- Hero Btn Second -->
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/admin') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>


                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</header>
<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="portfolio">
    <div class="container-fluid">
        <div class="portfolio-aside">
            <img src="{{ asset ('style/images/aside3.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2>See some of our Creative work.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/1.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Bumbu Masak Rasa Baru</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/2.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Awesome Work</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/3.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Awesome Work</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/4.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Awesome Work</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/5.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Awesome Work</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 work-box">
                    <div class="photobox photobox_type10">
                        <div class="photobox__previewbox">
                            <!-- Replace Patch to Image Under -->
                            <img src="{{ asset ('style/images/6.png')}}" class="photobox__preview" alt="Preview">
                            <!-- Replace Image Title Under -->
                            <span class="photobox__label">Awesome Work</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hidden Images From Portfolio -->
            <div id="hiden-gallery" class="hide">
                <div class="row">
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/5.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/3.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/1.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 more-btn">
                    <!-- Show Me More/Less Button -->
                    <a class="more-btn-inside">Show More.</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection