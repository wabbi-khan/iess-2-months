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
                    <li>Book form</li>
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
                            <h3>Add Book</h3>
                        </div>

                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Book Name *</label>
                                <input type="text" name="book_name" id="book_name" placeholder="Enter Book Name"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Author name *</label>
                                <input type="text" name="author_name" id="author_name" required
                                    placeholder="Enter Author Name" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Volume*</label>
                                <input type="text" name="Volume" id="Volume" placeholder="Enter Volume"
                                    class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Edition*</label>
                                <input type="text" name="edition" id="edition" placeholder="Enter Edition"
                                    class="form-control" />
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Category*</label>
                                <select class="form-control" id="inputGroupSelect02">
                                    <option value="1">Programming</option>
                                    <option value="2">Web Development</option>
                                    <option value="3">Graphic Designing</option>
                                </select>
                            </div>
                                                   
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date *</label>
                                <input type="date" name="institute_city" id="institute_city" required
                                    placeholder="Enter City" class="form-control" />
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Book Picture (optional) *</label>
                                <input type="file" name="image" id="image" required placeholder="Enter Contact"
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
            <div class="justify-content-center m-auto">
    
                @include('main_super_admin.dashboard.include.poweredby')
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('main_super_admin.dashboard.include.footer')
