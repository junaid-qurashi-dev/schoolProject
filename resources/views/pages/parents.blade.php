@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Parents</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Details</a>
                        </li>
                        <li class="breadcrumb-item">Parents Info</li>
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
                                        <h6 class="text-muted mb-1">Due Fees</h6>
                                        <h4 class="fw-bold mb-0">$4530</h4>
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
                                        <h6 class="text-muted mb-1">Notification</h6>
                                        <h4 class="fw-bold mb-0">10</h4>
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
                                        <h6 class="text-muted mb-1">Result</h6>
                                        <h4 class="fw-bold mb-0">12</h4>
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
                                        <h6 class="text-muted mb-1">Expensess</h6>
                                        <h4 class="fw-bold mb-0">$193000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-xxl-5">
                            <div class="card p-4">

                                <!-- Header -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="mb-0">About Me</h5>
                                </div>

                                <!-- Top Section -->
                                <div class="d-flex align-items-center gap-4 mb-4">
                                    <!-- Profile Image -->
                                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png"
                                        class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;"
                                        alt="profile">

                                    <!-- Right Content -->
                                    <div>
                                        <h4 class="mb-2">Jessia Rose</h4>
                                        <p class="text-muted mb-0" style="max-width: 300px;">
                                            Aliquam erat volutpat. Curabiene natis massa sedde lacustiquen sodale
                                            word moun taiery.
                                        </p>
                                    </div>

                                </div>

                                <!-- Details Section -->
                                <div class="card border-0 shadow-sm p-4"
                                    style="border-radius: 15px; background: #f8f9fa;">
                                    <h5 class="mb-4 text-primary fw-bold border-bottom pb-2">Student Profile</h5>
                                    <div class="row">
                                        <!-- Name -->
                                        <div class="col-md-6 mb-4">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-2 rounded shadow-sm me-3 text-primary"><i
                                                        class="bi bi-person-fill"></i></div>
                                                <div>
                                                    <small class="text-muted text-uppercase fw-semibold"
                                                        style="font-size: 11px; letter-spacing: 1px;">Full Name</small>
                                                    <div class="fw-bold text-dark">Jessia Rose</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gender -->

                                        <div class="col-md-6 mb-4">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-2 rounded shadow-sm me-3 text-danger"><i
                                                        class="bi bi-gender-ambiguous"></i></div>
                                                <div>
                                                    <small class="text-muted text-uppercase fw-semibold"
                                                        style="font-size: 11px; letter-spacing: 1px;">Gender</small>
                                                    <div class="fw-bold text-dark">Female</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Father & Mother -->
                                        <div class="col-md-6 mb-4 border-start border-3 border-info ps-3">
                                            <small class="text-muted">Father's Name</small>
                                            <div class="fw-bold">Fahim Rahman</div>
                                        </div>

                                        <div class="col-md-6 mb-4 border-start border-3 border-info ps-3">
                                            <small class="text-muted">Mother's Name</small>
                                            <div class="fw-bold">Jannatul Kazi</div>
                                        </div>

                                        <!-- Academic Info -->
                                        <div class="col-6 col-md-6 mb-3">
                                            <div class="p-3 bg-white rounded text-center shadow-sm">
                                                <small class="text-muted d-block">Class</small>
                                                <span class="badge bg-primary rounded-pill">Grade 2</span>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6 mb-3">
                                            <div class="p-3 bg-white rounded text-center shadow-sm">
                                                <small class="text-muted d-block">Roll No.</small>
                                                <span class="fw-bold">#10005</span>
                                            </div>
                                        </div>

                                        <!-- Contact & Address -->
                                        <div class="col-12 mt-3">
                                            <div class="p-3 rounded" style="background: #e9ecef;">
                                                <div class="row">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <i class="bi bi-geo-alt-fill text-secondary me-1"></i>
                                                        <strong>Address:</strong> House #10, Road #6, Australia
                                                    </div>
                                                    <div class="col-sm-6 text-sm-end">
                                                        <i class="bi bi-telephone-fill text-secondary me-1"></i>
                                                        <strong>Phone:</strong> +889856418
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">

                            <div class="table-responsive mt-5">
                                <div>
                                    <h6>All Expanse
                                    </h6>
                                </div>
                                <!-- Top Controls -->
                                <div class="d-flex justify-content-between align-items-center mb-3">

                                    <!-- Search -->
                                    <div class="search-box d-flex align-items-center">
                                        <i class="feather-search me-2 fs-6 text-muted"></i>
                                        <input type="text" class="form-control border-0 shadow-none"
                                            placeholder="Search here...">
                                        <button type="submit" class="btn btn-success btn-sm ">Search</button>
                                    </div>

                                    <!-- Right Side -->
                                    <div class="d-flex align-items-center gap-3">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                Newest
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Newest</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest</a></li>
                                            </ul>
                                        </div>




                                    </div>
                                </div>

                                <!-- Table -->
                                <table class="table table-bordered table-hover">

                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Expanse</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Paid</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Paid</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>
                                        <tr>
                                            <td>#00141</td>
                                            <td>Exam Fess</td>
                                            <td>$15.00</td>
                                            <td>Due</td>
                                            <td>akkhorschool@gmail.com</td>
                                            <td>22/02/2019</td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div>
                                <h6>All Exam Results
                                </h6>
                            </div>
                            <!-- Top Controls -->
                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <!-- Search -->
                                <div class="search-box d-flex align-items-center">
                                    <i class="feather-search me-2 fs-6 text-muted"></i>
                                    <input type="text" class="form-control border-0 shadow-none"
                                        placeholder="Search here...">
                                    <button type="submit" class="btn btn-success btn-sm ">Search</button>
                                </div>

                                <!-- Right Side -->
                                <div class="d-flex align-items-center gap-3">

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                            Newest
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Newest</a></li>
                                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                                        </ul>
                                    </div>




                                </div>

                            </div>

                            <!-- Table -->
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Expanse</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Paid</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Paid</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>
                                    <tr>
                                        <td>#00141</td>
                                        <td>Exam Fess</td>
                                        <td>$15.00</td>
                                        <td>Due</td>
                                        <td>akkhorschool@gmail.com</td>
                                        <td>22/02/2019</td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    </main>
@endsection
