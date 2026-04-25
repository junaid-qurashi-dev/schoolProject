@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('AddStudents') }}">Home</a>
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

                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mt-4">

                <form>
                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-pencil-square me-2"></i>Edit Student
                        </h4>

                        <div class="row">

                            <!-- NAME -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" value="Amit Singh">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select class="form-select">
                                        <option selected>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" class="form-control" value="2006-05-10">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" value="amit@gmail.com">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" class="form-control" value="9998887776">
                                </div>
                            </div>

                            <!-- CLASS -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Class</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select class="form-select">
                                        <option>10-A</option>
                                        <option selected>10-B</option>
                                        <option>10-C</option>
                                    </select>
                                </div>
                            </div>

                            <!-- PHOTO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Update Photo</label>
                                <input type="file" class="form-control" accept="image/*" onchange="previewImage(event)">
                            </div>

                            <!-- PREVIEW -->
                            <div class="col-md-6 mb-4 text-center">
                                <label class="form-label fw-semibold d-block">Preview</label>
                                <img id="photoPreview" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    style="width:110px;height:110px;object-fit:cover;border-radius:50%;border:2px solid #eee;">
                            </div>

                            <!-- SUBJECTS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-journal-bookmark me-1"></i>Select Subjects (Max 5)
                                </label>

                                <div class="row">

                                    @foreach (['Maths', 'English', 'Science', 'History', 'Computer', 'Hindi'] as $sub)
                                        <div class="col-md-3 mb-2">
                                            <div class="form-check border rounded p-2 shadow-sm">
                                                <input class="form-check-input subject-checkbox" type="checkbox">
                                                <label class="form-check-label">{{ $sub }}</label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- ROLL NO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Roll Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-hash"></i></span>
                                    <input type="text" class="form-control" value="23" readonly>
                                </div>
                            </div>

                            <!-- ADDRESS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">Address</label>
                                <textarea class="form-control" rows="3">Jodhpur, Rajasthan</textarea>
                            </div>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="text-end mt-4">
                        <button class="btn btn-success px-4 py-2 shadow">
                            <i class="bi bi-check-circle me-1"></i>Update Student
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

        <!-- JS -->
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
