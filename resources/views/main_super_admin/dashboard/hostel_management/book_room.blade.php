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
                    <li>Book Hostel Room</li>
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
                            <h3>Book Hostel Room</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student ID *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="ID" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student Name *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Name" required
                                    class="form-control" />
                                {{-- <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select> --}}
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student Gender *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Hostel Name *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">Hostel 1</option>
                                    <option value="2">Hostel 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Available Rooms*</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">Room 1 (3 beds)</option>
                                    <option value="2">Room 2 (4 beds)</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Food *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">With Food</option>
                                    <option value="2">Without Food</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Amount *</label>
                                <input type="number" name="first_name" id="first_name" placeholder="Name" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Start Date *</label>
                                <input type="date" name="first_name" id="first_name" placeholder="Name" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>End Date *</label>
                                <input type="date" name="first_name" id="first_name" placeholder="Name" required
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
