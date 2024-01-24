<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Admin Al-Fatih</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Dashboard
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">reorder</i>
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            @if (Route::has('login'))
                @auth

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/students') ? 'active bg-gradient-success' : '' }}"
                            href="{{ route('students') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">groups</i>
                            </div>
                            <span class="nav-link-text ms-1">Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/books') ? 'active bg-gradient-success' : '' }}"
                            href="{{ route('books') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">local_library</i>
                            </div>
                            <span class="nav-link-text ms-1">Books</span>
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Add New Data
                        </h6>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/add-news') ? 'active bg-gradient-success' : '' }}"
                            href="{{ route('add-news') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">cached</i>
                            </div>
                            <span class="nav-link-text ms-1">Add News</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('admin/add-image-news') ? 'active bg-gradient-success' : '' }}"
                            href="{{ route('add-image-news') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">arrow_circle_up</i>
                            </div>
                            <span class="nav-link-text ms-1">Upload Image News</span>
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account
                        </h6>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">login</i>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <span class="nav-link-text ms-1">Sign Out</span>
                        </a>
                    </li>
                @endauth
            @endif
        </ul>
    </div>

</aside>
