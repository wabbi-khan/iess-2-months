<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <!-- <div class="header-logo">
               <a href="/main_assets/index.html"><img src="/main_assets/img/logo1.png" alt="logo"></a>
           </div> -->
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item ">
                <a href="{{ route('main-dashboard') }}" class="nav-link"><i
                        class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Institutes</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('add-institute') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Institutes Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all-institute') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Institutes</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-thin fa-school-flag"></i><span>Campus</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('add-campus') }}" class="nav-link"><i class="fas fa-angle-right"></i>Campus
                            Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all-campus') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Campus</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('campus-general-operation') }}" class="nav-link"><i class="fas fa-angle-right"></i>General operations</a>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class=" fas fa-thin fa-school"></i><span>Campus 1</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('campus-general-operation') }}" class="nav-link"><i
                                class="fas fa-thin fa-graduation-cap"></i>General operations</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-hr') }}" class="nav-link"><i class="fa-solid fa-person"></i>HR</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-exams') }}" class="nav-link"><i
                                class="fa-regular fa-note-sticky"></i>Exams</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-accounts') }}" class="nav-link"><i
                                class="fa-solid fa-file-invoice-dollar"></i>Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('campus-accounts') }}" class="nav-link"><i
                                class="fa-solid fa-book"></i>Digital Library</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
