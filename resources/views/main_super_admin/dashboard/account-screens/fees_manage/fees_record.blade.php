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
                <h3 class="text-center">
                    "Campus Name"
                </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Student Fees Status</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Select Details</h3>
                        </div>

                    </div>


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
                                <h3>Student Fees Status
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
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Fees Type</th>
                                    <th>Fees Month</th>
                                    <th>Fees Amount</th>
                                    <th>Payment Date</th>
                                    <th>Status</th>
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

                                    <td>Wahab</td>
                                    <td>1</td>
                                    <td>A</td>
                                    <td>sport</td>
                                    <td>Jan</td>
                                    <td>2000</td>
                                    <td>20-20-20</td>

                                    <td>
                                        <div>
                                            <button class="btn btn-success text-white text-11">Fees Paid</button>
                                            {{-- <button class="btn btn-danger text-white">Unpaid</button> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#12</label>
                                        </div>
                                    </td>

                                    <td>Usman</td>
                                    <td>1</td>
                                    <td>A</td>
                                    <td>sport</td>
                                    <td>Jan</td>
                                    <td>2000</td>
                                    <td>20-20-20</td>

                                    <td>
                                        <div>
                                            {{-- <button class="btn btn-success text-white text-11">Fees Paid</button> --}}
                                            <button class="btn btn-danger text-white">Unpaid</button>
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
