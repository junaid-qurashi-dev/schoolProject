@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Teachers</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Details</a>
                        </li>
                        <li class="breadcrumb-item">Teachers Info</li>
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

            <div class="main-content">
                <div class="row">
                    <div class="card shadow-sm border-0 mt-4">

                        <!-- Header -->
                        <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold">All Students Record</h5>

                            <div class="d-flex gap-2">
                                <button class="btn btn-success btn-sm">
                                    <i class="bi bi-file-earmark-excel me-1"></i> Export
                                </button>
                                <a href="{{ route('addteacher') }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-plus-lg me-1"></i> Add Teacher
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
                                        <input type="text" class="form-control border-0" placeholder="Search teacher...">
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
                                            <th>Teacher</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Status</th>

                                            <th class="text-start">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <!-- Row 1 -->
                                        <tr>
                                            <td>#1001</td>

                                            <td class="d-flex align-items-center gap-2">
                                                <img src="https://img.freepik.com/free-photo/front-view-young-beautiful-lady-white-t-shirt-black-jeans-coat-holding-green-book-writing-down-white_140725-18665.jpg?semt=ais_hybrid&w=740&q=80"
                                                    class="rounded-circle" style="width:45px;height:45px;object-fit:cover;">
                                                <span class="fw-semibold">Neha Gupta</span>
                                            </td>

                                            <td>Male</td>
                                            <td>ramesh@gmail.com</td>
                                            <td>9876543210 </td>
                                            <td>Mathematics</td>
                                            <td>Active</td>
                                            <!-- Action -->
                                            <td class="text-start position-relative overflow-visible">
                                                <div class="dropdown dropstart custom-action-dropdown">
                                                    <button class="btn btn-light btn-sm rounded-circle"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                        style="width:32px;height:32px;">

                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>

                                                    <ul class="dropdown-menu custom-dropdown-menu">
                                                        <li>
                                                            <a href="{{ route('teachersview') }}"
                                                                class="dropdown-item text-danger">
                                                                <i class="bi bi-eye me-2"></i> View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('editteacher') }}"
                                                                class="dropdown-item text-success">
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
