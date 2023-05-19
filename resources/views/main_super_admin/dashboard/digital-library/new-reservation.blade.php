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
                    <li>Book Reservation</li>
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
                            <h3>New Reservation</h3>
                        </div>

                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student ID*</label>
                                <select class="form-control" id="inputGroupSelect02" required>
                                    <option value="1">20CS021</option>
                                    <option value="2">20CS023</option>
                                    <option value="3">20CS025</option>
                                </select>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Books*</label>
                                <select class="form-control" id="inputGroupSelect02" required>
                                    <option value="1">Programming</option>
                                    <option value="2">Web Development</option>
                                    <option value="3">Graphic Designing</option>
                                </select>
                            </div>
                                                   
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Issue *</label>
                                <input type="date" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                             <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Return *</label>
                                <input type="date" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                         
                             <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Issue
                                </button>
                            </div>



                        </div>

                
                        
                        
                    </form>

                </div>
            </div>
            <div class="justify-content-center m-auto">
    
                @include('main_super_admin.dashboard.include.poweredby')
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('main_super_admin.dashboard.include.footer')
