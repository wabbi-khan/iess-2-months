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
                <h3 class="text-center">School Name Here</h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Attendance Details</li>
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
                               <select name="classid" class="form-control classid">
                                <option value="" selected="" disabled="">Class</option>
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option>     
                            
                            </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                               <select name="classid" class="form-control classid">
                                <option value="" selected="" disabled="">Subject</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>     
                             </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                               <select name="classid" class="form-control classid">
                                <option value="" selected="" disabled="">Section</option>
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option>     
                            
                            </select>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>From Date *</label>
                                <input type="date" name="Institute_address" id="Institute_address" required
                                     class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Email *</label>
                                <input type="email" name="institute_email" id="institute_email" required
                                    placeholder="Enter  Email" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Password *</label>
                                <input type="password" name="institute_password" id="institute_password" required
                                    placeholder="Enter  Password" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus City *</label>
                                <input type="text" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus Contact *</label>
                                <input type="text" name="institute_contact" id="institute_contact" required
                                    placeholder="Enter Contact" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Campus PTCL *</label>
                                <input type="text" name="institute_ptcl" id="institute_ptcl" required
                                    placeholder="Enter Landline" class="form-control" />
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
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