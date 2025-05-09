<div class="modal modal-alert fade" id="logoutConfirmationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-sign-out-alt"></i> Are you sure you want to logout?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal text description... -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= route_to('authentication/sign_out') ?>">Logout</a>
            </div>
        </div>
    </div>

</div>
<!-- logout modal alert -->
<div class="modal modal-alert fade" id="logoutConfirmationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-sign-out-alt"></i> Are you sure you want to logout?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal text description... -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= route_to('authentication/sign_out') ?>">Logout</a>
            </div>
        </div>
    </div>

</div>

>>>>>>> cee4d6227b4bd07706bf876f3dd27b0dc2198d57
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb" style="margin-top: 50px;">
        <li class="breadcrumb-item"><a href="javascript:void(0);">KeratoScan</a></li>
        <li class="breadcrumb-item active">Patient Records</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader mt-3">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-table'></i> Patient Records
            <small>
                Layout
            </small>
        </h1>
    </div>
    
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <div class="panel-toolbar">
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                            <button class="dropdown-item active" data-action="toggle" data-class="table-bordered"
                                    data-target="#dt-basic-example"> Bordered Table
                            </button>
                            <button class="dropdown-item" data-action="toggle" data-class="table-sm"
                                    data-target="#dt-basic-example"> Smaller Table
                            </button>
                            <button class="dropdown-item" data-action="toggle" data-class="table-dark"
                                    data-target="#dt-basic-example"> Table Dark
                            </button>
                            <button class="dropdown-item active" data-action="toggle" data-class="table-hover"
                                    data-target="#dt-basic-example"> Table Hover
                            </button>
                            <button class="dropdown-item active" data-action="toggle" data-class="table-stripe"
                                    data-target="#dt-basic-example"> Table Stripped
                            </button>
                            <div class="dropdown-divider m-0"></div>
                            <div class="dropdown-multilevel dropdown-multilevel-left">
                                <div class="dropdown-item">
                                    tbody color
                                </div>
                                <div class="dropdown-menu no-transition-delay">
                                    <div class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                         style="width: 15.9rem; padding: 0.5rem">
                                        <a href="javascript:void(0);" data-bg="bg-primary-100"
                                           class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-200"
                                           class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-300"
                                           class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-400"
                                           class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-500"
                                           class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-600"
                                           class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-700"
                                           class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-800"
                                           class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-900"
                                           class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-100"
                                           class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-200"
                                           class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-300"
                                           class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-400"
                                           class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-500"
                                           class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-600"
                                           class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-700"
                                           class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-800"
                                           class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-900"
                                           class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-100"
                                           class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-200"
                                           class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-300"
                                           class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-400"
                                           class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-500"
                                           class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-600"
                                           class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-700"
                                           class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-800"
                                           class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-900"
                                           class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-100"
                                           class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-200"
                                           class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-300"
                                           class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-400"
                                           class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-500"
                                           class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-600"
                                           class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-700"
                                           class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-800"
                                           class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-900"
                                           class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-100"
                                           class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-200"
                                           class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-300"
                                           class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-400"
                                           class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-500"
                                           class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-600"
                                           class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-700"
                                           class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-800"
                                           class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-900"
                                           class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                           class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                           class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                           class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                           class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                           class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                           class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                           class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                           class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                           class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg=""
                                           class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>

                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-multilevel dropdown-multilevel-left">
                                <div class="dropdown-item">
                                    thead color
                                </div>
                                <div class="dropdown-menu no-transition-delay">
                                    <div class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                         style="width: 15.9rem; padding: 0.5rem">
                                        <a href="javascript:void(0);" data-bg="bg-primary-100"
                                           class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-200"
                                           class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-300"
                                           class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-400"
                                           class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-500"
                                           class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-600"
                                           class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-700"
                                           class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-800"
                                           class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-primary-900"
                                           class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-100"
                                           class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-200"
                                           class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-300"
                                           class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-400"
                                           class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-500"
                                           class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-600"
                                           class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-700"
                                           class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-800"
                                           class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-success-900"
                                           class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-100"
                                           class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-200"
                                           class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-300"
                                           class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-400"
                                           class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-500"
                                           class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-600"
                                           class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-700"
                                           class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-800"
                                           class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-info-900"
                                           class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-100"
                                           class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-200"
                                           class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-300"
                                           class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-400"
                                           class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-500"
                                           class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-600"
                                           class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-700"
                                           class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-800"
                                           class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-danger-900"
                                           class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-100"
                                           class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-200"
                                           class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-300"
                                           class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-400"
                                           class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-500"
                                           class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-600"
                                           class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-700"
                                           class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-800"
                                           class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-warning-900"
                                           class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                           class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                           class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                           class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                           class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                           class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                           class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                           class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                           class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                           class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                        <a href="javascript:void(0);" data-bg=""
                                           class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                           style="margin:1px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open"/>
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
        <i class="fal fa-arrow-up"></i>
    </a>
    <a href="<?= route_to('authentication/sign_out') ?>" class="menu-item btn" data-toggle="tooltip"
       data-placement="left" title="Logout">
        <i class="fal fa-sign-out"></i>
    </a>

    <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left"
       title="Voice command">
        <i class="fal fa-microphone"></i>
    </a>
</nav>