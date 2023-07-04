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
                <h3 class="text-center"> "Campus Name" </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Give Marks</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Upload Student Marks</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="#" method="">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Section</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>

                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Student ID</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" name="course_tilte" id="course_tilte" placeholder="Student Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Subject</option>
                                    <option value="1">Urdu</option>
                                    <option value="2">English</option>
                                    <option value="3">Maths</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" name="course_tilte" id="course_tilte" placeholder="Total Marks"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" name="course_tilte" id="course_tilte" placeholder="Obtained Marks"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" name="course_tilte" id="course_tilte" placeholder="Grade" required
                                    class="form-control" />
                            </div>
                        </div>

                    </form>
                    <div class="d-flex justify-content-center mt-5">

                        @include('main_super_admin.dashboard.include.poweredby')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
