<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Fee Receipt PDF</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            color: #2d3748;
            margin: 0;
            padding: 5px;
            background: #f4f7fb;
        }

        .receipt-box {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }

        /* Header */
        .header {
            background: #2563eb;
            color: #fff;
            padding: 5px;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
        }

        .header p {
            margin: 6px 0 0;
            font-size: 12px;
            opacity: 0.9;
        }

        .receipt-id {
            margin-top: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 3px 5px;
            border-radius: 30px;
            font-size: 8px;
        }

        /* Body */
        .content {
            padding: 20px;
        }

        .row {
            width: 100%;
            margin-bottom: 25px;
        }

        .col {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }

        .card {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px;
            background: #f9fbff;
            min-height: 120px;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 14px;
            color: #2563eb;
            border-bottom: 1px solid #dbeafe;
            padding-bottom: 8px;
        }

        .info {
            margin-bottom: 10px;
            line-height: 1.7;
        }

        .label {
            font-weight: bold;
            color: #374151;
        }

        /* Status */
        .status {
            padding: 6px 14px;
            border-radius: 20px;
            color: #fff;
            font-size: 11px;
            font-weight: bold;
        }

        .paid {
            background: #16a34a;
        }

        .pending {
            background: #f59e0b;
        }

        .partial {
            background: #0ea5e9;
        }

        /* Total */
        .summary-box {
            background: #ecfdf5;
            border: 1px solid #bbf7d0;
            padding: 12px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 12px;
            font-weight: bold;
            color: #15803d;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        table th {
            background: #2563eb;
            color: white;
            padding: 12px;
            font-size: 12px;
            text-align: left;
        }

        table td {
            padding: 11px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 12px;
        }

        table tr:nth-child(even) {
            background: #f9fafb;
        }

        .paid-text {
            color: #16a34a;
            font-weight: bold;
        }

        .remaining-text {
            color: #dc2626;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            margin-top: 35px;
            padding-top: 18px;
            border-top: 1px dashed #cbd5e1;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
        }

        .thank-you {
            font-size: 14px;
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 6px;
        }
    </style>

</head>

<body>

    <div class="receipt-box">

        <!-- Header -->
        <div class="header">

            <h1>School Fee Receipt</h1>

            <p>Smart School ERP Management System</p>

            <div class="receipt-id">
                Receipt ID : #{{ $fees->id }}
            </div>

        </div>

        <!-- Content -->
        <div class="content">

            <!-- Top Info -->
            <div class="row">

                <!-- Student -->
                <div class="col">

                    <div class="card">

                        <div class="title">
                            Student Details
                        </div>

                        <div class="info">
                            <span class="label">Student Name :</span>
                            {{ $fees->student->name }}
                        </div>

                        <div class="info">
                            <span class="label">Class :</span>
                            {{ $fees->student->class }}
                        </div>

                    </div>

                </div>

                <!-- Payment -->
                <div class="col" style="float:right;">

                    <div class="card">

                        <div class="title">
                            Payment Information
                        </div>

                        <div class="info">
                            <span class="label">Payment Date :</span>
                            {{ \Carbon\Carbon::parse($fees->payment_date)->format('d M Y') }}
                        </div>

                        <div class="info">

                            <span class="label">Status :</span>

                            @if ($fees->status == 'Paid')
                                <span class="status paid">
                                    Paid
                                </span>
                            @elseif($fees->status == 'Partial')
                                <span class="status partial">
                                    Partial
                                </span>
                            @else
                                <span class="status pending">
                                    Pending
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

            <!-- Summary -->
            <div class="summary-box">

                Total FeesTill Now :
                Rs. {{ number_format($totalfee, 2) }}

            </div>
            <div class="summary-box">

                Total Paid Till Now :
                Rs. {{ number_format($totalPaid, 2) }}

            </div>

            <!-- Payment History -->
            <div class="title">
                Complete Payment History
            </div>

            <table>

                <thead>

                    <tr>

                        <th>#</th>
                        <th>Date</th>

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
                                Rs. {{ number_format($item->total_fee, 2) }}
                            </td>

                            <td class="paid-text">
                                Rs. {{ number_format($item->paid_amount, 2) }}
                            </td>

                            <td class="remaining-text">
                                Rs. {{ number_format($item->remaining_amount, 2) }}
                            </td>

                            <td>
                                {{ $item->payment_method }}
                            </td>

                            <td>

                                @if ($item->status == 'Paid')
                                    <span class="status paid">
                                        Paid
                                    </span>
                                @elseif($item->status == 'Partial')
                                    <span class="status partial">
                                        Partial
                                    </span>
                                @else
                                    <span class="status pending">
                                        Pending
                                    </span>
                                @endif

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            <!-- Footer -->
            <div class="footer">

                <div class="thank-you">
                    Thank You ❤️
                </div>

                <div>
                    This is a computer generated receipt.
                </div>

            </div>

        </div>

    </div>

</body>

</html>
