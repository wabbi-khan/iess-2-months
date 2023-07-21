@include('studen_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('studen_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "Campus Name" </h3>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                <div class="profile_main">
                   <div class="row">
                    <div class="col-md-4">
                        <div class="left">
                            <div class="student_img">
                                <img src="assets/girl.jpg" alt="">
                                <span>Anas Arain</span>
                            </div>
                            <hr>

                            <div class="class_detail">
                                <ul>
                                    <li>Student ID: <span>12313</span> </li>
                                    <li>Class: <span>4</span></li>
                                    <li>Section: <span>A</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right">
                     <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Personal Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     
  <div class=" pt-4">
  <table class="table table-bordered table-hover rounded">
  <tbody>
    <tr>
      <th>General Information</th>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <th>First Name</th>
      <td>John</td>
      <td>Peter</td>
      <td>John</td>
    </tr>
    <tr>
      <th>Last Name</th>
      <td>Carter</td>
      <td>Parker</td>
      <td>Rambo</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>johncarter@mail.com</td>
      <td>peterparker@mail.com</td>
      <td>johnrambo@mail.com</td>
    </tr>
  </tbody>
</table>
  </div> 
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class=" pt-4">
  <table class="table table-bordered table-hover rounded">
  <tbody>
    <tr>
      <th>Personal Information</th>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <th>First Name</th>
      <td>John</td>
      <td>Peter</td>
      <td>John</td>
    </tr>
    <tr>
      <th>Last Name</th>
      <td>Carter</td>
      <td>Parker</td>
      <td>Rambo</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>johncarter@mail.com</td>
      <td>peterparker@mail.com</td>
      <td>johnrambo@mail.com</td>
    </tr>
  </tbody>
</table>
  </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

  <div class=" pt-4">
  <table class="table table-bordered table-hover rounded">
  <tbody>
    <tr>
      <th>Contact</th>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <th>First Name</th>
      <td>John</td>
      <td>Peter</td>
      <td>John</td>
    </tr>
    <tr>
      <th>Last Name</th>
      <td>Carter</td>
      <td>Parker</td>
      <td>Rambo</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>johncarter@mail.com</td>
      <td>peterparker@mail.com</td>
      <td>johnrambo@mail.com</td>
    </tr>
  </tbody>
</table>
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
                </div>
            </div>
        </div>
    </div>
</div>
@include('main_super_admin.dashboard.include.footer')