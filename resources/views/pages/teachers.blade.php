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
                                <a href="{{ route('Addteacher') }}" class="btn btn-primary btn-sm">
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th class="text-start">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>#{{ $teacher->id }}</td>

                                                <td class="d-flex align-items-center gap-2">
                                                    <img src="{{ $teacher->photo ? asset('storage/' . $teacher->photo) : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                                        class="rounded-circle"
                                                        style="width:45px;height:45px;object-fit:cover;">
                                                    <span class="fw-semibold">{{ $teacher->name }}</span>
                                                </td>

                                                <td>{{ $teacher->email ?? '-' }}</td>
                                                <td>{{ $teacher->phone ?? '-' }}</td>
                                                <td>{{ $teacher->qualification ?? '-' }}</td>
                                                <td>{{ $teacher->experience ?? '-' }}</td>

                                                <td class="text-start">
                                                    <div class="dropdown">
                                                        <button class="btn btn-light btn-sm rounded-circle"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </button>

                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="{{ route('teachersview', $teacher->id) }}"
                                                                    class="dropdown-item">
                                                                    <i class="bi bi-eye me-2"></i> View
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="bi bi-pencil me-2"></i> Edit
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="#" method="POST"
                                                                    onsubmit="return confirm('Are you sure?')">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit"
                                                                        class="dropdown-item text-danger">
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
