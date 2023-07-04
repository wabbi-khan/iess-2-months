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
                <h3 class="text-center"> "Campus Name" </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Time Table</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Time Table</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="#" method="">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Section</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                               <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    next
                                </button>
                            </div>
                        </div>
                     
                    </form>
                    <hr style="height:4px; background:#ffae01"/>
                    

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
                                    <th>Subject</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>

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

                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                 
                                </tr>
                            </tbody>
                        </table>
                        <div class="row my-4">
                            <div class="col-md-12 d-flex justify-content-center align-content-center">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Finish
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">

                        @include('main_super_admin.dashboard.include.poweredby')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
