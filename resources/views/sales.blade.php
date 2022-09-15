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
            <h1>Selamat<br>Datang Sales.</h1>
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
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">Rp.1,060,386</h2>
                        <span class="desc">total uang</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
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
                    <h3 class="title-5 m-b-35">Data Keuangan</h3>
                    <div class="col-12 d-flex justify-content-lg-center my-2 py-4">
                        <div class="row">
                            <div class="col-12  justify-content-between px-4 py-4 ">
                                <div class="row border">
                                    <div class="col-12 text-center my-2">
                                        <h5>Total Harian</h5>
                                    </div>
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <div class="col-12 text-center text-bg-danger">
                                                <a>Senin, 12 - 12 -2033</a>
                                            </div>
                                            <tr>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Ambil Barang</th>
                                                <th scope="col">Sisa Barang</th>
                                                <th scope="col">Total Laku</th>
                                                <th scope="col">Total Uang</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse ($post as $post)
                                            <tr>
                                                <td>{{ $post->nama_barang }}</td>
                                                <td>{{ $post->ambil_barang }}</td>
                                                <td>{{ $post->total_laku }}</td>
                                                <td>{{ $post->sisa_barang }}</td>
                                                <td>{{ $post->total_uang }}</td>
                                                <td>{{ $post->keterangan }}</td>

                                                <td>
                                                    <a href="#" data-id="{{ $post->id }}"
                                                        class="badge badge-primary btn-edit"> <i
                                                            class="fa fa-pencil"></i> Edit</a>

                                                </td>
                                            </tr>
                                            @empty --}}
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                            {{-- @endforelse --}}

                                        </tbody>
                                    </table>

                                    {{-- {{ $post->links() }} --}}

                                    <div class="d-flex py-3 justify-content-between">

                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#tambahdataModal">
                                            <i class="fas fa-plus"></i> Tambah Data
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#lihatdataModal">
                                            <i class="fas fa-eye"></i> Lihat Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-center mb-4 px-0">
                                <div class="card-header">
                                    Data-Pembukuan
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pembukuan Bulanan</h5>
                                    <p class="card-text">Semua data yang disimpan selama sebulan akan di tampikan
                                        pada tabel.</p>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#dataBulanan">
                                        <i class="fas fa-plus"></i> Lihat Data
                                    </button>
                                </div>
                                <div class="card-footer text-muted">
                                    4 hari yang lalu
                                </div>
                            </div>
                            <div class="card text-center px-0">
                                <div class="card-header">
                                    Data-Pembukuan
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pembukuan Tahuanan</h5>
                                    <p class="card-text">Semua data yang disimpan selama setahun akan di tampikan
                                        pada tabel.</p>
                                    <a href="#" class="btn btn-primary">Lihat Data</a>
                                </div>
                                <div class="card-footer text-muted">
                                    1 tahun yang lalu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
</div>