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
                <h3 class="text-center">"School Name Here"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>General operations</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('admissions') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/new addmission-01.png" alt="">
                                </div>
                                <h5>New Admissions</h5>
                            </div>
                        </a>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/attendance-01.png" alt="">
                            </div>
                            <h5>View Attendance</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/result-01.png" alt="">
                            </div>
                            <h5>View Results</h5>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/promote student.png" alt="">
                            </div>
                            <h5>Promote Students</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/former 01.png" alt="">
                            </div>
                            <h5>Former Students</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/time table-01.png" alt="">
                            </div>
                            <h5>View Timetable</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/syllabus-01.png" alt="">
                            </div>
                            <h5>Syllabus</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/class-01.png" alt="">
                            </div>
                            <h5>Classes</h5>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/subject-01.png" alt="">
                            </div>
                            <h5>Subjects</h5>
                        </div>
                     </div>
                </div>
            </div>
<br>
            <div class="text-center">
                @include('main_super_admin.dashboard.include.poweredby')

            </div>

            <!-- <div class="card height-auto">
                <div class="card-body">
                    @if(session('success-message-Institute'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('success-message-Institute') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add New Campus</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('store-institute') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Name *</label>
                                <input type="text" name="institute_name" id="institute_name" placeholder="Enter  Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Address *</label>
                                <input type="text" name="Institute_address" id="Institute_address" required
                                    placeholder="Enter  Address" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Email *</label>
                                <input type="email" name="institute_email" id="institute_email" required
                                    placeholder="Enter  Email" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Password *</label>
                                <input type="password" name="institute_password" id="institute_password" required
                                    placeholder="Enter  Password" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus City *</label>
                                <input type="text" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Contact *</label>
                                <input type="text" name="institute_contact" id="institute_contact" required
                                    placeholder="Enter Contact" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus PTCL *</label>
                                <input type="text" name="institute_ptcl" id="institute_ptcl" required
                                    placeholder="Enter Landline" class="form-control" />
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')