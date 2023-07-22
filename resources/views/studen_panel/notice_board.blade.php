@include('studen_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('studen_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "Campus Name" </h3>
            </div>
            <div class="container card height-auto">
                <div class="topBg">
                        <div class="news">
                            News & Events
                        </div>
                        <div>
                        <i class="fa fa-angle-left px-2" aria-hidden="true"></i> Back
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row mt-3">

                                <div class="events">
                                    <div class="date">
                                        22-july <br>
                                        2023
                                    </div>
                                    <div class="desc">
                                       <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit porro debitis ea repudiandae, eligendi obcaecati repellendus nisi aspernatur ducimus maxime maiores ab corporis voluptatem, delectus aliquam error praesentium iure expedita?</div>
                                       <div class="time_link">
    
                                           <div class="time">02:03</div>
                                           <div class="link">link</div>
                                        </div>
    
                                    </div>
                                </div>
                            </div><div class="row mt-3">

                                <div class="events">
                                    <div class="date">
                                        22-july <br>
                                        2023
                                    </div>
                                    <div class="desc">
                                       <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit porro debitis ea repudiandae, eligendi obcaecati repellendus nisi aspernatur ducimus maxime maiores ab corporis voluptatem, delectus aliquam error praesentium iure expedita?</div>
                                       <div class="time_link">
    
                                           <div class="time">02:03</div>
                                           <div class="link">link</div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@include('main_super_admin.dashboard.include.footer')