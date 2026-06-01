@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Fee</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('AddStudents') }}">New</a>
                        </li>
                        <li class="breadcrumb-item">Students</li>
                    </ul>
                </div>
            </div>

            <div class="container mt-4">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('fees.store') }}" method="POST">
                    @csrf

                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="fw-bold text-primary mb-0">
                                <i class="bi bi-cash-stack me-2"></i>
                                Add Fee Record
                            </h4>

                            <div class="badge bg-success fs-6 px-3 py-2">
                                Total Paid: ₹{{ $totalPaid }}
                            </div>
                        </div>


                        <div class="row">

                            <!-- Student -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Student
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>

                                    <input type="text" class="form-control" value="{{ $student->name }}" readonly>

                                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                                </div>
                            </div>


                            <!-- Last Payment -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Last Payment
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">₹</span>

                                    <input type="number" class="form-control"
                                        value="{{ $lastFee ? $lastFee->paid_amount : '' }}" readonly>
                                </div>
                            </div>

                            <!-- Previous Remaining Fee -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Previous Remaining Fee
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">₹</span>

                                    <input type="number" id="total_fee" name="total_fee" class="form-control"
                                        value="{{ $lastFee ? $lastFee->remaining_amount : '' }}"
                                        placeholder="Enter Total Fee"readonly>
                                </div>
                            </div>


                            <!-- New Payment -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Paid Amount
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-wallet2"></i>
                                    </span>

                                    <input type="number" id="paid_amount" name="paid_amount" class="form-control"
                                        placeholder="Enter Paid Amount">
                                </div>
                            </div>

                            <!-- Remaining Amount -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Remaining Amount
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </span>

                                    <input type="number" id="remaining_amount" name="remaining_amount" class="form-control"
                                        readonly>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Payment Method
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-credit-card"></i>
                                    </span>

                                    <select name="payment_method" id="paymentMethod" class="form-select">

                                        <option disabled selected>
                                            Select Payment Method
                                        </option>

                                        <option value="Cash">Cash</option>
                                        <option value="UPI">UPI</option>
                                        <option value="Card">Card</option>

                                    </select>
                                </div>
                            </div>

                            <!-- Transaction ID -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Transaction ID
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-receipt"></i>
                                    </span>

                                    <input type="text" name="transaction_id" id="transactionId" class="form-control"
                                        placeholder="Enter Transaction ID">
                                </div>
                            </div>

                            <!-- Payment Date -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label fw-semibold">
                                    Payment Date
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-calendar-check"></i>
                                    </span>

                                    <input type="date" name="payment_date" class="form-control"
                                        value="{{ date('Y-m-d') }}">
                                </div>
                            </div>

                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary px-4 py-2 shadow">

                                <i class="bi bi-save me-1"></i>
                                Save Fee Record

                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const totalFee = document.getElementById('total_fee');
                const paidAmount = document.getElementById('paid_amount');
                const remainingAmount = document.getElementById('remaining_amount');

                function calculateRemaining() {

                    let total = parseFloat(totalFee.value) || 0;
                    let paid = parseFloat(paidAmount.value) || 0;

                    let remaining = total - paid;

                    remainingAmount.value = remaining > 0 ? remaining : 0;
                }

                totalFee.addEventListener('input', calculateRemaining);
                paidAmount.addEventListener('input', calculateRemaining);

                calculateRemaining();
            });

            function calculateRemaining() {

                let total = parseFloat(totalFee.value) || 0;
                let paid = parseFloat(paidAmount.value) || 0;

                if (paid > total) {
                    alert('Paid Amount cannot be greater than Remaining Fee');
                    paidAmount.value = '';
                    remainingAmount.value = total;
                    return;
                }

                remainingAmount.value = total - paid;
            }
        </script>

    </main>
@endsection
