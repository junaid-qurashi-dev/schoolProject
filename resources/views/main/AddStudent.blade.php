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
                        <li class="breadcrumb-item"><a href="{{ route('AddStudents') }}">New</a></li>
                        <li class="breadcrumb-item">Students</li>
                    </ul>
                </div>
            </div>

            <div class="container mt-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-person-plus-fill me-2"></i>Add Student
                        </h4>

                        <div class="row">

                            <!-- ================= STUDENT SECTION ================= -->

                            <!-- NAME -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select name="gender" class="form-select">
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
                                    <input type="date" name="dob" class="form-control">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>

                            <!-- CLASS -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Class</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select name="class" class="form-select">
                                        <option disabled selected>Select Class</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>

                            <!-- SECTION -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Section</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select name="section" class="form-select">
                                        <option disabled selected>Select Section</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <!-- PHOTO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Student Photo</label>
                                <input type="file" name="photo" class="form-control" onchange="previewImage(event)">
                            </div>

                            <div class="col-md-6 mb-4 text-center">
                                <label class="form-label fw-semibold d-block">Preview</label>
                                <img id="photoPreview" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    style="width:110px;height:110px;border-radius:50%;">
                            </div>

                            <!-- ADMISSION DATE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Admission Date</label>
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
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>

                            <!-- ================= PARENT SECTION ================= -->

                            <hr class="my-4">

                            <h5 class="fw-bold text-primary mb-3">
                                <i class="bi bi-people-fill me-2"></i>Parent Details
                            </h5>

                            <!-- FATHER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Father Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="father_name" class="form-control">
                                </div>
                            </div>

                            <!-- MOTHER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Mother Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="mother_name" class="form-control">
                                </div>
                            </div>
                            <!-- PARENT PHOTO -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Parent Photo</label>
                                <input type="file" name="parent_photo" class="form-control" accept="image/*"
                                    onchange="previewParentImage(event)">
                            </div>

                            <!-- PARENT PHOTO PREVIEW -->
                            <div class="col-md-6 mb-4 text-center">
                                <label class="form-label fw-semibold d-block">Preview</label>
                                <img id="parentPreview" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    style="width:110px;height:110px;object-fit:cover;border-radius:50%;">
                            </div>
                            <!-- PARENT PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Parent Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="parent_phone" class="form-control">
                                </div>
                            </div>

                            <!-- PARENT EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Parent Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="parent_email" class="form-control">
                                </div>
                            </div>

                            <!-- OCCUPATION -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Occupation</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-briefcase"></i></span>
                                    <input type="text" name="occupation" class="form-control">
                                </div>
                            </div>

                            <!-- RELIGION -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Religion</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-globe"></i></span>
                                    <input type="text" name="religion" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2 shadow">
                            <i class="bi bi-check-circle me-1"></i>Save Student
                        </button>
                    </div>

                </form>

            </div>
        </div>

        <script>
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('photoPreview').src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }

            function previewParentImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('parentPreview').src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </main>
@endsection
