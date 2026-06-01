@extends('layouts.app')

<style>
    body {
        background: #f1f5f9;
    }

    /* ── Stat Cards ── */
    .stat-card {
        background: var(--bs-white);
        border: none;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .06);
        transition: transform .25s;
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .stat-card .stat-label {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .6px;
        margin-bottom: 8px;
    }

    .stat-card .stat-value {
        font-size: 26px;
        font-weight: 800;
        margin: 0;
    }

    .stat-card .stat-icon {
        width: 23px;
        height: 23px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .stat-icon i {
        font-size: 30px;
    }

    /* ── Header Bar ── */
    .fees-header {
        background: linear-gradient(135deg, #3C3489 0%, #534AB7 60%, #7F77DD 100%);
        border-radius: 20px;
        padding: 1.5rem 2rem;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .fees-header::before {
        content: '';
        position: absolute;
        right: -50px;
        top: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, .07);
        border-radius: 50%;
    }

    .fees-header h3 {
        font-weight: 700;
        margin-bottom: 4px;
        color: #fff;
    }

    .fees-header p {
        opacity: .7;
        margin: 0;
        font-size: 14px;
    }

    /* ── Search Card ── */
    .search-card {
        background: #fff;
        border-radius: 16px;
        border: none;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .05);
    }

    .search-card .form-control,
    .search-card .form-select {
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        padding: 10px 14px;
        font-size: 14px;
        box-shadow: none;
    }

    .search-card .form-control:focus,
    .search-card .form-select:focus {
        border-color: #534AB7;
        box-shadow: 0 0 0 3px rgba(83, 74, 183, .12);
    }

    .search-card .input-group-text {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 10px 0 0 10px;
    }

    .search-card .input-group .form-control {
        border-radius: 0;
        border-left: none;
    }

    .search-card .input-group .btn {
        border-radius: 0 10px 10px 0;
    }

    /* ── Table ── */
    .table-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 2px 16px rgba(0, 0, 0, .06);
    }

    .table {
        margin: 0;
    }

    .table thead th {
        background: #f8fafc;
        border: none;
        padding: 14px 18px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #64748b;
    }

    .table tbody td {
        padding: 14px 18px;
        border-color: #f1f5f9;
        vertical-align: middle;
        font-size: 14px;
    }

    .table tbody tr {
        transition: background .2s;
    }

    .table tbody tr:hover {
        background: #f8fafc;
    }

    /* ── Avatar ── */
    .student-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #CECBF6, #AFA9EC);
        color: #3C3489;
        font-weight: 700;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .student-name {
        font-weight: 700;
        color: #1e293b;
    }

    .student-id {
        color: #94a3b8;
        font-size: 11px;
    }

    /* ── Badges ── */
    .badge-cls {
        background: #E6F1FB;
        color: #185FA5;
        padding: 5px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-method {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 5px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        color: #475569;
    }

    .status-badge {
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
    }

    .status-paid {
        background: #dcfce7;
        color: #15803d;
    }

    .status-pending {
        background: #fef3c7;
        color: #b45309;
    }

    .status-partial {
        background: #dbeafe;
        color: #1d4ed8;
    }

    /* ── Action Button ── */
    .action-btn {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #64748b;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: .2s;
        cursor: pointer;
    }

    .action-btn:hover {
        background: #3C3489;
        color: #fff;
        border-color: #3C3489;
    }

    /* ── Dropdown ── */
    .dropdown-menu {
        border: none;
        border-radius: 14px;
        padding: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
    }

    .dropdown-item {
        border-radius: 8px;
        padding: 9px 14px;
        font-size: 13px;
        transition: background .2s;
    }

    .dropdown-item:hover {
        background: #f8fafc;
    }

    /* ── Buttons ── */
    .btn-add-fee {
        background: rgba(255, 255, 255, .2);
        border: 1px solid rgba(255, 255, 255, .4);
        color: #fff;
        border-radius: 10px;
        padding: 9px 18px;
        font-size: 13px;
        font-weight: 600;
        backdrop-filter: blur(8px);
        transition: .2s;
    }

    .btn-add-fee:hover {
        background: rgba(255, 255, 255, .35);
        color: #fff;
    }

    .btn-export {
        background: #dcfce7;
        border: none;
        color: #15803d;
        border-radius: 10px;
        padding: 9px 18px;
        font-size: 13px;
        font-weight: 600;
        transition: .2s;
    }

    .btn-export:hover {
        background: #bbf7d0;
    }

    .btn-search {
        background: linear-gradient(135deg, #3C3489, #534AB7);
        border: none;
        color: #fff;
        padding: 10px 22px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 0 10px 10px 0;
    }

    /* ── Pagination ── */
    .pagination {
        gap: 5px;
    }

    .page-link {
        border-radius: 9px !important;
        border: 1px solid #e2e8f0;
        color: #3C3489;
        font-size: 13px;
        font-weight: 500;
        padding: 6px 13px;
    }

    .page-item.active .page-link {
        background: #3C3489;
        border-color: #3C3489;
    }

    .page-link:hover {
        background: #EEEDFE;
        color: #3C3489;
    }
</style>

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            {{-- Page Header --}}
            <div class="page-header">
                <div class="page-header-left">
                    <h5>Fees</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">List</a></li>
                    <li class="breadcrumb-item">Collection</li>
                </ul>
            </div>
            <div class="container mt-4">

                <div class="mt-4">

                    {{-- ── Stat Cards ── --}}
                    <div class="row g-3 mb-4">

                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Records</div>
                                        <p class="stat-value text-primary">{{ $totalRecord }}</p>
                                    </div>
                                    <div class="stat-icon   bg-opacity-10 text-primary">
                                        <i class="bi bi-database "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Student</div>
                                        <p class="stat-value text-primary">{{ $totalStudents }}</p>
                                    </div>
                                    <div class="stat-icon   bg-opacity-10 text-primary">
                                        <i class="bi bi-database "></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Paid Fees</div>
                                        <p class="stat-value text-success">{{ $paidFees }}</p>
                                    </div>
                                    <div class="stat-icon  bg-opacity-10 text-success">
                                        <i class="bi bi-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Pending</div>
                                        <p class="stat-value text-warning">
                                            {{ $pendingFees }}
                                        </p>
                                    </div>
                                    <div class="stat-icon  bg-opacity-10 text-warning">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Partial</div>
                                        <p class="stat-value text-warning">
                                            {{ $partialFees }}
                                        </p>
                                    </div>
                                    <div class="stat-icon  bg-opacity-10 text-warning">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Collection</div>
                                        <p class="stat-value text-info">₹{{ number_format($totalCollection) }}</p>
                                    </div>
                                    <div class="stat-icon  bg-opacity-10 text-info">
                                        <i class="bi bi-currency-rupee"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- ── Header Bar ── --}}
                    <div class="fees-header mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div>
                                <h3><i class="bi bi-cash-stack fs-5 me-2"></i>Fee Collection Management</h3>
                                <p>Manage and track all student fee records</p>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('CreateFees') }}" class="btn btn-add-fee">
                                    <i class="bi bi-plus-circle me-1"></i> Add Fee
                                </a>
                                <a href="{{ route('fees.excel') }}" class="btn btn-export text-decoration-none">
                                    <i class="bi bi-file-earmark-excel me-1"></i> Export
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- ── Search & Filter ── --}}
                    <div class="card search-card mb-4">
                        <div class="card-body p-3">
                            <form action="{{ route('fees.index') }}" method="GET">
                                <div class="row g-3 align-items-end">

                                    <div class="col-md-8">
                                        <label class="form-label fw-semibold mb-1" style="font-size:13px">Search
                                            Student</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-search text-muted"></i>
                                            </span>
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                class="form-control" placeholder="Search by student name...">
                                            <button type="submit" class="btn text-white btn-search">Search</button>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold mb-1" style="font-size:13px">Class
                                            Filter</label>
                                        <select name="class" class="form-select" onchange="this.form.submit()">
                                            <option value="">All Classes</option>
                                            @foreach (['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th'] as $cls)
                                                <option value="{{ $cls }}"
                                                    {{ request('class') == $cls ? 'selected' : '' }}>
                                                    {{ $cls }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- ── Table ── --}}
                    <div class="table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Student</th>
                                        <th>Class</th>
                                        <th>Method</th>
                                        <th>Payment Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($feeses as $fees)
                                        <tr>

                                            {{-- Student --}}
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="student-avatar">
                                                        {{ strtoupper(substr($fees->student->name ?? 'N', 0, 1)) }}
                                                    </div>
                                                    <div>
                                                        <div class="student-name">{{ $fees->student->name ?? '-' }}</div>
                                                        <div class="student-id">ID #{{ $fees->id }}</div>
                                                    </div>
                                                </div>
                                            </td>

                                            {{-- Class --}}
                                            <td>
                                                <span class="badge-cls">
                                                    Class {{ $fees->student->class ?? '-' }}
                                                </span>
                                            </td>

                                            {{-- Method --}}
                                            <td>
                                                <span class="badge-method">
                                                    {{ $fees->payment_method }}
                                                </span>
                                            </td>

                                            {{-- Date --}}
                                            <td>
                                                <i class="bi bi-calendar3 me-1" style="color:#534AB7"></i>
                                                {{ \Carbon\Carbon::parse($fees->payment_date)->format('d M Y') }}
                                            </td>

                                            {{-- Status --}}
                                            <td>
                                                <span
                                                    class="status-badge
                                            @if ($fees->status == 'Paid') status-paid
                                            @elseif($fees->status == 'Partial') status-partial
                                            @else status-pending @endif">
                                                    {{ $fees->status }}
                                                </span>
                                            </td>

                                            {{-- Actions --}}
                                            <td>
                                                <div class="dropdown">
                                                    <button class="action-btn" data-bs-toggle="dropdown"
                                                        aria-label="More options">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="{{ route('viewfess', $fees->id) }}"
                                                                class="dropdown-item">
                                                                <i class="bi bi-eye text-primary me-2"></i> View Details
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="dropdown-item">
                                                                <i class="bi bi-pencil text-warning me-2"></i> Edit Record
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider my-1">
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item text-danger">
                                                                <i class="bi bi-trash me-2"></i> Delete
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-5 text-muted">
                                                <i class="bi bi-inbox"
                                                    style="font-size:2rem;display:block;margin-bottom:8px"></i>
                                                No fee records found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination --}}
                        @if ($feeses->hasPages())
                            <div class="d-flex justify-content-end px-3 py-3" style="border-top:1px solid #f1f5f9">
                                {{ $feeses->appends(request()->query())->links() }}
                            </div>
                        @endif
                    </div>

                </div>
            </div>

            {{-- Footer --}}
            <footer class="footer">
                <p class="fs-11 text-muted fw-medium text-uppercase mb-0">
                    <span>Copyright &copy;</span>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </p>
                <div class="d-flex align-items-center gap-4">
                    <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                    <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                    <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
                </div>
        </div>
        </footer>
    </main>
@endsection
