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
                    <li>Account Setting</li>
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
                            <h3>Account Setting</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>First Name *</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Enter  Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" id="last_name" required
                                    placeholder="Enter last name" class="form-control" />
                            </div>




                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Profile image *</label>
                                <input type="file" name="image" id="image" required placeholder="Enter Contact"
                                    class="form-control" />
                            </div>






                        </div>

                        <!-- Login Credential -->
                        <div class="heading-layout1">
                            <div class="item-title Add-student m-auto justify-content-center">
                                <h3>Login Credentials</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Email/username*</label>
                                <input type="text" name="user_name" id="user_name" placeholder="Username.." required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Password*</label>
                                <input type="text" name="password" id="password" required placeholder="Password"
                                    class="form-control" />
                            </div>


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
