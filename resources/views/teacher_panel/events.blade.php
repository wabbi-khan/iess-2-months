@include('main_super_admin.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
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
                            <h3>Events Details</h3>
                        </div>

                    </div>


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
                                    <th>Event Name</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
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

                                    <td>Eid Ul Adha</td>
                                    <td>30 june</td>
                                    <td>2 july</td>

                                </tr>
                            </tbody>
                        </table>

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
