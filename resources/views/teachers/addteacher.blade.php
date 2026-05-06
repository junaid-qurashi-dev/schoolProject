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
                        <li class="breadcrumb-item"><a href="{{ route('Addteacher') }}">New</a>
                        </li>
                        <li class="breadcrumb-item">Teacher</li>
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
                <form enctype="multipart/form-data" method="POST" action="{{ route('storeteacher') }}">
                    @csrf

                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-person-plus-fill me-2"></i>Add Teacher
                        </h4>

                        <div class="row">

                            <!-- ================= Teacher SECTION ================= -->

                            <!-- NAME -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="tname" class="form-control">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select name="tgender" class="form-select">
                                        <option disabled selected>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" name="tdob" class="form-control">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="temail" class="form-control">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="tphone" class="form-control">
                                </div>
                            </div>



                            <!-- PHOTO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Teacher Photo</label>
                                <input type="file" name="tphoto" class="form-control" onchange="previewImage(event)">
                            </div>

                            <div class="col-md-6 mb-4 text-center">
                                <label class="form-label fw-semibold d-block">Preview</label>
                                <img id="photoPreview" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    style="width:110px;height:110px;border-radius:50%;">
                            </div>

                            <!-- ADMISSION DATE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Joining Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" name="joining_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Salary</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="number" name="salary" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Experience</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="number" name="experience" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <input type="hidden" name="user_id" class="form-control" value="1">
                        </div>

                        <!-- ADDRESS -->
                        <div class="col-12 mb-4">
                            <label class="form-label fw-semibold">Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- BUTTON -->
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-success px-4 py-2 shadow">
                                <i class="bi bi-check-circle me-1"></i>Save Teacher
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
