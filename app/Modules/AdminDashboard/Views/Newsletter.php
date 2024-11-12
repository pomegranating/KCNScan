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
<div style="width:2300px">
<main id="js-page-content" role="main" class="page-content">
<ol class="breadcrumb page-breadcrumb" style="margin-top: 50px;">
        <li class="breadcrumb-item"><a href="javascript:void(0);">KeratoScan</a></li>
        <li class="breadcrumb-item active">Patient Details Upload</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Patient Details
                               
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Upload Patient Details
                                        </h2>
                                        
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                           
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">First Name</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Last Name</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-email-2">Email</label>
                                                    <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-palaceholder">Phone Number</label>
                                                    <input type="number" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-date">Date of Birth</label>
                                                    <input class="form-control" id="example-date" type="date" name="date" value="2023-07-23">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <select class="custom-select form-control">
                                                        <option selected="">Choose Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="form-label">Browse KCN Scans</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="example-datetime-local-input">Date and time</label>
                                                    <input class="form-control" type="datetime-local" value="2023-07-23T11:25:00" id="example-datetime-local-input">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            
                           
                        </div>
</main>
</div>
<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
        <i class="fal fa-arrow-up"></i>
    </a>
    <a href="<?= route_to('authentication/sign_out') ?>" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
        <i class="fal fa-sign-out"></i>
    </a>
</nav>
