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
                    <li>Challan</li>
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

                    <form class="new-added-form" action="#" method="">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Class *</label>

                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Section *</label>

                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Section</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select fees type *</label>

                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Sport</option>
                                    <option value="1">cricket</option>
                                    <option value="2">football</option>
                                    <option value="3">basketball</option>

                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>To date *</label>
                                <input type="date" name="Institute_address" id="Institute_address"
                                    required="required" class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>From date *</label>
                                <input type="date" name="Institute_address" id="Institute_address"
                                    required="required" class="form-control" />
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
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
                                <h3>Student Challan
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
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Student Name</th>
                                    <th>Fees Type</th>
                                    <th>Month</th>
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
                                    <!-- <td class="text-center"> <img src="/main_assets/img/figure/student2.png"
                                    alt="student" /> </td> -->
                                    <td>1</td>
                                    <td>A</td>
                                    <td>Wahab</td>
                                    <td>sport</td>
                                    <td>Jan</td>

                                    <td>
                                        <a href="{{ route('print-challan') }}">

                                            <button class="btn btn-success text-white text-12 py-3">Print
                                                challan</button>
                                        </a>
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
