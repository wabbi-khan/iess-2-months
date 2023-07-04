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
                    <hr style="height:4px; background:#ffae01" />


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
