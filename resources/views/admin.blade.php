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
                    <li class="nav-item">
                        <!-- Nav Link -->
                        <a class="nav-link" data-scroll href="#contact-us">Contact Us.</a>
                    </li>
                </ul>
            </div>
            <!-- Settings Dropdown -->
            {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> --}}
        </nav>
    </div>
    <!-- HERO SECTION -->

    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-2">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Admin-Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <div class="container-fluid hero">
        <div class="container">
            <!-- Hero Title -->
            <h1>Selamat<br>Datang Admin.</h1>
            <!-- Hero Title Info -->
            @auth
            {{ auth()->user()->name }}
            @endauth
            <p>Pembukuan dan informasi bagi para sales dan suppier.</p>
        </div>
    </div>
</header>
<!-- SERVICES SECTION -->

<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">12</h2>
                        <span class="desc">User online</span>
                        <div class="icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">10</h2>
                        <span class="desc">Sales</span>
                        <div class="icon">
                            <i class="fa-solid fa-person-carry-box"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">2</h2>
                        <span class="desc">Supplier</span>
                        <div class="icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">Rp.1,060,386</h2>
                        <span class="desc">total uang</span>
                        <div class="icon">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Data Karyawan</h3>
                    <div class="col-12 d-flex justify-content-lg-center border my-2 py-4">
                        <div class="col-12">

                            <div class="row justify-content-between px-4 py-4">
                                <div class="card justify-content-between mb-3" style="width: 14rem;">
                                    <img src="/images" width="100px">
                                    <div class="card-body align-self-center">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                        <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                    </div>
                                </div>
                            </div>

                            <form action="" method="POST">

                                <a class="btn btn-info" href="#">Show</a>

                                <a class="btn btn-primary" href="#">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            <div class="col-12 d-flex justify-content-center">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-success ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                                        data-bs-toggle="modal" data-bs-target="#addsalesModal"><i
                                            class="fas fa-plus"></i>Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </div>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
</div>