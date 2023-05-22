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
                    <li>Attendance Details</li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Select Details</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="#" method="">
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-6 col-lg-4 col-12 form-group">
                                <label>From Date *</label>
                                <input type="date" name="Institute_address" id="Institute_address" required
                                    class="form-control" />
                            </div>
                            <div class="col-2-xxxl  col-lg-3 col-12 mt-4">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- <form class="mg-b-20"> --}}
                    <div class="row d-flex justify-content-end gutters-8 my-5">
                        <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by..." class="form-control" />
                        </div>

                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                Search
                            </button>
                        </div>
                    </div>
                    {{-- </form> --}}
                    <div class="table-responsive">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Students Attendance
                                </h3>
                            </div>

                        </div>
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Department</th>
                                    <th>Employee Name</th>
                                    <th>Is Present</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div>
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <td>Teacher</td>
                                    <td>Wahab</td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">check if present</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="{{ route('view-student') }}"><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
