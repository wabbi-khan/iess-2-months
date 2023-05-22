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
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Human Resource</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-employees') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/Exam and HR/employee-01.png" alt="">
                                </div>
                                <h5>Employee</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('employees-attendance') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/Exam and HR/attendance-01.png" alt="">
                                </div>
                                <h5>Attendance Record</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/leave-01.png" alt="">
                            </div>
                            <h5>Leaves</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-holidays') }}">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/public holiday.png" alt="">
                            </div>
                            <h5>Public Holiday</h5>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/Exam and HR/departments-01.png" alt="">
                            </div>
                            <h5>Department</h5>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="text-center">
                @include('main_super_admin.dashboard.include.poweredby')

            </div>


        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
