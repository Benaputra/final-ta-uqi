<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/default.png"
            alt="">

        @if (auth()->check())
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        @else
            <h6 class="mt-3 f-14 f-w-600">Blank</h6>
        @endif
        </a>
        <p class="mb-0 font-roboto">Super Admin</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Akademik </h6>
                        </div>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard"
                            data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg><span>Dashboard</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a></li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Master Data</span></a>
                        <ul class="nav-submenu menu-content active">
                            <li><a href="index.html">Mahasiswa</a></li>
                            <li><a href="dashboard-02.html">Prodi</a></li>
                            <li><a href="dashboard-02.html">Semester</a></li>
                            <li><a href="{{ route('kelas.index') }}">Kelas</a></li>
                        </ul>
                    </li>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
