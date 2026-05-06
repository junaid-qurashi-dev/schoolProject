@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
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
                <div class="row">
                    <div class="container mt-4">

                        <div class="card shadow-sm border-0 p-4">

                            <h4 class="mb-4 fw-bold text-primary">
                                <i class="bi bi-journal-bookmark-fill me-2"></i> Class Subjects Overview
                            </h4>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Class</th>
                                            <th>Subjects</th>
                                            <th>Class Teacher</th>
                                            <th>Total Students</th>
                                            <th>Subject Timing</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <!-- CLASS 1-5 -->
                                        <tr>
                                            <td><strong>Class 1</strong></td>
                                            <td>Hindi, English, Maths, Environment</td>
                                            <td>Mrs. Sharma</td>
                                            <td>30</td>
                                            <td>8:00 - 9:15</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 2</strong></td>
                                            <td>Hindi, English, Maths, Environment</td>
                                            <td>Mr. Verma</td>
                                            <td>28</td>
                                            <td>9:15 - 10:30</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 3</strong></td>
                                            <td>Hindi, English, Maths, Environment</td>
                                            <td>Mrs. Gupta</td>
                                            <td>32</td>
                                            <td>10:30 - 11:45</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 4</strong></td>
                                            <td>Hindi, English, Maths, Environment</td>
                                            <td>Mr. Singh</td>
                                            <td>29</td>
                                            <td>11:45 - 1:00</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 5</strong></td>
                                            <td>Hindi, English, Maths, Environment</td>
                                            <td>Mrs. Kaur</td>
                                            <td>31</td>
                                            <td>1:00 - 2:15</td>
                                        </tr>

                                        <!-- CLASS 6-10 -->
                                        <tr class="table-light">
                                            <td><strong>Class 6</strong></td>
                                            <td>Hindi, English, Maths, Science, History, Political Science</td>
                                            <td>Mr. Rajesh</td>
                                            <td>40</td>
                                            <td>8:00 - 9:15</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 7</strong></td>
                                            <td>Hindi, English, Maths, Science, History, Political Science</td>
                                            <td>Mrs. Neha</td>
                                            <td>38</td>
                                            <td>9:15 - 10:30</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 8</strong></td>
                                            <td>Hindi, English, Maths, Science, History, Political Science</td>
                                            <td>Mr. Amit</td>
                                            <td>42</td>
                                            <td>10:30 - 11:45</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 9</strong></td>
                                            <td>Hindi, English, Maths, Science, History, Political Science</td>
                                            <td>Mrs. Pooja</td>
                                            <td>45</td>
                                            <td>11:45 - 1:00</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 10</strong></td>
                                            <td>Hindi, English, Maths, Science, History, Political Science</td>
                                            <td>Mr. Arjun</td>
                                            <td>48</td>
                                            <td>1:00 - 2:15</td>
                                        </tr>

                                        <!-- CLASS 11-12 -->
                                        <tr class="table-light">
                                            <td><strong>Class 11</strong></td>
                                            <td>Hindi, English, History, Political Science</td>
                                            <td>Mrs. Kavita</td>
                                            <td>35</td>
                                            <td>8:00 - 9:30</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Class 12</strong></td>
                                            <td>Hindi, English, History, Political Science</td>
                                            <td>Mr. Deepak</td>
                                            <td>37</td>
                                            <td>9:30 - 11:00</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script data-cfasync="false" src="https://bestwpware.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
                    defer></script>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
    </main>
@endsection
