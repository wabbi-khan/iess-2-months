@include('main_super_admin.dashboard.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "Campus Name" </h3>
            </div>
            <div class="container card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Diary/Assignments</h3>
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
                                <select name="classid" class="form-control classid">
                                    <option value="" selected="" disabled="">Subject</option>
                                    <option value="1">Urdu</option>
                                    <option value="2">Eng</option>
                                    <option value="3">Maths</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <textarea type="textarea" class="form-control" id="diary" placeholder="Enter New Diary Note"></textarea>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">

                                <input type="file" class="form-control" placeholder="Upload File" />
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr style="height:4px; background:#ffae01" />
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8 my-5">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>


                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>


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
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Diary Notes</th>
                                    <th>Date</th>
                                    <th>More</th>
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

                                    <td>Wahab</td>
                                    <td>130</td>
                                    <td>150</td>
                                    <td>80%</td>
                                    <td>A+</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="{{ route('view-student') }}"><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>View</a>
                                            </div>
                                        </div>
                                    </td>
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

                </div>
            </div>
        </div>

    </div>
    <!-- Page Area End Here -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="powerBy">
                @include('teacher_panel.include.poweredby')

            </div>
        </div>
    </div>
</div>
@include('main_super_admin.dashboard.include.footer')
