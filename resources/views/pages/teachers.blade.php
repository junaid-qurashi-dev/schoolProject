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
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"></span>
                            </div>
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation"
                                                checked="checked" />
                                            <label class="custom-control-label c-pointer"
                                                for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
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
                    <div class="table-responsive">
                        <div>
                            <h6>All Teachers
                            </h6>
                        </div>
                        <!-- Top Controls -->
                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <!-- Search -->
                            <div class="search-box d-flex align-items-center">
                                <i class="feather-search me-2 fs-6 text-muted"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search here...">
                                <button type="submit" class="btn btn-success btn-sm ">Search</button>
                            </div>

                            <!-- Right Side -->
                            <div class="d-flex align-items-center gap-3">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        Newest
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Newest</a></li>
                                        <li><a class="dropdown-item" href="#">Oldest</a></li>
                                    </ul>
                                </div>




                            </div>

                        </div>

                        <!-- Table -->
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Expanse</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Paid</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Paid</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>
                                <tr>
                                    <td>#00141</td>
                                    <td>Exam Fess</td>
                                    <td>$15.00</td>
                                    <td>Due</td>
                                    <td>akkhorschool@gmail.com</td>
                                    <td>22/02/2019</td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        @endsection
