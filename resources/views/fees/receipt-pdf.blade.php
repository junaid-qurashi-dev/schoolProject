<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fee Receipt</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #eef2ff, #f8f9ff);
            min-height: 100vh;
        }

        .receipt-wrapper {
            padding: 50px 0;
        }

        .receipt-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #f1f1f1;
        }

        /* Header */
        .receipt-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            padding: 35px;
            color: #fff;
            position: relative;
        }

        .receipt-header::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .receipt-title {
            font-size: 32px;
            font-weight: 700;
        }

        .receipt-id {
            background: rgba(255, 255, 255, 0.15);
            padding: 10px 18px;
            border-radius: 14px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        /* Body */
        .receipt-body {
            padding: 40px;
        }

        .info-card {
            background: #f8faff;
            border-radius: 18px;
            padding: 25px;
            height: 100%;
            border: 1px solid #edf0f7;
        }

        .info-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 14px;
            font-size: 15px;
        }

        .info-item strong {
            color: #495057;
            min-width: 120px;
            display: inline-block;
        }

        /* Status Badge */
        .status-badge {
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .paid {
            background: rgba(25, 135, 84, 0.15);
            color: #198754;
        }

        .partial {
            background: rgba(13, 202, 240, 0.15);
            color: #0dcaf0;
        }

        .pending {
            background: rgba(255, 193, 7, 0.18);
            color: #b78103;
        }

        /* Table */
        .table-wrapper {
            margin-top: 35px;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #edf0f7;
        }

        .table {
            margin: 0;
        }

        .table thead {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
        }

        .table th {
            padding: 16px;
            font-size: 14px;
            border: none;
        }

        .table td {
            padding: 18px 16px;
            vertical-align: middle;
            border-color: #f1f1f1;
            font-size: 14px;
        }

        .amount {
            font-weight: 700;
            color: #198754;
        }

        .remaining {
            font-weight: 700;
            color: #dc3545;
        }

        /* Footer */
        .receipt-footer {
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px dashed #d9d9d9;
        }

        .thank-text {
            font-size: 20px;
            font-weight: 700;
            color: #0d6efd;
        }

        /* Buttons */
        .action-btn {
            border-radius: 14px;
            padding: 12px 22px;
            font-weight: 600;
            transition: 0.3s;
            border: none;
        }

        .btn-print {
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
            color: #fff;
            font-size: 18px;
        }

        .btn-pdf {
            background: linear-gradient(135deg, #dc3545, #ff4d6d);
            color: #fff;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        @media print {

            .no-print {
                display: none !important;
            }

            body {
                background: #fff;
            }

            .receipt-card {
                box-shadow: none;
                border: none;
            }
        }
    </style>

</head>

<body>

    <div class="container receipt-wrapper">

        <div class="receipt-card">

            <!-- Header -->
            <div class="receipt-header d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>

                    <h1 class="receipt-title mb-2">
                        <i class="bi bi-receipt-cutoff"></i>
                        School Fee Receipt
                    </h1>

                    <p class="mb-0 opacity-75">
                        Smart School ERP Management System
                    </p>

                </div>

                <div class="receipt-id">
                    Receipt #{{ $fees->id }}
                </div>

            </div>

            <!-- Body -->
            <div class="receipt-body">

                <div class="row g-4">

                    <!-- Student -->
                    <div class="col-md-12">

                        <div class="info-card">

                            <h5 class="info-title text-primary">
                                <i class="bi bi-person-circle"></i>
                                Student Details
                            </h5>

                            <div class="info-item">
                                <strong>Name :</strong>
                                {{ $fees->student->name }}
                            </div>

                            <div class="info-item">
                                <strong>Class :</strong>
                                {{ $fees->student->class }}
                            </div>

                        </div>

                    </div>

                    <!-- Payment -->


                </div>



                <!-- Payment History -->
                <div class="mt-3">

                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

                        <h6 class="fw-bold text-primary">

                            <i class="bi bi-clock-history me-2"></i>

                            Complete Payment History

                        </h6>

                        <div class="status-badge paid">

                            <i class="bi bi-cash-stack me-1"></i>

                            Total Paid :
                            ₹ {{ $totalPaid }}

                        </div>

                    </div>

                    <div class="table-wrapper">

                        <table class="table align-middle">

                            <thead>

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

                                @foreach ($allFees as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($item->payment_date)->format('d M Y') }}
                                        </td>

                                        <td>
                                            {{ $item->month }}
                                        </td>

                                        <td class="amount">
                                            ₹ {{ $item->total_fee }}
                                        </td>

                                        <td class="amount">
                                            ₹ {{ $item->paid_amount }}
                                        </td>

                                        <td class="remaining">
                                            ₹ {{ $item->remaining_amount }}
                                        </td>

                                        <td>
                                            {{ $item->payment_method }}
                                        </td>

                                        <td>

                                            @if ($item->status == 'Paid')
                                                <span class="status-badge paid">

                                                    <i class="bi bi-check-circle-fill me-1"></i>

                                                    Paid

                                                </span>
                                            @elseif($item->status == 'Partial')
                                                <span class="status-badge partial">

                                                    <i class="bi bi-hourglass-split me-1"></i>

                                                    Partial

                                                </span>
                                            @else
                                                <span class="status-badge pending">

                                                    <i class="bi bi-clock-fill me-1"></i>

                                                    Pending

                                                </span>
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
                <!-- Footer -->
                <div class="receipt-footer d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>

                        <h5 class="thank-text mb-1">
                            Thank You ❤️
                        </h5>

                        <small class="text-muted">
                            This is a computer generated receipt.
                        </small>

                    </div>

                    <div class="d-flex gap-2 no-print">

                        <!-- Print -->
                        <button onclick="window.print()" class="btn action-btn  btn-print">

                            <i class="bi bi-printer"></i>

                        </button>

                        <!-- PDF -->
                        <a href="{{ route('fees.pdf', $fees->id) }}" class="btn action-btn btn-pdf">

                            <i class="bi bi-file-earmark-pdf"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
