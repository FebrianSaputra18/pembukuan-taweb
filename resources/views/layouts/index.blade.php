@include('partials.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        {{-- @include('partials.sidebar') --}}
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- FOOTER SECTION -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h5>UD. MAHMUDA</h5>
                            <h3>DISTRIBUTOR BUMBU MASAK</h3>
                            <ul class="contact-nav">
                                <li><a data-scroll href="#home">Home.</a></li>
                                <li><a data-scroll href="#about-us">About Us.</a></li>
                                <li><a data-scroll href="#contact-us">Contact.</a></li>
                            </ul>
                            <h6>© 2022 - UD. MAHMUDA,All Right Reserved</h6>
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('partials.modal')

    @yield('script')

    @include('partials.footer')