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
                    <li>Digital Library</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container payroll-heading">
                <h3 class="text-center">Digital Library</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('add-new-category') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/library/new_category_icon-01.png" alt="">
                                </div>
                                <h5>New Category</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-books') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/library/add_new_book_icon-01.png" alt="">
                                </div>
                                <h5>Add New Book</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/library/student_fine_icon-01.png" alt="">
                            </div>
                            <h5>Student Fines</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('pro-student') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/library/book_reservation_icon-01.png" alt="">
                                </div>
                                <h5>Book Reservation</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('former-student') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/library/book_return_icon-01.png" alt="">
                                </div>
                                <h5>Book Return</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="box-main-card">
                            <div class="card-content">
                                <img src="assets/library/book_reneval_icon-01.png" alt="">
                            </div>
                            <h5>Book Renewal</h5>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-syllabus') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/syllabus-01.png" alt="">
                                </div>
                                <h5>Syllabus</h5>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-classes') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/library/supplier_profile_icon-01.png" alt="">
                                </div>
                                <h5>Supplier Profile</h5>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-subjects') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/subject-01.png" alt="">
                                </div>
                                <h5>Subjects</h5>
                            </div>
                        </a>
                    </div> --}}


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
