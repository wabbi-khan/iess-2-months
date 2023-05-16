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
                        <a href="index.html">Home</a>
                    </li>
                    <li>Student form</li>
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
                            <h3>Add Student</h3>
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
                                <label>Surname*</label>
                                <input type="text" name="surname" id="surname" 
                                    placeholder="Enter  Email" class="form-control" />
                            </div>

                             <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Gender*</label>
                                <select class="custom-select" id="inputGroupSelect02">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                            </div>
                                
  
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Religion*</label>
                                <input type="text" name="religion" id="religion" required
                                    placeholder="Enter  Religion" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Birth *</label>
                                <input type="date" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date of Birth Certificate *</label>
                                <input type="file" name="image" id="image" required
                                    placeholder="Enter Contact" class="form-control" />
                            </div>
                                
                           


                           
                           
                        </div>

                        <!-- Parents Details -->
                         <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Parents Details</h3>
                        </div>
                       
                    </div>
                      <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Father Name *</label>
                                <input type="text" name="father_name" id="father_name" placeholder="Enter  Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Contact *</label>
                                <input type="text" name="father_contact" id="father_contact" required
                                    placeholder="Enter father contact" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Address*</label>
                                <input type="text" name="Address" id="Address" 
                                    placeholder="Enter  Address" class="form-control" />
                            </div>

                                        
                           
                        </div>

                        <!-- Acdemiv info -->
                                     <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Academic Details</h3>
                        </div>
                       
                    </div>
                      <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Enrollment Date *</label>
                                <input type="date" name="enrollment_date" id="enrollment_date" placeholder="date..."
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Class *</label>
                                <input type="text" name="class" id="class" required
                                    placeholder="Enter class" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Section*</label>
                                <input type="text" name="section" id="surname" 
                                    placeholder="Enter  section" class="form-control" />
                            </div>     
                                
  
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>GR#*</label>
                                <input type="text" name="gr" id="gr" required
                                    placeholder="Enter  Religion" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Scholarship Awarded(percentage)*</label>
                                <input type="text" name="scholarship_percentage" id="scholarship_percentage" required
                                    placeholder="Enter  Religion" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Student Picture*</label>
                                <input type="file" name="student_img" id="student_img" required
                                     class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Covid Vaccination Certificate*</label>
                                <input type="file" name="covid_certificate" id="covid_certificate" 
                                    placeholder="Enter  Religion" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Last School*</label>
                                <input type="text" name="last_school" id="last_school" 
                                placeholder="Enter Last School"
                                     class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Leaving Certificate*</label>
                                <input type="file" name="leaving_certificate" id="leaving_certificate" 
                                    placeholder="..." class="form-control" />
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
                                <input type="text" name="user_name" id="user_name" placeholder="Enter.."
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Password*</label>
                                <input type="text" name="password" id="password" required
                                    placeholder="Enter last name" class="form-control" />
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