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
                    <li>Fees</li>
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
                                <label>Fees type *</label>
                                <input type="type" placeholder="Sports, Party, Event" name="Institute_address"
                                    id="Institute_address" required="required" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Enter amount *</label>
                                <input type="type" placeholder="Enter amount" name="Institute_address"
                                    id="Institute_address" required="required" class="form-control" />
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
                                <h3>Class Fees
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
                                    <th>Fees type</th>
                                    <th>Fees amount</th>
                                    <th>Extra fees</th>
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
                                    <td>sport</td>
                                    <td>2000</td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-warning text-white py-3 px-3 text-13 font-medium"
                                            data-toggle="modal" data-target="#exampleModal">
                                            + Extra fee
                                        </button>
                                    </td>



                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="{{ route('view-student') }}">
                                                    <i class="fas fa-redo-alt text-orange-peel"></i>View</a>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Extra Fees</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Class *</label>

                            <select name="classid" class="form-control classid">
                                <option value="" selected="" disabled="">
                                    Class</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>

                            </select>
                        </div>

                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Extra Fees type *</label>
                            <input type="text" placeholder="Sports, Party, Event" name="Institute_address"
                                id="Institute_address" required="required" class="form-control" />
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Extra Enter amount *</label>
                            <input type="text" placeholder="Enter amount" name="Institute_address"
                                id="Institute_address" required="required" class="form-control" />
                        </div>
                        <div class="col-12 d-flex justify-content-center  mg-t-8">
                            <button type="submit" class="btn btn-warning text-white py-3 px-5 text-13 font-medium">
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="row py-5 px-2">
                        <table class="table display text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Class</th>
                                    <th>Fees type</th>
                                    <th>Fees amount</th>
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

                                    <td>1</td>
                                    <td>sport</td>
                                    <td>2000</td>
                                    <td>
                                        <button class="btn btn-danger text-white">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary text-white">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
