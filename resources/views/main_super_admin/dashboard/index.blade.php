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
                <h3>Admin Dashboard</h3>
                <ul>
                    <li>
                        <a href="/main_assets/home.html">Home</a>
                    </li>
                    <li>Admin</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->
            <div class="row gutters-20">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-green">
                                    <i class="flaticon-classmates text-green"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">Students</div>
                                    <div class="item-number">
                                        <span class="counter" data-num="150000">1,50,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-blue">
                                    <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">Teachers</div>
                                    <div class="item-number">
                                        <span class="counter" data-num="2250">2,250</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-yellow d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-building-columns text-orange"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">Institutes</div>
                                    <div class="item-number">
                                        <span class="counter" data-num="130">130</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-red d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-school-flag text-red"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">campuses</div>
                                    <div class="item-number">
                                        <span class="counter" data-num="20">20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard summery End Here -->
            <!-- Dashboard Content Start Here -->
            <div class="row gutters-20">
                <div class="col-12 col-xl-8 col-6-xxxl">
                    <div class="card dashboard-card-one pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Students Progress</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="earning-report">
                                <div class="item-content">
                                    <div class="single-item pseudo-bg-blue">
                                        <h4>Boys</h4>
                                        <span>70%</span>
                                    </div>
                                    <div class="single-item pseudo-bg-red">
                                        <h4>Girls</h4>
                                        <span>30%</span>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="date-dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">Jun 20, 2023</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#">Jun 20, 2023</a>
                                        <a class="dropdown-item" href="/main_assets/#">Jun 20, 2023</a>
                                        <a class="dropdown-item" href="/main_assets/#">Jun 20, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="earning-chart-wrap">
                                <canvas id="earning-line-chart" width="660" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6 col-3-xxxl">
                    <div class="card dashboard-card-three pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Students</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="doughnut-chart-wrap">
                                <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                            </div>
                            <div class="student-report">
                                <div class="student-count pseudo-bg-blue">
                                    <h4 class="item-title">Female Students</h4>
                                    <div class="item-number">45,000</div>
                                </div>
                                <div class="student-count pseudo-bg-yellow">
                                    <h4 class="item-title">Male Students</h4>
                                    <div class="item-number">1,05,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-3-xxxl">
                    <div class="card dashboard-card-two pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Expenses</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="expense-report">
                                <div class="monthly-expense pseudo-bg-Aquamarine">
                                    <div class="expense-date">Jun 2023</div>
                                    <div class="expense-amount"><span></span> 15,000</div>
                                </div>
                                <div class="monthly-expense pseudo-bg-blue">
                                    <div class="expense-date">Jun 2023</div>
                                    <div class="expense-amount"><span></span> 10,000</div>
                                </div>
                                <div class="monthly-expense pseudo-bg-yellow">
                                    <div class="expense-date">Jun 2023</div>
                                    <div class="expense-amount"><span></span> 8,000</div>
                                </div>
                            </div>
                            <div class="expense-chart-wrap">
                                <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-four pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Event Calender</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="calender-wrap">
                                <div id="fc-calender" class="fc-calender"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-five pd-b-20">
                        <div class="card-body pd-b-14">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Teachers</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <h6 class="traffic-title">Total Teacher</h6>
                            <div class="traffic-number">2,250</div>
                            <div class="traffic-bar">
                                <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct"></div>
                                <div class="search" data-toggle="tooltip" data-placement="top" title="Search"></div>
                                <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                                </div>
                                <div class="social" data-toggle="tooltip" data-placement="top" title="Social"></div>
                            </div>
                            <div class="traffic-table table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="t-title pseudo-bg-Aquamarine">Present</td>
                                            <td>2000</td>
                                            <td>70%</td>
                                        </tr>
                                        <tr>
                                            <td class="t-title pseudo-bg-blue">Absent</td>
                                            <td>210</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td class="t-title pseudo-bg-yellow">On Leave</td>
                                            <td>40</td>
                                            <td>8%</td>
                                        </tr>
                                        <tr>
                                            <td class="t-title pseudo-bg-red">Promotion</td>
                                            <td>10</td>
                                            <td>2%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-4-xxxl">
                    <div class="card dashboard-card-six pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1 mg-b-17">
                                <div class="item-title">
                                    <h3>Notice Board</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="/main_assets/#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="/main_assets/#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notice-box-wrap">
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 June, 2023</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. </a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 June, 2023</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 June, 2023</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 June, 2019</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 June, 2019</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 June, 2019</div>
                                    <h6 class="notice-title">
                                        <a href="/main_assets/#">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</a>
                                    </h6>
                                    <div class="entry-meta">
                                        Xcl Technologies / <span>5 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End Here -->
            <!-- Social Media Start Here -->
            <div class="row gutters-20">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-fb hover-fb">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">Like us on facebook</h6>
                                </div>
                            </div>
                            <div class="social-like">30,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-twitter hover-twitter">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">Follow us on twitter</h6>
                                </div>
                            </div>
                            <div class="social-like">1,11,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-gplus hover-gplus">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-google-plus-g"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">Follow us on googleplus</h6>
                                </div>
                            </div>
                            <div class="social-like">19,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card dashboard-card-seven">
                        <div class="social-media bg-linkedin hover-linked">
                            <div class="media media-none--lg">
                                <div class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <div class="media-body space-sm">
                                    <h6 class="item-title">Follow us on linked</h6>
                                </div>
                            </div>
                            <div class="social-like">45,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media End Here -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('main_super_admin.dashboard.include.footer')
