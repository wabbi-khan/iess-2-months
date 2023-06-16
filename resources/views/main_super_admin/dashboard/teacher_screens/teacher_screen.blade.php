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
                    <li>Teacher Name</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('all-student-attendance-mark') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/attendance.png" alt="">
                                </div>
                                <h5>Attendance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('teacher-result') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/result3-01.png" alt="">
                                </div>
                                <h5>Result</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('give-marks') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/result3-01.png" alt="">
                                </div>
                                <h5>Give Marks</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('recorded-lectures') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/recorded.png" alt="">
                                </div>
                                <h5>Recorded Lectures</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('diary') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/diary.png" alt="">
                                </div>
                                <h5>Diary/Assignments</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('course-material') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/course-material.png" alt="">
                                </div>
                                <h5>Course Material</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('timetable') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/time-table.png" alt="">
                                </div>
                                <h5>Time Table</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                        <a href="{{ route('events') }}">

                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="assets/teacher/event.png" alt="">
                                </div>
                                <h5>Events</h5>
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
