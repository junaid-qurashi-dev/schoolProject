@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('AddStudents') }}">New</a>
                        </li>
                        <li class="breadcrumb-item">Students</li>
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

                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <form enctype="multipart/form-data">
                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-pencil-square me-2"></i>Edit Teacher
                        </h4>

                        <div class="row">

                            <!-- NAME -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" value="Neha Gupta">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select class="form-select">
                                        <option>Male</option>
                                        <option selected>Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" class="form-control" value="1992-01-10">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" value="neha@gmail.com">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" class="form-control" value="9876543210">
                                </div>
                            </div>

                            <!-- SUBJECT -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Subject</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-book"></i></span>
                                    <select class="form-select">
                                        <option selected>Mathematics</option>
                                        <option>Physics</option>
                                        <option>Chemistry</option>
                                    </select>
                                </div>
                            </div>

                            <!-- CLASS (MULTI SELECT) -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Assign Classes</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select class="form-select" multiple>
                                        <option selected>Class 10-A</option>
                                        <option selected>Class 9-B</option>
                                        <option>Class 8-A</option>
                                    </select>
                                </div>
                            </div>

                            <!-- EXPERIENCE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Experience</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-briefcase"></i></span>
                                    <input type="text" class="form-control" value="5 Years">
                                </div>
                            </div>

                            <!-- SALARY -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Salary</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-cash"></i></span>
                                    <input type="number" class="form-control" value="35000">
                                </div>
                            </div>

                            <!-- JOINING DATE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Joining Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-check"></i></span>
                                    <input type="date" class="form-control" value="2020-06-15">
                                </div>
                            </div>

                            <!-- STATUS -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Status</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- PHOTO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Photo</label>
                                <input type="file" class="form-control">
                            </div>

                            <!-- ADDRESS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <textarea class="form-control" rows="2">Delhi, India</textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="text-end mt-4">
                        <button class="btn btn-primary px-4 py-2 shadow mb-3">
                            <i class="bi bi-check-circle me-1"></i>Update Teacher
                        </button>
                    </div>

                </form>
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
