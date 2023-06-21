@include('main_super_admin.dashboard.include.header')
<style>

</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('main_super_admin.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                {{-- <h3 class="text-center">"Campus Name"</h3> --}}
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Procurement</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container payroll-heading">
                <h3 class="text-center">Procurement</h3>
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/Manage Purchase-01.png" alt="affaque-screens-img">
                                </div>
                                <h5>Manage Purchase</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('my-courses') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/vendor information.png" alt="affaque-screens-img">
                                </div>
                                <h5>Vendor Information</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('classes-schedule') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/purchase order.png" alt="affaque-screens-img">
                                </div>
                                <h5>Purchase Orders</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/Financial Report.png" alt="affaque-screens-img">
                                </div>
                                <h5>Invoice Verification</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/Maintain record-01.png" alt="affaque-screens-img">
                                </div>
                                <h5>Maintain Records</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            {{-- <div class="text-center">
                @include('main_super_admin.dashboard.include.poweredby')

            </div> --}}
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
