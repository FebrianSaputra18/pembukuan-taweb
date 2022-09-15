@extends('layouts.index')
@section('title', 'Dashboard')
@section('content')
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
                <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
                    <!-- Contacgt Us Button -->
                    <button>Contact Us</button>
                </form>
            </div>
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
            <h1>Selamat<br>Datang Supplier.</h1>
            <!-- Hero Title Info -->
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
                            <i class="icofont-users-social"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">10</h2>
                        <span class="desc">Sales</span>
                        <div class="icon">
                            <i class="icofont-live-messenger"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">2</h2>
                        <span class="desc">Supplier</span>
                        <div class="icon">
                            <i class="icofont-car-alt-4"></i>
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
                    <h3 class="title-5 m-b-35">Data Kiriman</h3>
                    <div class="col-12 d-flex justify-content-lg-center border my-2 py-4">
                        <div class="col-12">
                            <div class="row justify-content-between px-4 py-4">
                                <table class="table table-hover border">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#addDataSupplier">
                                    Tambah Data Supplier
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
</div>