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

                <form action="{{ route('UpdateStudent', $student->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                    <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                                </div>
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Gender</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                    <select name="gender" class="form-select">
                                        <option {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" name="dob" class="form-control" value="{{ $student->dob }}">
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
                                </div>
                            </div>

                            <!-- CLASS -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">Class</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                                    <select name="class" class="form-select">
                                        <option {{ $student->class = '10' ? 'selected' : '' }}>10-A</option>
                                        <option selected>10-B</option>
                                        <option>10-C</option>
                                    </select>
                                </div>
                            </div>


                            <select name="section" class="form-select">
                                <option value="A" {{ $student->section == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ $student->section == 'B' ? 'selected' : '' }}>B</option>
                            </select>

                            <!-- ADDRESS -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">Address</label>
                                <textarea name="address" class="form-control" rows="3">{{ $student->address }}</textarea>
                            </div>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2 shadow">
                            <i class="bi bi-check-circle me-1"></i>Update Student
                        </button>
                    </div>

                </form>

            </div>
        </div>



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
