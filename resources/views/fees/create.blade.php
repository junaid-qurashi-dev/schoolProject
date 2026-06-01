@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('AddStudents') }}">New</a></li>
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
                <form action="{{ route('fees.add') }}" method="POST">

                    @csrf

                    <div class="card shadow-sm border-0 p-4" style="border-radius:15px;">

                        <!-- Heading -->
                        <h4 class="mb-4 fw-bold text-primary">
                            <i class="bi bi-cash-stack me-2"></i>
                            Add Fee Record
                        </h4>

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
                                    <select id="student_id" name="student_id" class="form-control">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">
                                                {{ $student->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>



                            <!-- Total Fee -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    Total Fee
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        ₹
                                    </span>

                                    <input type="number" id="total_fee" name="total_fee" class="form-control"
                                        placeholder="Enter Total Fee">

                                </div>

                            </div>

                            <!-- Paid Amount -->
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
                                        placeholder="Enter Remaining Amount">

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

                                        <option value="Cash">
                                            Cash
                                        </option>

                                        <option value="UPI">
                                            UPI
                                        </option>

                                        <option value="Card">
                                            Card
                                        </option>

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

                                    <input type="text" id="transactionId" name="transaction_id" id="transactionId"
                                        class="form-control" placeholder="Enter Transaction ID">
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

                            <input type="hidden" name="status" value="Pending">
                        </div>

                        <!-- Submit -->
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
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('photoPreview').src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }

            function previewParentImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('parentPreview').src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            // Student change hone par data load karo
            $('#student_id').on('change', function() {

                let studentId = $(this).val();

                $.ajax({
                    url: '/student-fee/' + studentId,
                    type: 'GET',

                    success: function(response) {

                        if (response) {

                            $('#total_fee').val(response.total_fee);
                            $('#remaining_amount').val(response.remaining_amount);
                            $('#transactionId').val(response.transaction_id);
                            // Nayi payment enter karni hai
                            $('#paid_amount').val('');

                        } else {

                            // Naya student hai
                            $('#total_fee').val('');
                            $('#paid_amount').val('');
                            $('#remaining_amount').val('');
                            $('#transactionId').val('');

                        }
                    },

                    error: function() {
                        console.log('Error loading student fee data');
                    }
                });

            });

            // Page load hote hi pehle selected student ka data load kar do
            $('#student_id').trigger('change');

        });
    </script>
@endsection
