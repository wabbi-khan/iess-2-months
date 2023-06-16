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
                    <li>Student</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container payroll-heading">
                <h3 class="text-center">Student Name</h3>
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/update-profile.png" alt="student-screens-img">
                                </div>
                                <h5>Update Profile</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('my-courses') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/courses.png" alt="student-screens-img">
                                </div>
                                <h5>My Courses</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('classes-schedule') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/class-schedule.png" alt="student-screens-img">
                                </div>
                                <h5>Class Schedule</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('student-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/result.png" alt="student-screens-img">
                                </div>
                                <h5>Result</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/exams.png" alt="student-screens-img">
                                </div>
                                <h5>Exams</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/attendance.png" alt="student-screens-img">
                                </div>
                                <h5>Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/library.png" alt="student-screens-img">
                                </div>
                                <h5>Library</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/fees.png" alt="student-screens-img">
                                </div>
                                <h5>Fees</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/assignment.png" alt="student-screens-img">
                                </div>
                                <h5>Assignments</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/lms.png" alt="student-screens-img">
                                </div>
                                <h5>LMS</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/book-room.png" alt="student-screens-img">
                                </div>
                                <h5>Book Hostel Room</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/notice-board.png" alt="student-screens-img">
                                </div>
                                <h5>Notice Board</h5>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <a href="#">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/student/complaint.png" alt="student-screens-img">
                                </div>
                                <h5>Complaint</h5>
                            </div>
                        </a>
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
