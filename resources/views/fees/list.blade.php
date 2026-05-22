@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left">
                    <h5>Fess</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">List</a>
                    </li>
                    <li class="breadcrumb-item">Collection </li>
                </ul>
            </div>
            <div class="card shadow-sm border-0 mt-4">

                <!-- Header -->
                <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">All Fees Record</h5>

                    <div class="d-flex gap-2">
                        <button class="btn btn-success btn-sm">
                            <i class="bi bi-file-earmark-excel me-1"></i> Export
                        </button>
                        <a href="{{ route('AddStudents') }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Fess Record
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
                                    <th>Month</th>
                                    <th>Total Fee</th>
                                    <th>Paid Amount</th>
                                    <th>Remaining</th>
                                    <th>Method</th>
                                    <th>Transaction ID</th>
                                    <th>Payment Date</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                            <tbody>
                                @foreach ($feeses as $fees)
                                    <tr>

                                        <td>#{{ $fees->id }}</td>

                                        <td>
                                            {{ $fees->student->name ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->month ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->total_fee ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->paid_amount ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->remaining_amount ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->payment_method ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->transaction_id ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->payment_date ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $fees->status ?? '-' }}
                                        </td>

                                        <td>

                                            <a href="#" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger">
                                                Delete
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            </tbody>
                        </table>
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
