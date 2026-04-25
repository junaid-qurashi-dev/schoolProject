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

                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"
                    onsubmit="console.log('FORM SUBMITTED')">
                    @csrf
                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-person-plus-fill me-2"></i>Add Student
                        </h4>

                        <div class="row">

                            <!-- NAME -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select name="gender" class="form-select">
                                        <option selected disabled>Select Gender</option>
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
                                    <input type="date" name="dob" class="form-control">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                </div>
                            </div>



                            <!-- CLASS -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Class</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select name="class" class="form-select">
                                        <option selected disabled>Select Class</option>
                                        <option>10-A</option>
                                        <option>10-B</option>
                                    </select>
                                </div>
                            </div>
                            {{-- Photo  --}}
                            <!-- PHOTO UPLOAD -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Student Photo</label>
                                <input type="file" name="photo" class="form-control" accept="image/*"
                                    onchange="previewImage(event)">
                            </div>

                            <!-- PHOTO PREVIEW -->
                            <div class="col-md-6 mb-4 text-center">
                                <label class="form-label fw-semibold d-block">Preview</label>
                                <img id="photoPreview" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    style="width:110px;height:110px;object-fit:cover;border-radius:50%;border:2px solid #eee;">
                            </div>
                            <!-- ROLL NO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Roll Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-hash"></i></span>
                                    <input type="text" class="form-control" placeholder="Assigned by Teacher"
                                        value="{{ $nextRoll }}" readonly>
                                </div>
                            </div>

                            {{-- Addmision Date  --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Addmision Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" name="admission_date" class="form-control">
                                </div>
                            </div>
                            <!-- ADDRESS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <textarea name="address" class="form-control" rows="2" placeholder="Enter address"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2 mb-3 shadow">
                            <i class="bi bi-check-circle me-1"></i>Save Student
                        </button>
                    </div>

                </form>

            </div>
        </div>

        <!-- JS -->
        <script>
            function previewImage(event) {
                let reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('photoPreview').src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }

            // max 5 subjects
            let max = 5;
            document.querySelectorAll('.subject-checkbox').forEach(cb => {
                cb.addEventListener('change', function() {
                    let checked = document.querySelectorAll('.subject-checkbox:checked');
                    if (checked.length > max) {
                        this.checked = false;
                        alert("Maximum 5 subjects allowed");
                    }
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
