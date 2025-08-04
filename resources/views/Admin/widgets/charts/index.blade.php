@extends('Admin.widgets.charts.layout.main')

@section('content-widgets-charts')

    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Widgets</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Charts</li>
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
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Recommendation">Recommendation</label>
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
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add widget</span>
                            </a>
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
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between p-4 mb-4">
                                    <div>
                                        <div class="fw-bold mb-2 text-dark">Bounce Rate (Avg)</div>
                                        <div class="fs-11 text-muted">VS 20.49% (Prev)</div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-24 fw-bold mb-2 text-dark"><span class="counter">78.65</span>%</div>
                                        <div class="fs-11 text-success">(+ 22.85%)</div>
                                    </div>
                                </div>
                                <div id="bounce-rate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between p-4 mb-4">
                                    <div>
                                        <div class="fw-bold mb-2 text-dark">Page Views (Avg)</div>
                                        <div class="fs-11 text-muted">VS 36.47% (Prev)</div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-24 fw-bold mb-2 text-dark"><span class="counter">86.37</span>%</div>
                                        <div class="fs-11 text-danger">(- 34.25%)</div>
                                    </div>
                                </div>
                                <div id="page-views"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between p-4 mb-4">
                                    <div>
                                        <div class="fw-bold mb-2 text-dark">Site Impressions (Avg)</div>
                                        <div class="fs-11 text-muted">VS 43.67% (Prev)</div>
                                    </div>
                                    <div class="tx-right">
                                        <div class="fs-24 fw-bold mb-2 text-dark"><span class="counter">67.53</span>%</div>
                                        <div class="fs-11 text-success">(+ 42.72%)</div>
                                    </div>
                                </div>
                                <div id="site-impressions"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between p-4 mb-4">
                                    <div>
                                        <div class="fw-bold mb-2 text-dark">Conversions Rate (Avg)</div>
                                        <div class="fs-11 text-muted">VS 22.34% (Prev)</div>
                                    </div>
                                    <div class="tx-right">
                                        <div class="fs-24 fw-bold mb-2 text-dark"><span class="counter">32.53</span>%</div>
                                        <div class="fs-11 text-success">(+ 35.47%)</div>
                                    </div>
                                </div>
                                <div id="conversions-rate"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end !-->
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded">
                                        <i class="feather-airplay"></i>
                                    </div>
                                    <div class="text-end">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-1">Income Status</p>
                                        <h3 class="tx-20 tx-semibold tx-left">$56.45K</h3>
                                    </div>
                                </div>
                            </div>
                            <div id="income-bar-chart"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded">
                                        <i class="feather-shopping-cart"></i>
                                    </div>
                                    <div class="text-end">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-1">Expenses Status</p>
                                        <h3 class="tx-20 tx-semibold tx-left">$22.75K</h3>
                                    </div>
                                </div>
                            </div>
                            <div id="expense-bar-chart"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded">
                                        <i class="feather-bluetooth"></i>
                                    </div>
                                    <div class="text-end">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-1">Total Orders</p>
                                        <h3 class="tx-20 tx-semibold tx-left">$29.73K</h3>
                                    </div>
                                </div>
                            </div>
                            <div id="order-bar-chart"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="avatar-text avatar-lg bg-soft-warning text-warning border-soft-warning rounded">
                                        <i class="feather-briefcase"></i>
                                    </div>
                                    <div class="text-end">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-1">Revenue Status</p>
                                        <h3 class="tx-20 tx-semibold tx-left">$99.67K</h3>
                                    </div>
                                </div>
                            </div>
                            <div id="revenue-bar-chart"></div>
                        </div>
                    </div>
                    <!-- [Mini Card] end !-->
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <span class="badge bg-soft-primary text-primary text-dark float-end">12%</span>
                                <div class="text-start">
                                    <h4 class="text-reset">3,569</h4>
                                    <p class="text-reset m-0">Total Sales</p>
                                </div>
                            </div>
                            <div id="total-sales-color-graph"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <span class="badge bg-soft-primary text-primary text-dark float-end">15%</span>
                                <div class="text-start">
                                    <h4 class="text-reset">1,254</h4>
                                    <p class="text-reset m-0">Total Comment</p>
                                </div>
                            </div>
                            <div id="total-comment-color-graph"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <span class="badge bg-soft-primary text-primary text-dark float-end">20%</span>
                                <div class="text-start">
                                    <h4 class="text-reset">$9.657</h4>
                                    <p class="text-reset m-0">Income Status</p>
                                </div>
                            </div>
                            <div id="total-income-color-graph"></div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <span class="badge bg-soft-primary text-primary text-dark float-end">23%</span>
                                <div class="text-start">
                                    <h4 class="text-reset">3,967</h4>
                                    <p class="text-reset m-0">Total Visitors</p>
                                </div>
                            </div>
                            <div id="total-visitors-color-graph"></div>
                        </div>
                    </div>
                    <!-- [Mini Card] end !-->
                    <!-- [Mini Card] start -->
                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <div class="fs-12 text-success fw-semibold mb-2">Earnings</div>
                                        <h4 class="text-success mb-2">(+) $55,236 USD</h4>
                                        <div class="fs-12 text-muted text-truncate-1-line">Earnings is 69% more than last month.</div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item active">2023</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2019</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="earnings-card-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <div class="fs-12 text-danger fw-semibold mb-2">Expenses</div>
                                        <h4 class="text-danger mb-2">(-) $16,845 USD</h4>
                                        <div class="fs-12 text-muted text-truncate-1-line">Expenses is 47% more than last month.</div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item active">2023</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2019</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="expense-card-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <div class="fs-12 text-primary fw-semibold mb-2">Revenue</div>
                                        <h4 class="text-primary mb-2">(+) $96,753 USD</h4>
                                        <div class="fs-12 text-muted text-truncate-1-line">Earnings is 74% more than last month.</div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item active">2023</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            <a href="javascript:void(0);" class="dropdown-item">2019</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="revenue-card-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end !-->
                    <!-- [Mini Card] start -->
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-star"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Tasks Completed</div>
                                        <div class="fs-12 text-muted">22/35 completed</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">22/35</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <div id="task-completed-area-chart"></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="text-success">28% more</span><br>
                                    <span>from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-file-text"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">New Tasks</div>
                                        <div class="fs-12 text-muted">0/20 tasks</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">5/20</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <div id="new-tasks-area-chart"></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="text-success">34% more</span><br>
                                    <span>from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-airplay"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Project Done</div>
                                        <div class="fs-12 text-muted">20/30 project</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">20/30</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <div id="project-done-area-chart"></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="text-success">42% more</span><br>
                                    <span>from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end !-->
                    <!-- [Inquiry Tracking] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Inquiry Tracking</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="leads-inquiry-tracking"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Inquiry Tracking] end -->
                    <!-- [Inquiry Channel] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Inquiry Channel</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="leads-inquiry-channel"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Inquiry Channel] end -->
                    <!-- [Time Logged] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Time Logged</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="logged-time-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Time Logged] end -->
                    <!-- [Billable Time] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Billable Time</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="billable-time-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Billable Time] end -->
                    <!-- [Payment Records] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Payment Records</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="payment-records-chart"></div>
                                <div class="d-none d-md-flex flex-wrap pt-4 border-top">
                                    <div class="flex-fill">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-2">Current</p>
                                        <h2 class="fs-20 fw-bold mb-0">$65,658 USD</h2>
                                    </div>
                                    <div class="vr mx-4 text-gray-600"></div>
                                    <div class="flex-fill">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-2">Overdue</p>
                                        <h2 class="fs-20 fw-bold mb-0">$34,54 USD</h2>
                                    </div>
                                    <div class="vr mx-4 text-gray-600"></div>
                                    <div class="flex-fill">
                                        <p class="fs-11 fw-medium text-uppercase text-muted mb-2">Additional</p>
                                        <h2 class="fs-20 fw-bold mb-0">$20,478 USD</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Payment Records] end -->
                    <!-- [Leads Overview] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="leads-overview-donut"></div>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #3454d1"></span>
                                            <span>New<span class="fs-10 text-muted ms-1">(20K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #0d519e"></span>
                                            <span>Contacted<span class="fs-10 text-muted ms-1">(15K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #1976d2"></span>
                                            <span>Qualified<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #1e88e5"></span>
                                            <span>Working<span class="fs-10 text-muted ms-1">(18K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #2196f3"></span>
                                            <span>Customer<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #42a5f5"></span>
                                            <span>Proposal<span class="fs-10 text-muted ms-1">(15K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #64b5f6"></span>
                                            <span>Leads<span class="fs-10 text-muted ms-1">(16K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #90caf9"></span>
                                            <span>Progress<span class="fs-10 text-muted ms-1">(14K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #aad6fa"></span>
                                            <span>Others<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 50 Min Ago</a>
                        </div>
                    </div>
                    <!-- [Leads Overview] end -->
                    <!-- [Visitors Overview] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Visitors Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="visitors-overview-statistics-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Visitors Overview] end -->
                    <!--! BEGIN: [Top Country] !-->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Top Country</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="click-by-country-donut" class="d-flex align-items-center justify-content-center"></div>
                                <hr class="border-dashed mt-1 mb-3">
                                <div class="hstack justify-content-between">
                                    <div class="hstack">
                                        <div class="me-3">
                                            <i class="fi fi-au"></i>
                                        </div>
                                        <a href="javascript:void(0);">
                                            <span>Australia</span>
                                            <i class="feather feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                    </div>
                                    <div class="fs-11 fw-medium text-uppercase text-muted">2,258 Clicks</div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack justify-content-between">
                                    <div class="hstack">
                                        <div class="me-3">
                                            <i class="fi fi-us"></i>
                                        </div>
                                        <a href="javascript:void(0);">
                                            <span>United State</span>
                                            <i class="feather feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                    </div>
                                    <div class="fs-11 fw-medium text-uppercase text-muted">2,025 Clicks</div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack justify-content-between">
                                    <div class="hstack">
                                        <div class="me-3">
                                            <i class="fi fi-bd"></i>
                                        </div>
                                        <a href="javascript:void(0);">
                                            <span>Bangladesh</span>
                                            <i class="feather feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                    </div>
                                    <div class="fs-11 fw-medium text-uppercase text-muted">1,836 Clicks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--! END: [Top Country] !-->
                    <!-- [Website Analytics] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Website Analytics</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="websitean-alytics-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Website Analytics] end -->
                    <!-- [Billed Area] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Billed Area</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="billed-area-chart"></div>
                            </div>
                            <div class="card-footer d-flex flex-wrap gap-4 p-4 pt-4 border-top border-gray-3">
                                <div class="flex-fill p-4 border border-dashed rounded text-center text-success">
                                    <p class="fs-11 fw-semibold text-uppercase mb-2">Billable Hours</p>
                                    <h2 class="fs-20 fw-bold mb-0 text-reset">$65,658 USD</h2>
                                </div>
                                <div class="flex-fill p-4 border border-dashed rounded text-center text-primary">
                                    <p class="fs-11 fw-semibold text-uppercase mb-2">Unbillable Hours</p>
                                    <h2 class="fs-20 fw-bold mb-0 text-reset">$30,540 USD</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Billed Area] end -->
                    <!-- [Sales Pipeline] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Sales Pipeline</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <ul class="nav mb-4 gap-4 sales-pipeline-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start active" data-bs-toggle="tab" data-bs-target="#leadsTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Leads</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$47,569</span>
                                            <span class="deals fs-12 text-muted d-block">57 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#proposalTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Proposal</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$35,258</span>
                                            <span class="deals fs-12 text-muted d-block">46 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#contractTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Contract</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$24,569</span>
                                            <span class="deals fs-12 text-muted d-block">34 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#projectTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Project</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$53,853</span>
                                            <span class="deals fs-12 text-muted d-block">42 Deals</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="leadsTab" role="tabpanel">
                                        <div id="leads-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="proposalTab" role="tabpanel">
                                        <div id="proposal-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="contractTab" role="tabpanel">
                                        <div id="contract-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="projectTab" role="tabpanel">
                                        <div id="project-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Sales Pipeline] end -->
                    <!-- [Session Device] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Session Device</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="session-device-donut"></div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="p-3 border border-dashed rounded text-center">
                                            <div class="avatar-text avatar-md bg-gray-200 mb-1 mx-auto">
                                                <i class="feather-monitor"></i>
                                            </div>
                                            <div class="fs-12 fw-medium text-muted pt-2 pb-1">Desktop Device</div>
                                            <div class="fs-18 fw-bolder text-dark">8.37K</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 border border-dashed rounded text-center">
                                            <div class="avatar-text avatar-md bg-gray-200 mb-1 mx-auto">
                                                <i class="feather-smartphone"></i>
                                            </div>
                                            <div class="fs-12 fw-medium text-muted pt-2 pb-1">Mobile Device</div>
                                            <div class="fs-18 fw-bolder text-dark">6.83K</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 border border-dashed rounded text-center">
                                            <div class="avatar-text avatar-md bg-gray-200 mb-1 mx-auto">
                                                <i class="feather-tablet"></i>
                                            </div>
                                            <div class="fs-12 fw-medium text-muted pt-2 pb-1">Table Device</div>
                                            <div class="fs-18 fw-bolder text-dark">1.24K</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 border border-dashed rounded text-center">
                                            <div class="avatar-text avatar-md bg-gray-200 mb-1 mx-auto">
                                                <i class="feather-compass"></i>
                                            </div>
                                            <div class="fs-12 fw-medium text-muted pt-2 pb-1">Others Device</div>
                                            <div class="fs-18 fw-bolder text-dark">2.47K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Session Device] end -->
                    <!-- [Project Report] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Report</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="project-statistics-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Project Report] end -->
                    <!-- [Hours Spent] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Hours Spent</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div id="weekly-time-spent-chart"></div>
                            </div>
                            <div class="card-footer hstack justify-content-around">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">66H:35M</a>
                                    <div class="fs-11 text-muted">Billable Hours</div>
                                </div>
                                <span class="vr"></span>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">06H:25M</a>
                                    <div class="fs-11 text-muted">Unbillable Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Hours Spent] end -->
                    <!-- [Visitors Area] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Visitors</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="visitors-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Visitors Area] end -->
                    <!-- [Top Countries] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Top Countries</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div id="top-countries-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Top Countries] end -->
                    <!-- [Earning & Expense] start -->
                    <div class="col-xxl-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Earning & Expense</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="row g-0">
                                    <div class="col-xl-8">
                                        <div id="earning-expense-area-chart"></div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-6">
                                                <div class="p-4">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div>
                                                            <div class="fs-11 fw-medium text-muted text-uppercase">Earnings</div>
                                                            <div class="fs-20 fw-bolder text-primary">$55,236 USD</div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                                                <div class="dropdown-dividar"></div>
                                                                <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-muted">Earnings is 69% more than last month.</div>
                                                    <div>
                                                        <div id="earnings-area-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-md-6">
                                                <div class="p-4">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div>
                                                            <div class="fs-11 fw-medium text-muted text-uppercase">Expenses</div>
                                                            <div class="fs-20 fw-bolder text-warning">$16,845 USD</div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                                                <div class="dropdown-dividar"></div>
                                                                <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-muted">Expenses is 47% more than last month.</div>
                                                    <div>
                                                        <div id="expense-area-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Earning & Expense] end -->
                    <!-- [Performance Overview] start -->
                    <div class="col-xxl-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Performance Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="performance-overview-candlestick-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Performance Overview] end -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
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
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->

@endsection