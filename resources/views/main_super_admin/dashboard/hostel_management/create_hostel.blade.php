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
                    <li>Create Hostel form</li>
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
                            <h3>Create New Hostel</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Hostel Name *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Name" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Hostel type *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="" disabled selected>Select type</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Address *</label>
                                <input type="text" name="surname" id="surname"
                                    placeholder="House no 123 Hyderabad, Sindh" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Floors *</label>
                                <input type="number" name="surname" id="surname" placeholder="Total Floors in Hostel"
                                    class="form-control" />
                            </div>
                        </div>
                        {{-- ? show dynamic fields --}}
                        <div id="education_fields">
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-12 form-group">
                                <label>Room no *</label>
                                <input type="number" id="Degree" name="Degree[]" value=""
                                    placeholder="Room no" class="form-control" />
                            </div>
                            <div class="col-xl-5 col-lg-5 col-12 form-group">
                                <label>Total beds in room *</label>
                                <input type="number" id="Degree" name="Degree[]" value=""
                                    placeholder="Total beds in room" class="form-control" />
                            </div>

                            <div class="col-xl-2 col-lg-2 col-12" style="margin-top:40px">
                                <button class="btn btn-success py-4 px-5" type="button" onclick="education_fields();">
                                    <i class="fa-solid fa-plus"></i> </button>
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
