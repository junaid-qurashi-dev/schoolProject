@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left">
                    <h5>Students</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://bestwpware.com/html/tf/duralux-demo/index.html">List</a>
                    </li>
                    <li class="breadcrumb-item">Students Details</li>
                </ul>
            </div>
            <div class="row mt-4">
                <div class="col-xxl-5">
                    <div class="card p-4">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">About Me</h5>
                        </div>

                        <!-- Top Section -->
                        <div class="d-flex align-items-center gap-4 mb-4">
                            <!-- Profile Image -->
                            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" class="rounded-circle"
                                style="width: 120px; height: 120px; object-fit: cover;" alt="profile">

                            <!-- Right Content -->
                            <div>
                                <h4 class="mb-2">Jessia Rose</h4>
                                <p class="text-muted mb-0" style="max-width: 300px;">
                                    Aliquam erat volutpat. Curabiene natis massa sedde lacustiquen sodale
                                    word moun taiery.
                                </p>
                            </div>

                        </div>

                        <!-- Details Section -->
                        <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background: #f8f9fa;">
                            <h5 class="mb-4 text-primary fw-bold border-bottom pb-2">Student Profile</h5>
                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white p-2 rounded shadow-sm me-3 text-primary"><i
                                                class="bi bi-person-fill"></i></div>
                                        <div>
                                            <small class="text-muted text-uppercase fw-semibold"
                                                style="font-size: 11px; letter-spacing: 1px;">Full Name</small>
                                            <div class="fw-bold text-dark">Jessia Rose</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gender -->

                                <div class="col-md-6 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white p-2 rounded shadow-sm me-3 text-danger"><i
                                                class="bi bi-gender-ambiguous"></i></div>
                                        <div>
                                            <small class="text-muted text-uppercase fw-semibold"
                                                style="font-size: 11px; letter-spacing: 1px;">Gender</small>
                                            <div class="fw-bold text-dark">Female</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Father & Mother -->
                                <div class="col-md-6 mb-4 border-start border-3 border-info ps-3">
                                    <small class="text-muted">Father's Name</small>
                                    <div class="fw-bold">Fahim Rahman</div>
                                </div>

                                <div class="col-md-6 mb-4 border-start border-3 border-info ps-3">
                                    <small class="text-muted">Mother's Name</small>
                                    <div class="fw-bold">Jannatul Kazi</div>
                                </div>

                                <!-- Academic Info -->
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="p-3 bg-white rounded text-center shadow-sm">
                                        <small class="text-muted d-block">Class</small>
                                        <span class="badge bg-primary rounded-pill">Grade 2</span>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 mb-3">
                                    <div class="p-3 bg-white rounded text-center shadow-sm">
                                        <small class="text-muted d-block">Roll No.</small>
                                        <span class="fw-bold">#10005</span>
                                    </div>
                                </div>

                                <!-- Contact & Address -->
                                <div class="col-12 mt-3">
                                    <div class="p-3 rounded" style="background: #e9ecef;">
                                        <div class="row">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <i class="bi bi-geo-alt-fill text-secondary me-1"></i>
                                                <strong>Address:</strong> House #10, Road #6, Australia
                                            </div>
                                            <div class="col-sm-6 text-sm-end">
                                                <i class="bi bi-telephone-fill text-secondary me-1"></i>
                                                <strong>Phone:</strong> +889856418
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6">
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

            <div class="col-xxl-12">
                <div class="card border-0 shadow-sm">
                    <div
                        class="card-header bg-transparent border-bottom py-1 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold text-dark">Fees & Academic Records</h5>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-light border"><i class="bi bi-download me-1"></i>
                                Export</button>
                            <button class="btn btn-sm btn-primary"><i class="bi bi-plus-lg me-1"></i> Add Record</button>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <!-- Search and Filter Bar -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <div class="input-group shadow-sm rounded">
                                    <span class="input-group-text bg-white border-0"><i
                                            class="bi bi-search text-muted"></i></span>
                                    <input type="text" class="form-control border-0 ps-0"
                                        placeholder="Search records, months, or status...">
                                    <button class="btn btn-success px-4" type="button">Search</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 shadow-sm rounded">
                                    <option selected>Sort by: Newest</option>
                                    <option>Oldest</option>
                                    <option>Status: Paid</option>
                                </select>
                            </div>
                        </div>

                        <!-- Modern Table -->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle border-light">
                                <thead class="bg-light">
                                    <tr>

                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">ID</th>
                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">Exam
                                            Name
                                        </th>
                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">Subjects
                                        </th>
                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">Grade
                                        </th>
                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">Percent
                                        </th>
                                        <th class="border-0 text-muted fw-semibold py-3" style="font-size: 13px;">Date
                                        </th>
                                        <th class="border-0 text-muted fw-semibold py-1" style="font-size: 13px;">STATUS
                                        </th>
                                        <th class="border-0 rounded-end text-muted fw-semibold py-1 text-end"
                                            style="font-size: 13px;">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Row 1 -->
                                    <tr>
                                        <td><span class="fw-bold">#0021</span></td>
                                        <td>Class Test</td>
                                        <td><span class="fw-bold text-dark">English</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">A</span>
                                        </td>
                                        <td><span class="fw-bold text-dark">99.00 > 100</span></td>
                                        <td><span class="fw-bold text-dark">22/02/2019</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">Active</span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light text-primary"><i
                                                    class="bi bi-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-bold">#0022</span></td>
                                        <td>Class Test</td>
                                        <td><span class="fw-bold text-dark">Hindi</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">A</span>
                                        </td>
                                        <td><span class="fw-bold text-dark">92.00 > 100</span></td>
                                        <td><span class="fw-bold text-dark">22/07/2019</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">Active</span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light text-primary"><i
                                                    class="bi bi-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-bold">#0023</span></td>
                                        <td>Class Test</td>
                                        <td><span class="fw-bold text-dark">Maths</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">A</span>
                                        </td>
                                        <td><span class="fw-bold text-dark">83.00 > 100</span></td>
                                        <td><span class="fw-bold text-dark">22/03/2019</span></td>
                                        <td><span
                                                class="badge bg-soft-success text-success border border-success px-3 py-2">Active</span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light text-primary"><i
                                                    class="bi bi-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-bold">#0024</span></td>
                                        <td>Class Test</td>
                                        <td><span class="fw-bold text-dark">Political</span></td>
                                        <td><span
                                                class="badge bg-soft-warning text-danger border border-success px-3 py-2">C</span>
                                        </td>
                                        <td><span class="fw-bold text-dark">33.00 > 100</span></td>
                                        <td><span class="fw-bold text-dark">22/03/2019</span></td>
                                        <td><span
                                                class="badge bg-soft-warning text-danger border border-success px-3 py-2">Inactive</span>
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light text-primary"><i
                                                    class="bi bi-pencil"></i></button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
