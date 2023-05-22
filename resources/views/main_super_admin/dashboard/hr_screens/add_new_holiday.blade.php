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
                    <li>Add New</li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add New Holiday</h3>
                        </div>

                    </div>

                    <form class="new-added-form" action="#" method="">
                        <div class="row d-flex align-items-center">

                            <div class="col-xl-3 col-lg-4 col-12 form-group">
                                <label>Title*</label>
                                <input type="text" name="title" id="title" required
                                    class="form-control" />
                            </div>
                             <div class="col-xl-3 col-lg-4 col-12 form-group">
                                <label>Start Date *</label>
                                <input type="date" name="start_date" id="start_date" required
                                    class="form-control" />
                            </div>
                             <div class="col-xl-3 col-lg-4 col-12 form-group">
                                <label>End Date*</label>
                                <input type="date" name="end_date" id="end_date" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-8 col-lg-4 col-12 form-group">
                                <label>Description*</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <br>

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
