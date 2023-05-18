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
                    <li>Add Section</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Promote Student</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Class</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Section *</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Section</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>



                        </div>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll" />
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Student Image</th>
                                        <th>Cadet Number</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>House</th>
                                        <th>Enrollment</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" />
                                                <label class="form-check-label">#123</label>
                                            </div>
                                        </td>
                                        <!-- <td class="text-center">
                                            <img src="/main_assets/img/figure/student2.png" alt="student" />
                                        </td> -->
                                        <td>Image</td>
                                        <td>123123</td>
                                        <td>Class 2</td>
                                        <td>Section A</td>
                                        <td>house 242</td>
                                        <td>323</td>
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
                        <div class="row d-flex justify-content-center">
                            <div class="mt-4 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
                                </button>
                            </div>
                        </div>

                        <!-- Parents Details -->




                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
