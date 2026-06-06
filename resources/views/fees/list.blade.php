@extends('layouts.app')
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

                    {{-- Stat Cards --}}
                    <div class="row g-3 mb-4">

                        <div class="col-md-4" onclick="window.location='{{ route('fees.index') }}'" style="cursor:pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Records</div>
                                        <p class="stat-value text-primary">{{ $totalRecord }}</p>
                                    </div>
                                    <div class="stat-icon text-primary"><i class="bi bi-database"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="cursor:pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Student</div>
                                        <p class="stat-value text-primary">{{ $totalStudents }}</p>
                                    </div>
                                    <div class="stat-icon text-primary"><i class="bi bi-people"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="cursor:pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Paid Fees</div>
                                        <p class="stat-value text-success">{{ $paidFees }}</p>
                                    </div>
                                    <div class="stat-icon text-success"><i class="bi bi-check-circle"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="cursor:pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Pending</div>
                                        <p class="stat-value text-warning">{{ $pendingFees }}</p>
                                    </div>
                                    <div class="stat-icon text-warning"><i class="bi bi-clock"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="cursor:pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Partial</div>
                                        <p class="stat-value text-warning">{{ $partialFees }}</p>
                                    </div>
                                    <div class="stat-icon text-warning"><i class="bi bi-pie-chart"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="cursor: pointer">
                            <div class="stat-card">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="stat-label text-muted">Total Collection</div>
                                        <p class="stat-value text-info">₹{{ number_format($totalCollection) }}</p>
                                    </div>
                                    <div class="stat-icon text-info"><i class="bi bi-currency-rupee"></i></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Header Bar --}}
                    <div class="fees-header mb-4">
                        <div class="fees-overlay"></div>

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div class="header-content">
                                <div class="header-icon">
                                    <i class="bi bi-cash-stack"></i>
                                </div>

                                <div>
                                    <h3>Fee Collection Management</h3>
                                    <p>Manage and track all student fee records</p>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <a href="{{ route('CreateFees') }}" class="btn btn-header-primary">
                                    <i class="bi bi-plus-circle"></i>
                                    Add Fee
                                </a>

                                <a href="{{ route('fees.excel') }}" class="btn btn-header-secondary">
                                    <i class="bi bi-file-earmark-excel"></i>
                                    Export
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Search & Filter --}}
                    <div class="card search-card mb-4">
                        <div class="card-body p-3">
                            <form action="{{ route('fees.index') }}" method="GET">
                                <div class="row g-3 align-items-end">

                                    <div class="col-md-8">
                                        <label class="form-label fw-semibold mb-1" style="font-size:13px">Search
                                            Student</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-search text-muted"></i></span>
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

                    {{-- Table --}}
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
                                            <td onclick="window.location='{{ route('viewfess', $fees->id) }}'"
                                                style="cursor:pointer">
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
                                            <td><span class="badge-cls">Class {{ $fees->student->class ?? '-' }}</span>
                                            </td>
                                            <td><span class="badge-method">{{ $fees->payment_method }}</span></td>
                                            <td>
                                                <i class="bi bi-calendar3 me-1" style="color:#534AB7"></i>
                                                {{ \Carbon\Carbon::parse($fees->payment_date)->format('d M, Y') }}
                                            </td>
                                            <td>
                                                <span
                                                    class="status-badge
                                                @if ($fees->status == 'Paid') status-paid
                                                @elseif($fees->status == 'Partial') status-partial
                                                @else status-pending @endif">
                                                    {{ $fees->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm border"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-3">
                                                        <li>
                                                            <a href="{{ route('viewfess', $fees->id) }}"
                                                                class="dropdown-item py-2">
                                                                <i class="bi bi-eye text-primary me-2"></i>View Details
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('fees.edit', $fees->id) }}"
                                                                class="dropdown-item py-2">
                                                                <i class="bi bi-pencil-square text-warning me-2"></i>Edit
                                                                Record
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('fees.destroy', $fees->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Delete this record?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="dropdown-item text-danger py-2">
                                                                    <i class="bi bi-trash me-2"></i>Delete Record
                                                                </button>
                                                            </form>
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

                        @if ($feeses->hasPages())
                            <div class="d-flex justify-content-end px-3 py-3" style="border-top:1px solid #f1f5f9">
                                {{ $feeses->appends(request()->query())->links('pagination::bootstrap-5') }}
                            </div>
                        @endif
                    </div>

                </div>
            </div>

            {{-- Footer --}}
            <footer class="footer">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-11 text-muted fw-medium text-uppercase mb-0">
                        Copyright &copy;
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

        </div>
    </main>

    {{-- ══════════════════ MODAL ══════════════════ --}}
    {{-- <div class="modal fade" id="dashboardModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

               
                <div class="m-head">
                    <div>
                        <h5 id="modalTitle">Records</h5>
                        <small>Live data overview</small>
                    </div>
                    <div class="m-close" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>

               
                <div class="m-stats">
                    <div class="m-chip">
                        <div class="c-lbl"><i class="bi bi-database me-1"></i>Total Records</div>
                        <div class="c-val" id="mTotal">—</div>
                    </div>
                    <div class="m-chip">
                        <div class="c-lbl"><i class="bi bi-layers me-1"></i>Current Page</div>
                        <div class="c-val purple" id="mCurPage">—</div>
                    </div>
                    <div class="m-chip">
                        <div class="c-lbl"><i class="bi bi-file-text me-1"></i>Last Page</div>
                        <div class="c-val" id="mLastPage">—</div>
                    </div>
                    <div class="m-chip">
                        <div class="c-lbl"><i class="bi bi-list-ol me-1"></i>Showing</div>
                        <div class="c-val" id="mShowing" style="font-size:13px;padding-top:4px">—</div>
                    </div>
                </div>

              
                <div class="m-filters">
                    <button class="mf-btn mf-on" onclick="mFilter(this,'all')">All</button>
                    <button class="mf-btn" onclick="mFilter(this,'Paid')">
                        <i class="bi bi-check-circle me-1 text-success"></i>Paid
                    </button>
                    <button class="mf-btn" onclick="mFilter(this,'Pending')">
                        <i class="bi bi-clock me-1 text-warning"></i>Pending
                    </button>
                    <button class="mf-btn" onclick="mFilter(this,'Partial')">
                        <i class="bi bi-pie-chart me-1 text-primary"></i>Partial
                    </button>
                </div>

                
                <div class="m-tbl-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:38px">#</th>
                                <th>Student</th>
                                <th>Class</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="mBody"></tbody>
                    </table>
                </div>

                
                <div class="m-foot">
                    <small id="mFootInfo">—</small>
                    <div class="d-flex align-items-center gap-2">
                        <button class="pg-btn" id="mPrev" disabled>
                            <i class="bi bi-chevron-left" style="font-size:11px"></i> Prev
                        </button>
                        <div class="pg-nums" id="mPgNums"></div>
                        <button class="pg-btn pg-next" id="mNext">
                            Next <i class="bi bi-chevron-right" style="font-size:11px"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}


    {{-- Modal Script New primium  --}}
    {{-- <script>
        // Avatar color palette
        const AV = [
            ['#EEEDFE', '#3C3489'],
            ['#FAEEDA', '#854F0B'],
            ['#E6F1FB', '#185FA5'],
            ['#E1F5EE', '#0F6E56'],
            ['#FBEAF0', '#993556'],
            ['#EAF3DE', '#3B6D11'],
            ['#FAECE7', '#993C1D']
        ];

        let _type = '',
            _inst = null;

        // Get or create ONE modal instance
        function getModal() {
            const el = document.getElementById('dashboardModal');
            if (!_inst) {
                _inst = new bootstrap.Modal(el, {
                    backdrop: true,
                    keyboard: true
                });
                // Clean up properly when closed
                el.addEventListener('hidden.bs.modal', () => {
                    _inst = null;
                    document.querySelectorAll('.modal-backdrop').forEach(e => e.remove());
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = '';
                    document.body.style.paddingRight = '';
                }, {
                    once: true
                });
            }
            return _inst;
        }

        function openModal(type, page = 1) {
            _type = type;

            fetch(`/dashboard/card-data/${type}?page=${page}`)
                .then(r => r.json())
                .then(({
                    title,
                    data: d
                }) => {

                    // Update header & stats
                    document.getElementById('modalTitle').textContent = title;
                    document.getElementById('mTotal').textContent = d.total;
                    document.getElementById('mCurPage').textContent = d.current_page;
                    document.getElementById('mLastPage').textContent = d.last_page;
                    document.getElementById('mShowing').textContent = `${d.from??0}–${d.to??0} of ${d.total}`;
                    document.getElementById('mFootInfo').textContent = `Page ${d.current_page} of ${d.last_page}`;

                    // Render rows
                    document.getElementById('mBody').innerHTML = d.data.length ?
                        d.data.map((x, i) => {
                            const name = x.name || x.student?.name || '—';
                            const cls = x.class || x.student?.class || '—';
                            const st = x.status || '—';
                            const stCls = st === 'Paid' ? 'ms-paid' : st === 'Partial' ? 'ms-partial' :
                                'ms-pending';
                            const [bg, fg] = AV[i % 7];
                            return `
                            <tr>
                                <td style="color:#94a3b8;font-size:12px">${(d.from??1)+i}</td>
                                <td>
                                    <div style="display:flex;align-items:center;gap:8px">
                                        <div class="m-av" style="background:${bg};color:${fg}">
                                            ${name[0].toUpperCase()}
                                        </div>
                                        <div>
                                            <div style="font-weight:600;font-size:13px">${name}</div>
                                            <div style="font-size:11px;color:#94a3b8">ID #${x.id??'—'}</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="m-cls">Class ${cls}</span></td>
                                <td><span class="m-st ${stCls}">${st}</span></td>
                            </tr>`;
                        }).join('') :
                        `<tr><td colspan="4" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox" style="font-size:1.5rem;display:block;margin-bottom:6px"></i>
                            No records found
                       </td></tr>`;

                    // Pagination numbers
                    const pgEl = document.getElementById('mPgNums');
                    const cur = d.current_page,
                        last = d.last_page;
                    const s = Math.max(1, cur - 1),
                        e = Math.min(last, cur + 1);
                    let pg = '';
                    if (s > 1) {
                        pg += pgBtn(1, cur);
                        if (s > 2) pg += `<div class="pg-n" style="pointer-events:none;border:none">…</div>`;
                    }
                    for (let i = s; i <= e; i++) pg += pgBtn(i, cur);
                    if (e < last) {
                        if (e < last - 1) pg += `<div class="pg-n" style="pointer-events:none;border:none">…</div>`;
                        pg += pgBtn(last, cur);
                    }
                    pgEl.innerHTML = pg;
                    pgEl.querySelectorAll('.pg-n').forEach(b => {
                        if (!isNaN(b.textContent)) b.onclick = () => openModal(_type, +b.textContent);
                    });

                    // Prev / Next buttons
                    const prev = document.getElementById('mPrev');
                    const next = document.getElementById('mNext');
                    prev.disabled = cur <= 1;
                    next.disabled = cur >= last;
                    prev.onclick = () => openModal(_type, cur - 1);
                    next.onclick = () => openModal(_type, cur + 1);

                    // Reset filter UI
                    document.querySelectorAll('.mf-btn').forEach(b => b.classList.remove('mf-on'));
                    document.querySelector('.mf-btn').classList.add('mf-on');

                    // Show modal (reuse instance)
                    getModal().show();
                });
        }

        function pgBtn(n, cur) {
            return `<div class="pg-n ${n === cur ? 'pg-on' : ''}" data-p="${n}">${n}</div>`;
        }

        function mFilter(btn, val) {
            document.querySelectorAll('.mf-btn').forEach(b => b.classList.remove('mf-on'));
            btn.classList.add('mf-on');
            document.querySelectorAll('#mBody tr').forEach(tr => {
                tr.style.display = (val === 'all' || tr.textContent.includes(val)) ? '' : 'none';
            });
        }
    </script> --}}
@endsection
