@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <!-- PAGE HEADER -->
            <div class="page-header">
                <div class="page-header-left">
                    <h5>Students</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">List</a></li>
                    <li class="breadcrumb-item">Students Details</li>
                </ul>
            </div>

            <div class="container mt-4">

                <!-- STATS -->
                <div class="row g-3 mb-4">

                    <div class="col-md-12">
                        <div class="card stats-banner border-0">

                            <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">

                                <div>
                                    <p class="stats-label">Total Students</p>
                                    <h2 class="stats-number">{{ $students->count() }}</h2>
                                    <small class="stats-subtext">All registered students in system</small>
                                </div>

                                <div class="stats-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- HEADER CARD -->
                <div class="card student-header-card border-0 mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">

                        <div>
                            <h4 class="mb-1 text-white">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Student Management
                            </h4>
                            <small class="text-white opacity-75">
                                Manage all student records easily
                            </small>
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-light">
                                <i class="bi bi-file-earmark-excel me-1"></i>
                                Export
                            </button>

                            <a href="{{ route('AddStudents') }}" class="btn btn-warning fw-bold">
                                <i class="bi bi-plus-circle me-1"></i>
                                Add Student
                            </a>
                        </div>

                    </div>
                </div>

                <!-- TABLE CARD -->
                <div class="card border-0 shadow-sm">

                    <div class="card-body student-table-body">

                        <!-- SEARCH -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="search-box">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="form-control"
                                        placeholder="Search by Name, Class, Phone...">
                                </div>
                            </div>
                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive student-table-wrapper">

                            <table class="table table-hover align-middle student-table">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>DOB</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>

                                            <td class="fw-semibold text-muted">#{{ $student->id }}</td>

                                            <td>
                                                <div class="student-info">
                                                    <img src="{{ $student->photo ? asset('storage/' . $student->photo) : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                                        class="student-avatar">

                                                    <div>
                                                        <h6 class="mb-0">{{ $student->name }}</h6>
                                                        <small class="text-muted">ID #{{ $student->id }}</small>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>{{ $student->gender ?? '-' }}</td>
                                            <td>{{ $student->class ?? '-' }}</td>
                                            <td>{{ $student->dob ?? '-' }}</td>
                                            <td>{{ $student->phone ?? '-' }}</td>
                                            <td>{{ $student->email ?? '-' }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-light btn-sm action-btn"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">

                                                        <li>
                                                            <a href="{{ route('StudentView', $student->id) }}"
                                                                class="dropdown-item">
                                                                <i class="bi bi-eye text-primary me-2"></i> View
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('EditStudent', $student->id) }}"
                                                                class="dropdown-item">
                                                                <i class="bi bi-pencil-square text-warning me-2"></i> Edit
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('DeleteStudent', $student->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Delete this record?')">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button class="dropdown-item text-danger">
                                                                    <i class="bi bi-trash me-2"></i> Delete
                                                                </button>
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <!-- FOOTER -->



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

        </div>
    </main>
@endsection
