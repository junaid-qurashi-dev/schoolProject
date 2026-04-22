@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Students</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('StudentsAll') }}">Info</a>
                        </li>
                        <li class="breadcrumb-item">Students</li>
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
                <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white shadow-sm rounded-3">

                    <!-- Search -->
                    <div class="search-box d-flex align-items-center bg-light px-3 py-2 rounded-3 shadow-sm"
                        style="min-width: 300px;">
                        <i class="feather-search me-2 text-muted"></i>
                        <input type="text" class="form-control border-0 bg-transparent shadow-none"
                            placeholder="Search here...">
                        <button type="submit" class="btn btn-success ms-2 px-3">
                            Search
                        </button>
                    </div>

                    <!-- Right Side -->
                    <div class="d-flex align-items-center gap-3">

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle shadow-sm rounded-3 px-3"
                                data-bs-toggle="dropdown">
                                Newest
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">
                                <li><a class="dropdown-item" href="#">Newest</a></li>
                                <li><a class="dropdown-item" href="#">Oldest</a></li>
                            </ul>
                        </div>

                        <!-- Button -->
                        <button class="btn btn-primary shadow-sm rounded-3 px-4">
                            + New Student
                        </button>

                    </div>
                </div>
                {{-- All Student Record Table  --}}
                <div class="col-xxl-12">
                    <div class="table-responsive mt-5">

                        <!-- Header -->
                        <div class="shadow-sm bg-white py-3 px-3 rounded-top">
                            <h6 class="mb-0">All Students</h6>
                        </div>

                        <!-- Table -->
                        <div class="bg-white shadow-sm rounded-bottom">
                            <table class="table align-middle mb-0 table-hover">

                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Parent</th>
                                        <th>Grade</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <!-- Image + Name -->
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="https://media.istockphoto.com/id/1399611777/photo/portrait-of-a-smiling-little-brown-haired-boy-looking-at-the-camera-happy-kid-with-good.jpg?s=612x612&w=0&k=20&c=qZ63xODwrnc81wKK0dwc3tOEf2lghkQQKmotbF11q7Q="
                                                class="rounded-circle" width="40" height="40">
                                            <div>
                                                <div class="fw-semibold">Rahul Sharma</div>
                                                <small class="text-muted">rahul@email.com</small>
                                            </div>
                                        </td>

                                        <!-- ID -->
                                        <td>#1234567886</td>

                                        <!-- Parent -->
                                        <td>
                                            <div class="fw-medium">Ramesh Sharma</div>
                                            <small class="text-muted">Father</small>
                                        </td>

                                        <!-- Grade -->
                                        <td>A</td>

                                        <!-- Action -->
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-light fs-6 btn-sm" data-bs-toggle="dropdown">
                                                    ⋮
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2"
                                                            href="#">
                                                            <i class="feather-edit-2"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                            href="#">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Repeat Row -->
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="https://via.placeholder.com/40" class="rounded-circle"
                                                width="40" height="40">
                                            <div>
                                                <div class="fw-semibold">Priya Verma</div>
                                                <small class="text-muted">priya@email.com</small>
                                            </div>
                                        </td>
                                        <td>#1234567887</td>
                                        <td>
                                            <div class="fw-medium">Suresh Verma</div>
                                            <small class="text-muted">Father</small>
                                        </td>
                                        <td>8th</td>
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-light fs-6 btn-sm" data-bs-toggle="dropdown">
                                                    ⋮
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2"
                                                            href="#">
                                                            <i class="feather-edit-2"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                            href="#">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
