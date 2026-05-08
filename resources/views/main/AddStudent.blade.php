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

                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="password" class="form-control">
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
                                        <option>2nd</option>
                                        <option>3rd</option>
                                        <option>4th</option>
                                        <option>5th</option>
                                        <option>6th</option>
                                        <option>7th</option>
                                        <option>8th</option>
                                        <option>9th</option>
                                        <option>10th</option>
                                    </select>
                                </div>
                            </div>


                            {{-- <!-- Role -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Role</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select name="role" class="form-select">
                                        <option disabled selected>Select Role</option>
                                        <option>Admin</option>
                                        <option>Student</option>
                                        <option>Parent</option>
                                        <option>Teacher</option>
                                    </select>
                                </div>
                            </div> --}}



                            <!-- ADDRESS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>

                            <!-- ================= PARENT SECTION ================= -->


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
