    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ route('admin') }}" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/logo-full.png" alt=""
                        class="logo logo-lg" />
                    <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/logo-abbr.png" alt=""
                        class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i>
                            </span>
                            <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item">
                                <a href="{{ route('admin') }}"
                                    class="nxl-link {{ request()->routeIs('admin') ? 'active' : '' }}"
                                    style="font-size: 14px !important;">
                                    Admin
                                </a>
                                {{-- <a href="{{ route('admin') }}" class="nxl-link">Admin</a> --}}
                            <li class="nxl-item">
                                <a href="{{ route('students') }}"
                                    class="nxl-link {{ request()->routeIs('students') ? 'active' : '' }}"
                                    style="font-size: 14px !important;">
                                    Students
                                </a>
                            </li>
                            <li class="nxl-item">
                                <a href="{{ route('parents') }}"
                                    class="nxl-link {{ request()->routeIs('parents') ? 'active' : '' }}"
                                    style="font-size: 14px !important;">
                                    Parents
                                </a>
                            </li>
                            <li class="nxl-item">
                                <a href="{{ route('teachers') }}"
                                    class="nxl-link {{ request()->routeIs('teachers') ? 'active' : '' }}"
                                    style="font-size: 14px !important;">
                                    Teachers
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="fa-solid fa-indian-rupee-sign"></i> </span>
                            <span class="nxl-mtext">Fess Module</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">

                            {{-- {{ route('fees.index') }} --}}
                            <li class="nxl-item fs-6"><a href="{{ route('fees.index') }}" class="nxl-link"
                                    style="font-size: 14px !important;">Payment Entry</a></li>
                            <li class="nxl-item fs-6"><a href="#" class="nxl-link"
                                    style="font-size: 14px !important;">Recipte Genrate</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-user-check"></i></span>
                            <span class="nxl-mtext">Teachers</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#" class="nxl-link"
                                    style="font-size: 14px !important;">All Teachers</a></li>
                            <li class="nxl-item"><a href="#" class="nxl-link"
                                    style="font-size: 14px !important;">Teachers Details</a></li>
                            <li class="nxl-item"><a href="#" class="nxl-link"
                                    style="font-size: 14px !important;">Add Teachers</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Payment</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-user"></i></span>

                            <span class="nxl-mtext">Parents</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">All Parents</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Parents Details</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Add Parents</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-book"></i></span>
                            <span class="nxl-mtext">Library</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">All Book</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;"> Add New Book</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Account</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">All Fees Collection</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Expensee</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Add Expensee</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layers"></i></span>
                            <span class="nxl-mtext">Class</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">All Class</a></li>
                            <li class="nxl-item"><a href=""
                                    class="nxl-link"style="font-size: 14px !important;">Add New Class</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layers"></i></span>
                            <span class="nxl-mtext">Subject</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Subject</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Add New Subject</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-calendar"></i></span>
                            <span class="nxl-mtext">Class Routine</span><span class="nxl-arrow">
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layers"></i></span>
                            <span class="nxl-mtext">Attendence</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href=""
                                    class="nxl-link"style="font-size: 14px !important;">Attendence</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-file-text"></i></span>
                            <span class="nxl-mtext">Exam</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Exam Schedule</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Exam Grade</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Genral</a></li>
                            <li class="nxl-item"><a href="#"
                                    class="nxl-link"style="font-size: 14px !important;">Genral</a></li>
                        </ul>
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-help-circle"></i></span>
                            <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link"
                                    href="#/"style="font-size: 14px !important;">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="https://bestwpware.com/html/tf/duralux-demo/help-knowledgebase.html"style="font-size: 14px !important;">KnowledgeBase</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="https://bestwpware.com/html/tf/duralux-demo/.docs/documentations.html"style="font-size: 14px !important;">Documentations</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="feather-sunrise fs-4 text-dark"></i>
                        <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                        <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running
                            easily.</p>
                        <a href="javascript:void(0);" class="btn btn-primary text-dark w-100">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
