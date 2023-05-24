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
                    <li>Bonus</li>
                </ul>
            </div>
         
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Bonus</h3>
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
                    <!-- modal box start -->
              
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Bonus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                    <div class="col-lg-12">
                                   <h3> personal Details</h3>
                                    <div class="single-info-details">
                                    <div class="item-content">
                                     <div class="info-table table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Basic Salay: </td>
                                                    <td class="font-medium text-dark-medium">
                                                        " " </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <hr>
                               <div class="row">
                                    <div class="col-xl-12 col-lg-6 col-12 form-group">
                                 <label>Bonus Date *</label>
                                 <input type="date" name="bonus_date" id="bonus_date" placeholder="Enter Bonus Date"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Bonus Description*</label>
                                <input type="text" name="description" id="description" required
                                    placeholder="Enter Description" class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Amount*</label>
                                <input type="text" name="amount" id="amount" placeholder="Enter amount"
                                    class="form-control" />
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>
                            



                        </div>

                        </div>
                       
                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    <!-- modal box end -->
                     
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Hire Date</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#B-2</label>
                                        </div>
                                    </td>
                                    <!-- <td class="text-center">
                                        <img src="/main_assets/img/figure/student2.png" alt="student" />
                                    </td> -->
                                    <td>DataStructure</td>
                                    <td>William Norway</td>
                                    <td>4th</td>
                                    <td>3</td>
                                    <td>Programming</td>
                                    <td>                        <button type="submit" class="fw-btn-fill btn-gradient-yellow"  data-toggle="modal" data-target="#exampleModal">
                            Add New Bonus
                        </button></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                @include('main_super_admin.dashboard.include.poweredby')
            </div>
        </div>
    </div>

    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
