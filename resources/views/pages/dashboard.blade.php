@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://bestwpware.com/html/tf/duralux-demo/index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"></span>
                            </div>
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer"
                                                for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Invoices Awaiting Payment] start -->
                    <!-- Students -->
                    <div class="row g-4">

                        <!-- Students -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stat-card">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-success-subtle">
                                        <i class="feather-users text-success"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted mb-1">Students</h6>
                                        <h4 class="fw-bold mb-0">150000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teachers -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stat-card">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-primary-subtle">
                                        <i class="feather-users text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted mb-1">Teachers</h6>
                                        <h4 class="fw-bold mb-0">2250</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Parents -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stat-card">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-warning-subtle">
                                        <i class="feather-users text-warning"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted mb-1">Parents</h6>
                                        <h4 class="fw-bold mb-0">5690</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stat-card">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-danger-subtle">
                                        <i class="feather-dollar-sign text-danger"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted mb-1">Earnings</h6>
                                        <h4 class="fw-bold mb-0">$193000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- [Conversion Rate] end -->
                <!-- [Payment Records] start -->

                <!-- [Latest Leads] end -->
                <!--! BEGIN: [Upcoming Schedule] !-->
                <div class="main-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">

                                    <!-- Search -->
                                    <div class="search-box d-flex align-items-center">
                                        <i class="feather-search me-2 fs-6 text-muted"></i>
                                        <input type="text" class="form-control border-0 shadow-none"
                                            placeholder="Search here...">
                                    </div>

                                    <!-- Right Side -->
                                    <div class="d-flex align-items-center gap-3">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                                Newest
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Newest</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest</a></li>
                                            </ul>
                                        </div>

                                        <!-- Button -->
                                        <button class="btn btn-primary">
                                            + New Student
                                        </button>

                                    </div>

                                </div>
                            </div>
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Roll No</th>
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Class</th>
                                                    <th>Parent</th>
                                                    <th>Address</th>
                                                    <th>DOB</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>#00121</td>
                                                    <td>#</td>
                                                    <td>Jhon</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>Jack Sparrow</td>
                                                    <td> TA-107 Newyork</td>
                                                    <td>02/05/2001</td>
                                                    <td>+ 123 9988568</td>
                                                    <td>kazifahim93@gmail.com</td>
                                                </tr>

                                                <tr>
                                                    <td>#00122</td>
                                                    <td>#</td>
                                                    <td>Jessia Rose</td>
                                                    <td>Female</td>
                                                    <td>9</td>
                                                    <td>Jack Sparrow</td>
                                                    <td>59 Australia, Sydney</td>
                                                    <td>02/05/2001</td>
                                                    <td>+ 123 9988568</td>
                                                    <td>kazifahim93@gmail.com</td>
                                                </tr>

                                                <tr>
                                                    <td>#00121</td>
                                                    <td>#</td>
                                                    <td>Jhon</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>Jack Sparrow</td>
                                                    <td>TA-107 Newyork</td>
                                                    <td>02/05/2001</td>
                                                    <td>+ 123 9988568</td>
                                                    <td>kazifahim93@gmail.com</td>
                                                </tr>

                                                <tr>
                                                    <td>#00121</td>
                                                    <td>#</td>
                                                    <td>Jhon</td>
                                                    <td>Male</td>
                                                    <td>4</td>
                                                    <td>Jack Sparrow</td>
                                                    <td>TA-107 Newyork</td>
                                                    <td>02/05/2001</td>
                                                    <td>+ 123 9988568</td>
                                                    <td>kazifahim93@gmail.com</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4">

                    <div class="card stretch stretch-full mt-4">
                        <div class="card-header">
                            <h5 class="card-title">Upcoming Schedule</h5>
                            <div class="card-header-action">
                                <div class="card-header-btn">
                                    <div data-bs-toggle="tooltip" title="Delete">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                            data-bs-toggle="remove"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Refresh">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                            data-bs-toggle="refresh"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                            data-bs-toggle="expand"> </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25, 25">
                                        <div data-bs-toggle="tooltip" title="Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-at-sign"></i>New</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-calendar"></i>Event</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-bell"></i>Snoozed</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-trash-2"></i>Deleted</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-settings"></i>Settings</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-life-buoy"></i>Tips & Tricks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--! BEGIN: [Events] !-->
                            <div class="p-3 border border-dashed rounded-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div
                                            class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                            <span class="fs-18 fw-bold mb-1 d-block">20</span>
                                            <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                        </div>
                                        <div class="text-dark">
                                            <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">React
                                                Dashboard
                                                Design</a>
                                            <span class="fs-11 fw-normal text-muted text-truncate-1-line">11:30am -
                                                12:30pm</span>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/2.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/3.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/4.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/6.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Events] !-->
                            <div class="p-3 border border-dashed rounded-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div
                                            class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                            <span class="fs-18 fw-bold mb-1 d-block">30</span>
                                            <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                        </div>
                                        <div class="text-dark">
                                            <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Admin
                                                Design Concept</a>
                                            <span class="fs-11 fw-normal text-muted text-truncate-1-line">10:00am -
                                                12:00pm</span>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/2.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/3.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/5.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/6.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Events] !-->
                            <div class="p-3 border border-dashed rounded-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div
                                            class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                            <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                            <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                        </div>
                                        <div class="text-dark">
                                            <a href="javascript:void(0);"
                                                class="fw-bold mb-2 text-truncate-1-line">Standup Team Meeting</a>
                                            <span class="fs-11 fw-normal text-muted text-truncate-1-line">8:00am -
                                                9:00am</span>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/2.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/3.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/4.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/5.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Events] !-->
                            <div class="p-3 border border-dashed rounded-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div
                                            class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                            <span class="fs-18 fw-bold mb-1 d-block">25</span>
                                            <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                        </div>
                                        <div class="text-dark">
                                            <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Zoom
                                                Team Meeting</a>
                                            <span class="fs-11 fw-normal text-muted text-truncate-1-line">03:30pm -
                                                05:30pm</span>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/2.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/4.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/5.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="https://bestwpware.com/html/tf/duralux-demo/assets/images/avatar/6.png"
                                                class="img-fluid" alt="image" />
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);"
                            class="card-footer fs-11 fw-bold text-uppercase text-center py-4">Upcomming
                            Schedule</a>
                    </div>

                </div>

            </div>
        </div>

        <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script data-cfasync="false" src="https://bestwpware.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
                    defer></script>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
@endsection
