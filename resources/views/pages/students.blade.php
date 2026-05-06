@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left">
                    <h5>Students</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">List</a>
                    </li>
                    <li class="breadcrumb-item">Students Details</li>
                </ul>
            </div>
            <div class="card shadow-sm border-0 mt-4">

                <!-- Header -->
                <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">All Students Record</h5>

                    <div class="d-flex gap-2">
                        <button class="btn btn-success btn-sm">
                            <i class="bi bi-file-earmark-excel me-1"></i> Export
                        </button>
                        <a href="{{ route('AddStudents') }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Student
                        </a>
                    </div>
                </div>

                <div class="card-body">

                    <!-- Search -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="input-group shadow-sm">
                                <span class="input-group-text bg-white border-0">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control border-0" placeholder="Search student...">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-middle table-hover">

                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Student</th>
                                    <th>Gender</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-start">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>#{{ $student->id }}</td>

                                        <td class="d-flex align-items-center gap-2">
                                            <img src="{{ $student->photo ? asset('storage/' . $student->photo) : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                                class="rounded-circle" style="width:45px;height:45px;object-fit:cover;">
                                            <span class="fw-semibold">{{ $student->name }}</span>
                                        </td>

                                        <td>{{ $student->gender ?? '-' }}</td>
                                        <td>{{ $student->class ?? '-' }}</td>
                                        <td>{{ $student->section ?? '-' }}</td>
                                        <td>{{ $student->phone ?? '-' }}</td>
                                        <td>{{ $student->email ?? '-' }}</td>

                                        <td class="text-start">
                                            <div class="dropdown">
                                                <button class="btn btn-light btn-sm rounded-circle"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ route('StudentView', $student->id) }}"
                                                            class="dropdown-item">
                                                            <i class="bi bi-eye me-2"></i> View
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('EditStudent', $student->id) }}"
                                                            class="dropdown-item">
                                                            <i class="bi bi-pencil me-2"></i> Edit
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{ route('DeleteStudent', $student->id) }}"
                                                            method="POST" onsubmit="return confirm('Are you sure?')">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="dropdown-item text-danger">
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


            <div class="col-xxl-12">
                <div class="card p-4 text-center">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Attendance</h5>
                        <span class="text-muted">•••</span>
                    </div>

                    <div id="attendanceChart"></div>

                    <div class="row mt-4">
                        <div class="col-6 text-start">
                            <span style="width: 40px; height: 6px; background:#3b5bdb; display:inline-block;"></span>
                            <small class="text-muted d-block mt-2">Absent</small>
                            <h6 class="fw-bold">28.2%</h6>
                        </div>

                        <div class="col-6 text-end">
                            <span style="width: 40px; height: 6px; background:#f59f00; display:inline-block;"></span>
                            <small class="text-muted d-block mt-2">Present</small>
                            <h6 class="fw-bold">65.8%</h6>
                        </div>
                    </div>

                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

            <script>
                document.addEventListener("DOMContentLoaded", function() {

                    var options = {
                        series: [28.2, 65.8],
                        chart: {
                            type: 'donut',
                            height: 280
                        },
                        labels: ['Female Students 1834', 'Male Students 3300'],
                        colors: ['#3b5bdb', '#f59f00'],
                        legend: {
                            show: false
                        },
                        dataLabels: {
                            enabled: false
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '80%'
                                }
                            }
                        }
                    };

                    var chart = new ApexCharts(document.querySelector("#attendanceChart"), options);
                    chart.render();

                });
            </script>
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
