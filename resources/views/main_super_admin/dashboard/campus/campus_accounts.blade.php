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
                <h3 class="text-center">"School Name Here"</h3>
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
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/general_operations/financial_management_system.JPG" alt="">
                            </div>
                            <h5>Fees</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Challans</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Confirm Fees</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Fees Record</h5>
                        </div>
                    </div>
                </div>
                  <h3 class="text-center">Payroll</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Salary</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Deduction</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Bonus</h5>
                        </div>
                    </div>

                </div>
                
                <h3 class="text-center">Inventory & Billing Management</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>All Inventory</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Add New Item</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="main_assets/img/schedule_exams.png" alt="">
                            </div>
                            <h5>Billings</h5>
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