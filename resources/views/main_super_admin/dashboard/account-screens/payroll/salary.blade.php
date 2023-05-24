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
                    <li>Salary</li>
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
                            <h3>Accounts</h3>
                        </div>

                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Department*</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="CS">CS</option>
                                    <option value="Es">ES</option>
                                    <option value="EE">EE</option>
                                </select>
                            </div>
                                                   
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Month*</label>
                                <input type="date" name="Month" id="Month" required
                                    placeholder="Enter City" class="form-control" />
                            </div>




                             <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
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
