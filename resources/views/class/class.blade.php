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
                        <li class="breadcrumb-item"><a href="#">Home</a>
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
                    <form>
                        <div class="card shadow-lg border-0 p-4" style="border-radius:15px;">

                            <h4 class="mb-4 fw-bold text-warning">
                                <i class="bi bi-mortarboard-fill me-2"></i>Create Class
                            </h4>

                            <div class="row">

                                <!-- CLASS -->
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-semibold">Select Class</label>
                                    <select class="form-select" id="classSelect">
                                        <option value="">Select Class</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">Class {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <!-- SECTION -->
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-semibold">Section</label>
                                    <select class="form-select">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>

                                <!-- ROOM -->
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-semibold">Room No</label>
                                    <input type="text" class="form-control" placeholder="A-101">
                                </div>

                                <!-- TIMING -->
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Start Time</label>
                                    <input type="time" class="form-control">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">End Time</label>
                                    <input type="time" class="form-control">
                                </div>

                                <!-- CLASS TEACHER -->
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Class Teacher</label>
                                    <select class="form-select">
                                        <option>Select Teacher</option>
                                        <option>Mr. Sharma</option>
                                        <option>Mrs. Gupta</option>
                                        <option>Mr. Singh</option>
                                    </select>
                                </div>

                                <!-- TOTAL STUDENTS -->
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Total Students</label>
                                    <input type="number" class="form-control" placeholder="40">
                                </div>

                                <!-- SUBJECTS -->
                                <div class="col-12 mb-4">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-journal-bookmark me-1"></i>Subjects (Auto Based on Class)
                                    </label>

                                    <div id="subjectsBox" class="row"></div>
                                </div>

                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="text-end mt-4">
                            <button class="btn btn-warning px-4 py-2 shadow">
                                <i class="bi bi-check-circle me-1"></i>Create Class
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script>
            const subjectsData = {
                primary: ["Hindi", "English", "Maths", "Environment"],
                middle: ["Hindi", "English", "Maths", "Science", "History", "Political Science"],
                senior: ["Hindi", "English", "History", "Political Science"]
            };

            document.getElementById('classSelect').addEventListener('change', function() {
                let val = parseInt(this.value);
                let box = document.getElementById('subjectsBox');
                box.innerHTML = "";

                let subjects = [];

                if (val >= 1 && val <= 5) {
                    subjects = subjectsData.primary;
                } else if (val >= 6 && val <= 10) {
                    subjects = subjectsData.middle;
                } else if (val >= 11 && val <= 12) {
                    subjects = subjectsData.senior;
                }

                subjects.forEach(sub => {
                    box.innerHTML += `
        <div class="col-md-3 mb-3">
            <div class="form-check border rounded p-2 shadow-sm">
                <input class="form-check-input" type="checkbox" checked>
                <label class="form-check-label ms-1">${sub}</label>
            </div>
        </div>
        `;
                });
            });
        </script>
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
