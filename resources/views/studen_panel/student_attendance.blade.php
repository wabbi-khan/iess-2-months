@include('studen_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('studen_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Campus Name"</h3>
            </div>
            <div class="container card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Classes Attendance</h3>
                        </div>
                    </div>
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
                                    <th>Subject Name</th>
                                    <th>Total Classes</th>
                                    <th>Absents</th>
                                    <th>Presents</th>
                                    <th>Percentage</th>
                                    <th></th>
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
                                    <td>Maths</td>
                                    <td>20</td>
                                    <td>5</td>
                                    <td>15</td>
                                    <td>80%</td>
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
@include('main_super_admin.dashboard.include.footer')