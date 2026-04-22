@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('AddNew') }}">Students</a>
                        </li>
                        <li class="breadcrumb-item">Teacher | Parents</li>
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
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">

                <div class="card p-4 shadow-sm">
                    <h4 class="mb-3">Add New Record</h4>

                    <!-- Select Type -->
                    <div class="mb-3">
                        <label class="form-label">Select Type</label>
                        <select class="form-select" id="userType">
                            <option value="">Choose...</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>

                    <!-- Common Fields -->
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <!-- Student Fields -->
                    <div id="studentFields" style="display:none;">
                        <div class="mb-3">
                            <label>Class</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Section</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <!-- Parent Fields -->
                    <div id="parentFields" style="display:none;">
                        <div class="mb-3">
                            <label>Child Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <!-- Teacher Fields -->
                    <div id="teacherFields" style="display:none;">
                        <div class="mb-3">
                            <label>Subject</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.getElementById('userType').addEventListener('change', function() {
            let type = this.value;

            document.getElementById('studentFields').style.display = 'none';
            document.getElementById('parentFields').style.display = 'none';
            document.getElementById('teacherFields').style.display = 'none';

            if (type === 'student') {
                document.getElementById('studentFields').style.display = 'block';
            } else if (type === 'parent') {
                document.getElementById('parentFields').style.display = 'block';
            } else if (type === 'teacher') {
                document.getElementById('teacherFields').style.display = 'block';
            }
        });
    </script>
@endsection
