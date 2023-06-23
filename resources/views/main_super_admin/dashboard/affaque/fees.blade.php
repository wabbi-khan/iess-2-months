@include('main_super_admin.dashboard.include.header')

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
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Accounts</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->


            <div class="container payroll-heading">
                <h3 class="text-center">Fees Management</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-fees') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/accounts/fees.png" alt="">
                                </div>
                                <h5>Generate Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-challan') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/accounts/challans.png" alt="">
                                </div>
                                <h5>Challans</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('confirm-fees') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/accounts/fees confirm.png" alt="">
                                </div>
                                <h5>Confirm Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('fees-record') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/accounts/fees record.png" alt="">
                                </div>
                                <h5>Fees Record</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('fees-record') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/affaque/attendance-01.png" alt="">
                                </div>
                                <h5>Scholarships</h5>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
        </div>


    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
