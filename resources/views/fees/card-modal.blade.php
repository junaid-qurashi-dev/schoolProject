@extends('layouts.app')

@section('content')
    <main class="nxl-container">

        <div class="nxl-content">

            {{-- Page Header --}}
            <div class="page-header">
                <div class="page-header-left">
                    <h5>Fees Dashboard</h5>
                </div>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        Collection
                    </li>
                </ul>
            </div>

            <div class="container mt-4">

                <div class="row g-4">

                    {{-- Total Students --}}
                    <div class="col-md-3">
                        <div class="stat-card shadow-sm p-3" onclick="openDashboardModal('students')"
                            style="cursor:pointer">

                            <div class="stat-label text-muted">
                                Total Students
                            </div>

                            <h3 class="mt-2">
                                {{ $totalStudents }}
                            </h3>

                        </div>
                    </div>

                    {{-- Paid Students --}}
                    <div class="col-md-3">
                        <div class="stat-card shadow-sm p-3" onclick="openDashboardModal('paid')" style="cursor:pointer">

                            <div class="stat-label text-muted">
                                Paid Students
                            </div>

                            <h3 class="mt-2 text-success">
                                {{ $paidFees }}
                            </h3>

                        </div>
                    </div>

                    {{-- Partial Students --}}
                    <div class="col-md-3">
                        <div class="stat-card shadow-sm p-3" onclick="openDashboardModal('partial')" style="cursor:pointer">

                            <div class="stat-label text-muted">
                                Partial Students
                            </div>

                            <h3 class="mt-2 text-warning">
                                {{ $partialFees }}
                            </h3>

                        </div>
                    </div>

                    {{-- Pending Students --}}
                    <div class="col-md-3">
                        <div class="stat-card shadow-sm p-3" onclick="openDashboardModal('pending')" style="cursor:pointer">

                            <div class="stat-label text-muted">
                                Pending Students
                            </div>

                            <h3 class="mt-2 text-danger">
                                {{ $pendingFees }}
                            </h3>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        {{-- Reusable Modal --}}
        <div class="modal fade" id="dashboardModal" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-xl modal-dialog-scrollable">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalTitle">
                            Records
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover align-middle">

                                <thead class="table-light">

                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>

                                <tbody id="modalTableBody">

                                    <tr>
                                        <td colspan="4" class="text-center">
                                            No Data
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

    <script>
        function openDashboardModal(type) {

            document.getElementById('modalTableBody').innerHTML = `
            <tr>
                <td colspan="4" class="text-center">
                    Loading...
                </td>
            </tr>
        `;

            fetch(`/dashboard/card-data/${type}`)
                .then(response => response.json())
                .then(response => {

                    document.getElementById('modalTitle').innerText =
                        response.title;

                    let html = '';

                    if (response.data.length === 0) {

                        html = `
                        <tr>
                            <td colspan="4" class="text-center">
                                No Records Found
                            </td>
                        </tr>
                    `;

                    } else {

                        response.data.forEach((item, index) => {

                            if (type === 'students') {

                                html += `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${item.name}</td>
                                    <td>${item.class ?? '-'}</td>
                                    <td>-</td>
                                </tr>
                            `;

                            } else {

                                html += `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${item.student?.name ?? '-'}</td>
                                    <td>${item.student?.class ?? '-'}</td>
                                    <td>${item.status}</td>
                                </tr>
                            `;
                            }

                        });

                    }

                    document.getElementById('modalTableBody').innerHTML = html;

                    let modal = new bootstrap.Modal(
                        document.getElementById('dashboardModal')
                    );

                    modal.show();

                })
                .catch(error => {

                    console.error(error);

                    document.getElementById('modalTableBody').innerHTML = `
                    <tr>
                        <td colspan="4" class="text-center text-danger">
                            Error loading data
                        </td>
                    </tr>
                `;

                });

        }
    </script>
@endsection
