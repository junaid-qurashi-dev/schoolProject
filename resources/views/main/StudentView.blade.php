@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <!-- Header -->
            <div class="page-header">
                <div class="page-header-left">
                    <h5>Student Details</h5>
                </div>
            </div>

            <div class="container mt-4">

                <!-- Profile -->
                <div class="card shadow-sm border-0 mb-4 p-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAzL3Jhd3BpeGVsb2ZmaWNlMTBfcGhvdG9ncmFwaHlfb2ZfaGFwcHlfaW5kaWFuX2tpZF9wcmltYXJ5X2VsZW1lbl8xNjBlOTM4MC1mZDhlLTQ2ZGEtYmExOS04YzhmOGZjNWZhZjIucG5n.png"
                            class="rounded-circle" style="width:80px;height:80px;object-fit:cover;">
                        <div>
                            <h5 class="mb-0">Rahul Sharma</h5>
                            <small class="text-muted">Class 10 - Section A</small>
                        </div>
                    </div>
                </div>

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#student">
                            <i class="bi bi-person me-1"></i> Student
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#parents">
                            <i class="bi bi-people me-1"></i> Parents
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#class">
                            <i class="bi bi-mortarboard me-1"></i> Class
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#subjects">
                            <i class="bi bi-journal-bookmark me-1"></i> Subjects
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#exams">
                            <i class="bi bi-file-earmark-text me-1"></i> Exams
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#results">
                            <i class="bi bi-bar-chart-line me-1"></i> Results
                        </button>
                    </li>
                </ul>

                <div class="tab-content">

                    <!-- STUDENT Information -->
                    <div class="tab-pane fade show active" id="student">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold">Student Profile</h5>
                            </div>

                            <!-- Top Section -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <!-- Profile Image -->
                                <img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAzL3Jhd3BpeGVsb2ZmaWNlMTBfcGhvdG9ncmFwaHlfb2ZfaGFwcHlfaW5kaWFuX2tpZF9wcmltYXJ5X2VsZW1lbl8xNjBlOTM4MC1mZDhlLTQ2ZGEtYmExOS04YzhmOGZjNWZhZjIucG5n.png"
                                    class="rounded-circle shadow-sm"
                                    style="width: 110px; height: 110px; object-fit: cover;">
                                {{-- <img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAzL3Jhd3BpeGVsb2ZmaWNlMTBfcGhvdG9ncmFwaHlfb2ZfaGFwcHlfaW5kaWFuX2tpZF9wcmltYXJ5X2VsZW1lbl8xNjBlOTM4MC1mZDhlLTQ2ZGEtYmExOS04YzhmOGZjNWZhZjIucG5n.png"
                                    class="rounded-circle" style="width:80px;height:80px;object-fit:cover;"> --}}
                                <!-- Info -->
                                <div>
                                    <h4 class="mb-1 fw-bold">Rahul Sharma</h4>
                                    <span class="badge bg-primary">Class 10 - Section A</span>
                                    <p class="text-muted mt-2 mb-0" style="max-width: 350px;">
                                        Dedicated and hardworking student with strong academic performance.
                                    </p>
                                </div>

                            </div>

                            <!-- Details Card -->
                            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background:#f8f9fa;">

                                <h6 class="mb-4 text-primary fw-bold border-bottom pb-2">Personal Details</h6>

                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Full Name</small>
                                                <div class="fw-bold">Rahul Sharma</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-danger">
                                                <i class="bi bi-gender-male"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Gender</small>
                                                <div class="fw-bold">Male</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-warning">
                                                <i class="bi bi-calendar-date"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Date of Birth</small>
                                                <div class="fw-bold">10 Jan 2008</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-success">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Email</small>
                                                <div class="fw-bold">rahul@email.com</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Class  --}}
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-mortarboard-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Class</small>
                                                <div class="fw-bold">10 - A</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Roll Number  --}}

                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-dark">
                                                <i class="bi bi-hash"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Roll No</small>
                                                <div class="fw-bold">#101</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-info">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Phone</small>
                                                <div class="fw-bold">9876543210</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-secondary">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Address</small>
                                                <div class="fw-bold">Delhi, India</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Parents -->
                                    <div class="col-md-6 mb-3 border-start border-3 border-primary ps-3">
                                        <small class="text-muted">Father's Name</small>
                                        <div class="fw-bold">Ramesh Sharma</div>
                                    </div>

                                    <div class="col-md-6 mb-3 border-start border-3 border-primary ps-3">
                                        <small class="text-muted">Mother's Name</small>
                                        <div class="fw-bold">Sunita Sharma</div>
                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- PARENTS Informations -->
                    <div class="tab-pane fade" id="parents">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-success">Parents Information</h5>
                            </div>

                            <!-- Top Section -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <!-- Image -->
                                <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png"
                                    class="rounded-circle shadow-sm"
                                    style="width: 100px; height: 100px; object-fit: cover;">

                                <!-- Info -->
                                <div>
                                    <h4 class="mb-1 fw-bold">Ramesh & Sunita Sharma</h4>
                                    <span class="badge bg-success">Parents</span>
                                    <p class="text-muted mt-2 mb-0">
                                        Responsible guardians ensuring proper education and support.
                                    </p>
                                </div>

                            </div>

                            <!-- Details Card -->
                            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background:#f8f9fa;">

                                <h6 class="mb-4 text-success fw-bold border-bottom pb-2">Details</h6>

                                <div class="row">

                                    <!-- Father -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Name</small>
                                                <div class="fw-bold">Ramesh Sharma</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mother -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-danger">
                                                <i class="bi bi-person-heart"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Wife</small>
                                                <div class="fw-bold">Sunita Sharma</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Occupation -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-warning">
                                                <i class="bi bi-briefcase-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Occupation</small>
                                                <div class="fw-bold">Business</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ID -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-dark">
                                                <i class="bi bi-card-text"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">ID</small>
                                                <div class="fw-bold">P-10245</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Religion -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-secondary">
                                                <i class="bi bi-stars"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Religion</small>
                                                <div class="fw-bold">Hindu</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Admission Date -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-info">
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Admission Date</small>
                                                <div class="fw-bold">12 April 2022</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-success">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Email</small>
                                                <div class="fw-bold">parent@email.com</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Phone</small>
                                                <div class="fw-bold">9999999999</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12 mt-2">
                                        <div class="p-3 rounded" style="background:#e9ecef;">
                                            <i class="bi bi-geo-alt-fill me-2"></i>
                                            <strong>Address:</strong> Delhi, India
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- CLASS -->
                    <div class="tab-pane fade" id="class">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-warning">Class Details</h5>
                            </div>

                            <!-- Top Info -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                                    class="rounded-circle shadow-sm"
                                    style="width: 100px; height: 100px; object-fit: cover;">

                                <div>
                                    <h4 class="fw-bold mb-1">Class 10 - Section A</h4>
                                    <span class="badge bg-warning text-dark">Academic Year 2024-25</span>
                                    <p class="text-muted mt-2 mb-0">
                                        This class focuses on core academic subjects with experienced faculty.
                                    </p>
                                </div>

                            </div>

                            <!-- Details Card -->
                            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background:#f8f9fa;">

                                <h6 class="mb-4 text-warning fw-bold border-bottom pb-2">Class Information</h6>

                                <div class="row">

                                    <!-- Class Teacher -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-person-badge-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Class Teacher</small>
                                                <div class="fw-bold">Mr. Rajesh Singh</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Room No -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-dark">
                                                <i class="bi bi-door-open-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Room No</small>
                                                <div class="fw-bold">A-102</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Timing -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-success">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Class Timing</small>
                                                <div class="fw-bold">08:00 AM - 02:00 PM</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Students -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-info">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Total Students</small>
                                                <div class="fw-bold">45</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Subjects Table -->
                                <h6 class="mt-4 mb-3 fw-bold text-secondary">Subjects & Teachers</h6>

                                <div class="table-responsive">
                                    <table class="table align-middle table-hover bg-white rounded shadow-sm">

                                        <thead class="table-light">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Teacher</th>
                                                <th>Schedule</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><i class="bi bi-calculator me-2 text-primary"></i> Maths</td>
                                                <td>Mr. Singh</td>
                                                <td>Mon - Fri</td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-book me-2 text-success"></i> English</td>
                                                <td>Mrs. Gupta</td>
                                                <td>Mon - Thu</td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-globe me-2 text-info"></i> Science</td>
                                                <td>Mr. Verma</td>
                                                <td>Tue - Fri</td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-flag me-2 text-danger"></i> History</td>
                                                <td>Mrs. Sharma</td>
                                                <td>Wed - Sat</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- SUBJECTS -->
                    <div class="tab-pane fade" id="subjects">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-info">Subjects</h5>
                            </div>

                            <!-- Top Info -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    class="rounded-circle shadow-sm"
                                    style="width: 90px; height: 90px; object-fit: cover;">

                                <div>
                                    <h4 class="fw-bold mb-1">Class Subjects</h4>
                                    <span class="badge bg-info">Academic Subjects</span>
                                    <p class="text-muted mt-2 mb-0">
                                        Subjects assigned to this class along with teachers and schedule.
                                    </p>
                                </div>

                            </div>

                            <!-- Subjects Grid -->
                            <div class="row">

                                <!-- Subject 1 -->
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-light p-2 rounded me-3 text-primary">
                                                <i class="bi bi-calculator"></i>
                                            </div>
                                            <h6 class="mb-0 fw-bold">Mathematics</h6>
                                        </div>
                                        <small class="text-muted">Teacher: Mr. Singh</small><br>
                                        <small class="text-muted">Schedule: Mon - Fri</small>
                                    </div>
                                </div>

                                <!-- Subject 2 -->
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-light p-2 rounded me-3 text-success">
                                                <i class="bi bi-book"></i>
                                            </div>
                                            <h6 class="mb-0 fw-bold">English</h6>
                                        </div>
                                        <small class="text-muted">Teacher: Mrs. Gupta</small><br>
                                        <small class="text-muted">Schedule: Mon - Thu</small>
                                    </div>
                                </div>

                                <!-- Subject 3 -->
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-light p-2 rounded me-3 text-info">
                                                <i class="bi bi-globe"></i>
                                            </div>
                                            <h6 class="mb-0 fw-bold">Science</h6>
                                        </div>
                                        <small class="text-muted">Teacher: Mr. Verma</small><br>
                                        <small class="text-muted">Schedule: Tue - Fri</small>
                                    </div>
                                </div>

                                <!-- Subject 4 -->
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-light p-2 rounded me-3 text-danger">
                                                <i class="bi bi-flag"></i>
                                            </div>
                                            <h6 class="mb-0 fw-bold">History</h6>
                                        </div>
                                        <small class="text-muted">Teacher: Mrs. Sharma</small><br>
                                        <small class="text-muted">Schedule: Wed - Sat</small>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- EXAMS -->
                    <div class="tab-pane fade" id="exams">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-danger">Exams</h5>
                            </div>

                            <!-- Top Info -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png"
                                    class="rounded-circle shadow-sm"
                                    style="width: 90px; height: 90px; object-fit: cover;">

                                <div>
                                    <h4 class="fw-bold mb-1">Exam Schedule</h4>
                                    <span class="badge bg-danger">Academic Exams</span>
                                    <p class="text-muted mt-2 mb-0">
                                        List of upcoming and completed exams with dates and status.
                                    </p>
                                </div>

                            </div>

                            <!-- Exam Stats -->
                            <div class="row mb-4">

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded text-center shadow-sm">
                                        <small class="text-muted d-block">Total Exams</small>
                                        <h5 class="fw-bold mb-0">4</h5>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded text-center shadow-sm">
                                        <small class="text-muted d-block">Upcoming</small>
                                        <h5 class="fw-bold mb-0 text-warning">2</h5>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded text-center shadow-sm">
                                        <small class="text-muted d-block">Completed</small>
                                        <h5 class="fw-bold mb-0 text-success">2</h5>
                                    </div>
                                </div>

                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table align-middle table-hover bg-white shadow-sm rounded">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Exam</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>
                                                <i class="bi bi-journal-text me-2 text-primary"></i>
                                                Mid Term
                                            </td>
                                            <td>10 Aug 2024</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <i class="bi bi-journal-text me-2 text-info"></i>
                                                Unit Test
                                            </td>
                                            <td>15 Sep 2024</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <i class="bi bi-journal-text me-2 text-warning"></i>
                                                Pre-Final
                                            </td>
                                            <td>05 Nov 2024</td>
                                            <td><span class="badge bg-warning text-dark">Upcoming</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <i class="bi bi-journal-text me-2 text-danger"></i>
                                                Final Exam
                                            </td>
                                            <td>20 Dec 2024</td>
                                            <td><span class="badge bg-danger">Upcoming</span></td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>





                    <!-- RESULTS -->



                    <div class="tab-pane fade" id="results">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-success">Result Summary</h5>
                            </div>

                            <!-- Top Result -->
                            <div class="text-center mb-4">

                                <h2 class="fw-bold text-success mb-1">Pass 🎉</h2>
                                <p class="mb-2">Overall Performance</p>

                                <div class="d-inline-block px-4 py-2 bg-light rounded shadow-sm">
                                    <h4 class="mb-0 fw-bold">88%</h4>
                                </div>

                            </div>

                            <!-- Stats -->
                            <div class="row text-center mb-4">

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded shadow-sm">
                                        <small class="text-muted">Total Marks</small>
                                        <h5 class="fw-bold mb-0">440 / 500</h5>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded shadow-sm">
                                        <small class="text-muted">Grade</small>
                                        <h5 class="fw-bold mb-0 text-primary">A</h5>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="p-3 bg-light rounded shadow-sm">
                                        <small class="text-muted">Rank</small>
                                        <h5 class="fw-bold mb-0 text-warning">#5</h5>
                                    </div>
                                </div>

                            </div>

                            <!-- Subject Wise Result -->
                            <h6 class="mb-3 fw-bold text-secondary">Subject Wise Marks</h6>

                            <div class="table-responsive">
                                <table class="table align-middle table-hover bg-white shadow-sm rounded">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Subject</th>
                                            <th>Marks</th>
                                            <th>Grade</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td><i class="bi bi-calculator me-2 text-primary"></i> Maths</td>
                                            <td>90</td>
                                            <td>A+</td>
                                            <td><span class="badge bg-success">Pass</span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="bi bi-book me-2 text-success"></i> English</td>
                                            <td>85</td>
                                            <td>A</td>
                                            <td><span class="badge bg-success">Pass</span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="bi bi-globe me-2 text-info"></i> Science</td>
                                            <td>88</td>
                                            <td>A</td>
                                            <td><span class="badge bg-success">Pass</span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="bi bi-flag me-2 text-danger"></i> History</td>
                                            <td>80</td>
                                            <td>B+</td>
                                            <td><span class="badge bg-success">Pass</span></td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>

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
