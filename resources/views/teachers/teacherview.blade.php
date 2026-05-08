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
                        <img src="{{ $teacher->photo ? asset('storage/' . $teacher->photo) : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                            class="rounded-circle" style="width:80px;height:80px;object-fit:cover;">
                        <div>
                            <h5 class="mb-0">{{ $teacher->name }}</h5>
                            <small class="text-muted">{{ $teacher->qualification ?? '-' }}</small>
                        </div>
                    </div>
                </div>
                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#student">
                            <i class="bi bi-person me-1"></i> Teacher
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
                </ul>
                <div class="tab-content">
                    <!-- STUDENT Information -->
                    <div class="tab-pane fade show active" id="student">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold">Teacher Profile</h5>
                            </div>

                            <!-- Top Section -->
                            <div class="d-flex align-items-center gap-4 mb-4">

                                <!-- Profile Image -->
                                <img src="https://img.freepik.com/free-photo/front-view-young-beautiful-lady-white-t-shirt-black-jeans-coat-holding-green-book-writing-down-white_140725-18665.jpg"
                                    class="rounded-circle shadow-sm"
                                    style="width: 110px; height: 110px; object-fit: cover;">

                                <!-- Info -->
                                <div>
                                    <h4 class="mb-1 fw-bold">{{ $teacher->name }}</h4>
                                    <span class="badge bg-primary">{{ $teacher->qualification ?? 'Teacher' }}</span>
                                    <p class="text-muted mt-2 mb-0" style="max-width: 350px;">
                                        Dedicated and experienced teacher with strong academic background.
                                    </p>
                                </div>

                            </div>

                            <!-- Details Card -->
                            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background:#f8f9fa;">

                                <h6 class="mb-4 text-primary fw-bold border-bottom pb-2">Personal Details</h6>

                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Full Name</small>
                                                <div class="fw-bold">{{ $teacher->name }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-danger">
                                                <i class="bi bi-gender-female"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Gender</small>
                                                <div class="fw-bold">{{ $teacher->gender }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-warning">
                                                <i class="bi bi-calendar-date"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Date of Birth</small>
                                                <div class="fw-bold">{{ $teacher->dob }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-success">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Email</small>
                                                <div class="fw-bold">{{ $teacher->email }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Qualification -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-primary">
                                                <i class="bi bi-mortarboard-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Qualification</small>
                                                <div class="fw-bold">{{ $teacher->qualification }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Salary -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-dark">
                                                <i class="bi bi-cash-stack"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Salary</small>
                                                <div class="fw-bold">{{ $teacher->salary }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-info">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Phone</small>
                                                <div class="fw-bold">{{ $teacher->phone }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Joing Date  --}}
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-success">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Joining Date</small>
                                                <div class="fw-bold">{{ $teacher->joining_date }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Experience  --}}
                                    <div class="col-md-4 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white p-2 rounded shadow-sm me-3 text-info">
                                                <i class="bi bi-briefcase-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Experience</small>
                                                <div class="fw-bold">{{ $teacher->experience }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-6  mb-4">
                                        <div class="d-flex  align-items-center">
                                            <div class="bg-white p-2  rounded shadow-sm me-3 text-secondary">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted text-uppercase fw-semibold">Address</small>
                                                <div class="fw-bold">{{ $teacher->address }}</div>
                                            </div>
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
                                <h5 class="mb-0 fw-bold text-warning">Assigned Classes</h5>
                            </div>

                            <!-- Summary -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Total Classes Assigned:
                                    <span class="badge bg-warning text-dark">3</span>
                                </h6>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle bg-white shadow-sm">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Time</th>
                                            <th>Days</th>
                                            <th>Students</th>
                                        </tr>
                                    </thead>

                                    {{-- <tbody>
                                        @php $total = 0; @endphp

                                        @foreach ($teacher->classes as $class)
                                            @foreach ($class->timetables as $tt)
                                                <tr>
                                                    <td>
                                                        {{ $class->class_name }} - {{ $class->section }}
                                                    </td>

                                                    <td>
                                                        {{ $tt->subject->subject_name ?? '-' }}
                                                    </td>

                                                    <td>
                                                        {{ \Carbon\Carbon::parse($tt->start_time)->format('h:i A') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($tt->end_time)->format('h:i A') }}
                                                    </td>

                                                    <td>
                                                        {{ $tt->day }}
                                                    </td>

                                                    <td>
                                                        --
                                                    </td>
                                                </tr>

                                                @php $total++; @endphp
                                            @endforeach
                                        @endforeach
                                    </tbody> --}}

                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- SUBJECTS -->
                    <div class="tab-pane fade" id="subjects">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-info">Subjects Overview</h5>
                            </div>

                            <!-- Summary -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Total Subjects:
                                    <span class="badge bg-info">2</span>
                                </h6>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle bg-white shadow-sm">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Subject</th>
                                            <th>Classes</th>
                                            <th>Total Periods/Week</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Mathematics</td>
                                            <td>Class 10-A, 9-B, 8-A</td>
                                            <td>20</td>
                                        </tr>

                                        <tr>
                                            <td>Statistics</td>
                                            <td>Class 11-A</td>
                                            <td>8</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- EXAMS -->
                    <div class="tab-pane fade" id="exams">

                        <div class="card p-4 shadow-sm border-0">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 fw-bold text-danger">Exam Duties</h5>
                            </div>

                            <!-- Summary -->
                            <div class="mb-4">
                                <h6 class="fw-bold">
                                    Total Exams Assigned:
                                    <span class="badge bg-danger">3</span>
                                </h6>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle bg-white shadow-sm">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Exam</th>
                                            <th>Class</th>
                                            <th>Date</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Mid Term</td>
                                            <td>Class 10-A</td>
                                            <td>10 Aug 2024</td>
                                            <td>Paper Checking</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>

                                        <tr>
                                            <td>Unit Test</td>
                                            <td>Class 9-B</td>
                                            <td>15 Sep 2024</td>
                                            <td>Invigilator</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>

                                        <tr>
                                            <td>Final Exam</td>
                                            <td>Class 10-A</td>
                                            <td>20 Dec 2024</td>
                                            <td>Paper Setting</td>
                                            <td><span class="badge bg-warning text-dark">Upcoming</span></td>
                                        </tr>

                                    </tbody>

                                </table>
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
