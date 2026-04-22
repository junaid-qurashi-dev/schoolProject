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
                        <button class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Student
                        </button>
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
                                    <th>Roll</th>
                                    <th>Student</th>
                                    <th>Gender</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Parents</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-start">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- Row 1 -->
                                <tr>
                                    <td>#101</td>

                                    <td class="d-flex align-items-center gap-2">
                                        <img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAzL3Jhd3BpeGVsb2ZmaWNlMTBfcGhvdG9ncmFwaHlfb2ZfaGFwcHlfaW5kaWFuX2tpZF9wcmltYXJ5X2VsZW1lbl8xNjBlOTM4MC1mZDhlLTQ2ZGEtYmExOS04YzhmOGZjNWZhZjIucG5n.png"
                                            class="rounded-circle" style="width:45px;height:45px;object-fit:cover;">
                                        <span class="fw-semibold">Rahul Sharma</span>
                                    </td>

                                    <td>Male</td>
                                    <td>10</td>
                                    <td>A</td>
                                    <td>Ramesh Sharma</td>
                                    <td>9876543210</td>
                                    <td>rahul@email.com</td>

                                    <!-- Action -->
                                    <td class="text-start position-relative overflow-visible">
                                        <div class="dropdown dropstart custom-action-dropdown">
                                            <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" style="width:32px;height:32px;">

                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>

                                            <ul class="dropdown-menu custom-dropdown-menu">
                                                <li>
                                                    <a href="{{ route('StudentsTab') }}" class="dropdown-item text-danger">
                                                        <i class="bi bi-eye me-2"></i> View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item text-success">
                                                        <i class="bi bi-gear me-2"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item text-warning">
                                                        <i class="bi bi-trash me-2"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <td>#102</td>

                                    <td class="d-flex align-items-center gap-2">
                                        <img src="https://i.pinimg.com/736x/04/69/4d/04694d484aadd689e8abf11e9fcdad50.jpg"
                                            class="rounded-circle" style="width:45px;height:45px;object-fit:cover;">


                                        <span class="fw-semibold">Priya Verma</span>
                                    </td>

                                    <td>Female</td>
                                    <td>8</td>
                                    <td>B</td>
                                    <td>Suresh Verma</td>
                                    <td>9876541230</td>
                                    <td>priya@email.com</td>
                                    <td class="text-start position-relative overflow-visible">
                                        <div class="dropdown dropstart custom-action-dropdown">
                                            <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" style="width:32px;height:32px;">

                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>

                                            <ul class="dropdown-menu custom-dropdown-menu">
                                                <li>
                                                    <a href="{{ route('StudentsTab') }}" class="dropdown-item text-danger">
                                                        <i class="bi bi-eye me-2"></i> View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item text-success">
                                                        <i class="bi bi-gear me-2"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item text-warning">
                                                        <i class="bi bi-trash me-2"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>

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

    </main>
@endsection
