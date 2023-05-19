@include('main_super_admin.dashboard.include.header')


<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('main_super_admin.dashboard.include.navbar')

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
                    <li>All Categories</li>
                </ul>
            </div>
            {{-- <div class="row  d-flex justify-content-end">

                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <a href="{{ route('add-subject') }}">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                            Add New
                        </button>
                    </a>
                </div>

            </div> --}}
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">

                <div class="card-body">
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Book Category *</label>
                                <input type="text" name="last_name" id="last_name" required
                                    placeholder="(i.e) Englishm Urdu, Sindhi" class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Supplier *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8 mb-4">
                                <button t ype="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>

                        </div>
                    </form>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Categories</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>
                            <!-- <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Name ..." class="form-control" />
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Class ..." class="form-control" />
                            </div> -->
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
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
                                    <th>Category</th>
                                    <th>Supplier</th>
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

                                    <td>JavaScript</td>
                                    <td>Wahab</td>

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
