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
                    <li>Subject form</li>
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
                            <h3>Add Subject</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Section *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Select Subject *</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="1">English</option>
                                    <option value="2">Urdu</option>
                                    <option value="3">Maths</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Author Name *</label>
                                <input type="text" name="last_name" id="last_name" required placeholder="Wahab"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Name *</label>
                                <input type="text" name="last_name" id="last_name" required
                                    placeholder="English book" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>No: of Chapters *</label>
                                <input type="text" name="last_name" id="last_name" required
                                    placeholder="(i.e) 12, 20" class="form-control" />
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mg-t-8">
                                <button t ype="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
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
