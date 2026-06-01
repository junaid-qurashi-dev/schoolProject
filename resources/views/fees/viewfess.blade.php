@extends('layouts.app')

@section('content')
    <main class="nxl-container">

        <div class="nxl-content">

            <!-- Page Header -->
            <div class="page-header mb-4">

                <div class="page-header-left">

                    <h4 class="fw-bold mb-1">
                        Fee Details
                    </h4>

                    <p class="text-muted mb-0">
                        Student fee payment information
                    </p>

                </div>

            </div>

            <div class="container-fluid">

                <!-- Profile Card -->
                <div class="card border-0 shadow-sm mb-4 overflow-hidden">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                            <!-- Left Side -->
                            <div class="d-flex align-items-center gap-4 flex-wrap">

                                <!-- Image -->
                                <div class="position-relative">

                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                        class="rounded-circle border border-4 border-light shadow"
                                        style="width:100px;height:100px;object-fit:cover;">

                                    <span
                                        class="position-absolute bottom-0 end-0 bg-success border border-3 border-white rounded-circle"
                                        style="width:18px;height:18px;">
                                    </span>

                                </div>

                                <!-- Student Info -->
                                <div>

                                    <h3 class="fw-bold mb-1">
                                        {{ $fees->student->name }}
                                    </h3>

                                    <div class="d-flex align-items-center gap-2 mb-2">

                                        <span class="badge bg-primary px-3 py-2">

                                            <i class="bi bi-mortarboard-fill me-1"></i>

                                            Class {{ $fees->student->class }}

                                        </span>

                                        @if ($fees->status == 'Paid')
                                            <span class="badge bg-success px-3 py-2">

                                                <i class="bi bi-check-circle-fill me-1"></i>

                                                Paid

                                            </span>
                                        @else
                                            <span class="badge bg-warning text-dark px-3 py-2">

                                                <i class="bi bi-clock-fill me-1"></i>

                                                Pending

                                            </span>
                                        @endif

                                    </div>

                                    <p class="text-muted mb-0">
                                        Complete fee payment details and student profile information.
                                    </p>

                                </div>

                            </div>

                            <!-- Add Fee Button -->
                            <div>

                                <a href="{{ route('Addfees', $fees->student->id) }}"
                                    class="btn btn-primary rounded-pill shadow-sm px-4 py-2">

                                    <i class="bi bi-plus-circle-fill me-1"></i>

                                    Add New Fee

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Tabs -->



                <!-- Payment History -->
                <!-- Payment History Card -->
                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white p-4">

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                            <!-- Left Side -->
                            <h5 class="fw-bold text-primary mb-0">

                                <i class="bi bi-clock-history me-2"></i>

                                Payment History

                            </h5>

                            <!-- Right Side -->
                            <div class="d-flex align-items-center gap-2">

                                <!-- Total Paid -->
                                <div class="badge bg-success fs-6 px-3 py-2">

                                    <i class="bi bi-cash-stack me-1"></i>

                                    Total Paid :
                                    ₹ {{ $totalPaid }}

                                </div>

                                <!-- Print Button -->
                                <a href="{{ route('fee.receipt', $fees->id) }}"
                                    class="btn btn-dark rounded-pill px-3 py-2 shadow-sm">

                                    <i class="bi bi-printer me-1"></i>

                                    Print

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead class="table-light">

                                    <tr>

                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Month</th>
                                        <th>Total Fee</th>
                                        <th>Paid</th>
                                        <th>Remaining</th>
                                        <th>Method</th>

                                        <th>Status</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @forelse ($allFees as $key => $item)
                                        <tr>

                                            <td>{{ $key + 1 }}</td>

                                            <td>
                                                {{ \Carbon\Carbon::parse($item->payment_date)->format('d M Y') }}
                                            </td>

                                            <td>
                                                {{ $item->month }}
                                            </td>

                                            <td class="fw-semibold">
                                                ₹ {{ $item->total_fee }}
                                            </td>

                                            <td class="fw-bold text-success">
                                                ₹ {{ $item->paid_amount }}
                                            </td>

                                            <td class="fw-bold text-danger">
                                                ₹ {{ $item->remaining_amount }}
                                            </td>

                                            <td>

                                                <span class="badge bg-light text-dark border">

                                                    <i class="bi bi-credit-card me-1"></i>

                                                    {{ $item->payment_method }}

                                                </span>

                                            </td>

                                            <td>

                                                @if ($item->status == 'Paid')
                                                    <span class="badge bg-success">

                                                        <i class="bi bi-check-circle-fill me-1"></i>

                                                        Paid

                                                    </span>
                                                @else
                                                    <span class="badge bg-warning text-dark">

                                                        <i class="bi bi-clock-fill me-1"></i>

                                                        Pending

                                                    </span>
                                                @endif

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="8" class="text-center py-5 text-muted">

                                                <i class="bi bi-database-x fs-1 d-block mb-3"></i>

                                                No Payment History Found

                                            </td>

                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="footer mt-4">

            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">

                <span>Copyright ©</span>

                <script>
                    document.write(new Date().getFullYear());
                </script>

            </p>

        </footer>

        </div>

    </main>
@endsection
