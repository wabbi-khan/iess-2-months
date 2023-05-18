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
                    <li>Students Details</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Details Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Student name</h3>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-img">
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div>
                        <div class="item-content">
                            <div class="header-inline item-header">
                                <h3 class="text-dark-medium font-medium"></h3>
                                <div class="header-elements">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-print"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-download"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <p>
                                Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                            </p> -->
                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td class="font-medium text-dark-medium">
                                                " "
                                            </td>
                                        </tr>
                                           <tr>
                                            <td>Password</td>
                                            <td class="font-medium text-dark-medium">
                                                " "
                                            </td>
                                        </tr>   <tr>
                                            <td>First Name</td>
                                            <td class="font-medium text-dark-medium">
                                                " "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td class="font-medium text-dark-medium">
                                                " " </td>
                                        </tr>
                                        <tr>
                                            <td>Surname:</td>
                                            <td class="font-medium text-dark-medium">
                                                " " </td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class="font-medium text-dark-medium">
                                                " "</td>
                                        </tr>
                                        <tr>
                                            <td>Religion:</td>
                                            <td class="font-medium text-dark-medium">
                                                " "</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td class="font-medium text-dark-medium">
                                                " "</td>
                                        </tr>
                                       
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-6">
                            <h3> Parents Details</h3>
                             <div class="single-info-details">
                                <div class="item-content">
                                    
                                    <!-- <p>
                                        Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                        taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                                    </p> -->
                                    <div class="info-table table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Father Name:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contact: </td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                               
                                              
        
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <h3> Academic Details</h3>
                             <div class="single-info-details">
                                <div class="item-content">
                                    <!-- <p>
                                        Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                        taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                                    </p> -->
                                    <div class="info-table table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Enrollment Date:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Class: </td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                                <tr>
                                                    <td>Section</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>

                                                <tr>
                                                    <td>GR#</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                                <tr>
                                                    <td>Scholarship</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                                <tr>
                                                    <td>Last School</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="student-detail-img">
                         <div>
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div>
                          <div>
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div>
                          <div>
                            <img src="/main_assets/img/figure/student1.jpg" alt="student" />
                        </div>
                        

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')