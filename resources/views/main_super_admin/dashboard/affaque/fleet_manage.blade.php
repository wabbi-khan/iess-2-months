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
                    <li>Fleet</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container payroll-heading">
                <h3 class="text-center">Fleet Management</h3>
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/vehicles information-01.png" alt="student-screens-img">
                                </div>
                                <h5>Vehicles Informatiom</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('my-courses') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/add vehicles-01.png" alt="student-screens-img">
                                </div>
                                <h5>Add New Vehicle</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('my-courses') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/vehicle maintenance-01.png" alt="student-screens-img">
                                </div>
                                <h5>Vehicle Maintenance</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('classes-schedule') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/driver details-01.png" alt="student-screens-img">
                                </div>
                                <h5>Driver Detail</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/add new driver-01.png" alt="student-screens-img">
                                </div>
                                <h5>Add New Driver</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/fleet report-01.png" alt="student-screens-img">
                                </div>
                                <h5>Fleet Report</h5>
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
