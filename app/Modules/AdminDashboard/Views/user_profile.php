<!-- logout modal alert -->

<style>
    
        button{
        color:white;
        background-color:#fbb117;
        text-decoration: none; 
        border-radius : 5px;
        padding: 7px 10px 7px 10px;
        border-color:#fbb117;
        }

        button:hover{
        background-color:#ffffff;
        color:#fbb117;
        border-color:#fbb117}
    </style>
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
<!-- END Page Header -->
<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb" style="margin-top: 50px;">
        <li class="breadcrumb-item"><a href="javascript:void(0);">KeratoScan</a></li>
        <li class="breadcrumb-item active">UserProfile</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader mt-3">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-plus-circle'></i> Profile
            <small>
                Profile layout
            </small>
        </h1>
        <button id="editButton"  data-toggle="modal" data-target="#editModal">
            <i class="fas fa-edit"></i> Edit
        </button>
    </div>

    <!-- Display errors if they exist -->
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo esc($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <script>
            <?php foreach ($errors as $error) : ?>
            swal({
                title: "Error!",
                text: "<?php echo esc($error); ?>",
                icon: "error",
                position: 'top-end',
            });
            <?php endforeach; ?>
        </script>
    <?php endif; ?>

    <?php if (!empty($success)) : ?>
        <div class="alert alert-success" role="alert">
            <ul>
                <?php foreach ($success as $message) : ?>
                    <li><?php echo esc($message); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <script>
            <?php foreach ($success as $message) : ?>
            swal({
                title: "Success!",
                text: "<?php echo esc($message); ?>",
                icon: "success",
                position: 'top-end',
            });
            <?php endforeach; ?>
        </script>
    <?php endif; ?>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Complete Profile Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Tab navigation -->
                    <ul class="nav nav-tabs" id="editTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab"
                               aria-controls="personal" aria-selected="true">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab"
                               aria-controls="emergency" aria-selected="false">Emergency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="insurance-tab" data-toggle="tab" href="#insurance" role="tab"
                               aria-controls="insurance" aria-selected="false">Insurance</a>
                        </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content mt-3" id="editTabContent">
                        <div class="tab-pane fade show active" id="personal" role="tabpanel"
                             aria-labelledby="personal-tab">
                            <!-- Personal tab content -->
                            <form method="post" id="personalForm">
                                <!-- First Name -->
                                <div class="form-group row">
                                    <label for="firstName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>
                                        &nbsp;First Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="firstName"
                                               name="first_name" value="<?= $user['first_name'] ?? '' ?>"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <!-- Middle Name -->
                                <div class="form-group row">
                                    <label for="middleName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>
                                        &nbsp;Middle Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="middleName"
                                               name="middle_name" value="<?= $user['middle_name'] ?? '' ?>"
                                               placeholder="Middle Name">
                                    </div>
                                </div>
                                <!-- Last Name -->
                                <div class="form-group row">
                                    <label for="lastName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>
                                        &nbsp;Last Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="lastName" name="last_name"
                                               value="<?= $user['last_name'] ?? '' ?>" placeholder="Last Name">
                                    </div>
                                </div>
                                <!--Primary Email -->
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label"><i class="fas fa-envelope"></i>
                                        &nbsp;Primary Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="primary_email_address"
                                               value="<?= $user['primary_email_address'] ?? '' ?>"
                                               placeholder="Primary Email">
                                    </div>
                                </div>
                                <!--Secondary Email -->
                                <div class="form-group row">
                                    <label for="secondaryEmail" class="col-sm-3 col-form-label"><i
                                                class="fas fa-envelope"></i> &nbsp;Secondary Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="secondaryEmail"
                                               name="secondary_email_address"
                                               value="<?= $user['secondary_email_address'] ?? '' ?>"
                                               placeholder="Secondary Email">
                                    </div>
                                </div>
                                <!-- Date of Birth -->
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label"><i class="fas fa-calendar"></i>
                                        &nbsp;Date of Birth:</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="dob" id="dob"
                                               value="<?= $user['dob'] ?? '' ?>" max="<?= date('Y-m-d') ?>">
                                    </div>
                                </div>
                                <!-- National ID/Passport -->
                                <div class="form-group row">
                                    <label for="nationalId" class="col-sm-3 col-form-label"><i
                                                class="fas fa-id-card"></i>&nbsp; National ID/Passport:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nationalId"
                                               name="national_id_passport"
                                               value="<?= $user['national_id_passport'] ?? '' ?>"
                                               placeholder="National ID/Passport">
                                    </div>
                                </div>

                                <!-- Primary Phone Number -->
                                <div class="form-group row">
                                    <label for="primaryPhoneNumber" class="col-sm-3 col-form-label"><i
                                                class="fas fa-phone"></i>&nbsp; Primary Phone Number:</label>
                                    <div class="col-sm-9">
                                        <input type="tel" required class="form-control" id="primaryPhoneNumber"
                                               name="primary_phone_number"
                                               value="<?= $user['primary_phone_number'] ?? '' ?>"
                                               placeholder="Primary Phone Number">
                                    </div>
                                </div>
                                <!-- Secondary Phone Number -->
                                <div class="form-group row">
                                    <label for="secondaryPhoneNumber" class="col-sm-3 col-form-label"><i
                                                class="fas fa-phone"></i>&nbsp; Secondary Phone:</label>
                                    <div class="col-sm-9">
                                        <input type="tel" required class="form-control" id="secondaryPhoneNumber"
                                               name="secondary_phone_number"
                                               value="<?= $user['secondary_phone_number'] ?? '' ?>"
                                               placeholder="Secondary Phone Number">
                                    </div>
                                </div>
                                <!-- Country of Residence -->
                                <div class="form-group row">
                                    <label for="countryOfResidence" class="col-sm-3 col-form-label">
                                        <i class="fas fa-globe-americas"></i> &nbsp; Country of Residence:
                                    </label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" id="countryOfResidence"
                                                name="country_of_residence_id">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- County of Residence -->
                                <div class="form-group row">
                                    <label for="countyOfResidence" class="col-sm-3 col-form-label"><i
                                                class="fas fa-globe-americas"></i> &nbsp; County of Residence:</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" id="countyOfResidence"
                                                name="county_of_residence_id">
                                            <option value="">Select County</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Sub-County of Residence -->
                                <div class="form-group row">
                                    <label for="subCountyOfResidence" class="col-sm-3 col-form-label"><i
                                                class="fas fa-map-marker-alt"></i>&nbsp; Sub-County of
                                        Residence:</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control" id="subCountyOfResidence"
                                                name="sub_county_of_residence_id">
                                            <option value="">Select Sub County</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
                            <form method="post" id="emergencyForm">
                                <!-- First Name -->
                                <div class="form-group row">
                                    <label for="firstName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>
                                        &nbsp;First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="firstName"
                                               name="emergency_contact_first_name"
                                               value="<?= $emergency_contact_details['emergency_contact_first_name'] ?? '' ?>"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <!-- Middle Name -->
                                <div class="form-group row">
                                    <label for="middleName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>&nbsp;Middle
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="middleName"
                                               name="emergency_contact_middle_name"
                                               value="<?= $emergency_contact_details['emergency_contact_middle_name'] ?? '' ?>"
                                               placeholder="Middle Name">
                                    </div>
                                </div>
                                <!-- Last Name -->
                                <div class="form-group row">
                                    <label for="lastName" class="col-sm-3 col-form-label"><i class="fas fa-user"></i>&nbsp;Last
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" required class="form-control" id="lastName"
                                               name="emergency_contact_last_name"
                                               value="<?= $emergency_contact_details['emergency_contact_last_name'] ?? '' ?>"
                                               placeholder="Last Name">
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label"><i class="fas fa-envelope"></i>&nbsp;Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" required class="form-control" id="email"
                                               name="emergency_contact_email"
                                               value="<?= $emergency_contact_details['emergency_contact_email'] ?? '' ?>"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <!-- Phone Number -->
                                <div class="form-group row">
                                    <label for="phoneNumber" class="col-sm-3 col-form-label"><i
                                                class="fas fa-phone"></i>&nbsp;Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="tel" required class="form-control" id="phoneNumber"
                                               name="emergency_contact_phone_number"
                                               value="<?= $emergency_contact_details['emergency_contact_phone_number'] ?? '' ?>"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                                <!-- Relationship -->
                                <div class="form-group row">
                                    <label for="relationship" class="col-sm-3 col-form-label"><i
                                                class="fas fa-user-friends"></i>&nbsp;Relationship </label>
                                    <div class="col-sm-9">
                                        <input required type="text" class="form-control" id="relationship"
                                               name="relationship"
                                               value="<?= $emergency_contact_details['relationship'] ?? '' ?>"
                                               placeholder="Relationship">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- Insurance tab content -->
                        <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                            <form method="post" id="insuranceForm">
                                <!-- Insurance Name -->
                                <div class="form-group row">
                                    <label for="insuranceName" class="col-sm-3 col-form-label"><i
                                                class="fas fa-shield-alt"></i> &nbsp;Insurance Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="insuranceName" name="insurance_name"
                                               value="<?= isset($insurance_details['insurance_name']) ? $insurance_details['insurance_name'] : '' ?>"
                                               placeholder="Insurance Name">
                                    </div>
                                </div>
                                <!-- Insurance Details -->
                                <div class="form-group row">
                                    <label for="insuranceDetails" class="col-sm-3 col-form-label"><i
                                                class="fas fa-info-circle"></i>&nbsp;Insurance Details</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="insurance_details"
                                                  id="insuranceDetails"><?= isset($insurance_details['insurance_details']) ? $insurance_details['insurance_details'] : '' ?></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
                    <button type="button"id="nextBtn">Next</button>
                    <button type="button"id="submitAllFormsBtn">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xl-3 order-lg-1 order-xl-1">
            <!-- profile summary -->
            <div class="card mb-g rounded-top" style="height: 390px;">
                <div class="row no-gutters row-grid">
                    <div class="col-12">
                        <div class="d-flex flex-column align-items-center justify-content-center p-4">
                            <div class="position-relative">
                                <?php if (isset($user)) : ?>
                                    <?php if (!empty($user['profile_photo'])) : ?>
                                        <div style="position: relative; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                            <img src="<?= 'data:image/jpeg;base64,' . base64_encode($user['profile_photo']) ?>"
                                                 class="rounded-circle shadow-1 img-thumbnail" alt="Profile Photo"
                                                 width="200" height="200">
                                            <!-- Edit and Delete Icons -->
                                            <br><br><br>
                                            <div class="position-absolute"
                                                 style="position: absolute; bottom: 0;align-items:left; display:flex; justify-content:space-between; text-align:center; ">
                                                <!-- Delete Profile Picture Form -->
                                                <form id="deleteProfilePicForm" method="post"
                                                      action="<?= base_url('admindashboard/user_profile') ?>">
                                                    <input type="hidden" name="action" value="delete_profile_pic">
                                                    <button type="submit" class="btn btn-danger" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                </form>
                                                &nbsp;&nbsp;
                                                <!-- Edit Profile Picture Button (Triggers Modal) -->
                                                <button type="button" class="btn btn-info " title="Edit"
                                                        data-toggle="modal" data-target="#editConfirmationModal"><i
                                                            class="fas fa-edit"></i></button>
                                                <!-- <button type="button" class="btn btn-info" title="Edit" data-toggle="modal" data-target="#editConfirmationModal" style="margin-top: -10px;"><i class="fas fa-edit"></i> Edit</button> -->
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <!-- If user does not have a profile photo, display default placeholder image -->
                                        <div style="position: relative; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                            <img src="<?= base_url('assets/img/demo/avatars/avatar-m.png') ?>"
                                                 class="rounded-circle shadow-1 img-thumbnail"
                                                 alt="Default Profile Photo" width="200" height="200">
                                            <!-- Edit Profile Picture Button (Triggers Modal) -->
                                            <div class="position-absolute" style="right: -20px; bottom: -20px;">
                                                <button type="button" class="btn btn-info" title="Edit"
                                                        data-toggle="modal" data-target="#editConfirmationModal"><i
                                                            class="fas fa-edit"></i></button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="mt-2"></div>

                            <div class="mt-3">
                                <h5 class="mb-0 fw-700 text-center">
                                    <?php if (isset($user)) : ?>
                                        <span class="text-truncate text-truncate-md opacity-80"></span>
                                        <?= $user['first_name'] ?> <?= $user['last_name'] ?>
                                        </span>
                                    <?php endif; ?>
                                </h5>
                            </div>
                            <?php if ($nullPercentage < 100) : ?>
                                <div class="progress mt-2" style="height: 10px; width: 100%;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                         role="progressbar" style="width: <?php echo $nullPercentage; ?>%;"
                                         aria-valuenow="<?php echo $nullPercentage; ?>">
                                        <?php echo $nullPercentage; ?>%
                                    </div>
                                </div>
                                <div class="text-center mt-3" id="editButton" class="btn btn-primary btn-sm ml-auto"
                                     data-toggle="modal" data-target="#editModal">
                                    <a href="#" class="text-primary" data-toggle="modal" data-target="#editModal">Click
                                        here to complete your profile</a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- complete profile Modal -->
            <div class="modal fade" id="profileCompletionModal" tabindex="-1" role="dialog"
                 aria-labelledby="profileCompletionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="profileCompletionModalLabel">Complete Your Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personalInformation">Personal
                                        Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#emergencyContacts">Emergency
                                        Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#insuranceDetail">Insurance Details</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content mt-3">
                                <!-- Personal Information Tab -->
                                <!-- Personal Information Tab -->
                                <div id="personalInformation" class="tab-pane fade show active">
                                    <form>
                                        <!-- First Name -->
                                        <div class="form-group row">
                                            <label for="firstName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="firstName"
                                                       placeholder="First Name">
                                            </div>
                                        </div>

                                        <!-- Middle Name -->
                                        <div class="form-group row">
                                            <label for="middleName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> Middle Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="middleName"
                                                       placeholder="Middle Name">
                                            </div>
                                        </div>

                                        <!-- Last Name -->
                                        <div class="form-group row">
                                            <label for="lastName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="lastName"
                                                       placeholder="Last Name">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-envelope"></i> Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="form-group row">
                                            <label for="dob" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-calendar"></i> Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="dob">
                                            </div>
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="form-group row">
                                            <label for="phoneNumber" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-phone-alt"></i> Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" id="phoneNumber"
                                                       placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <!-- Country -->
                                        <div class="form-group row">
                                            <label for="country" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-globe"></i> Country</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2" id="country">
                                                    <option>Select Country</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- County -->
                                        <div class="form-group row">
                                            <label for="county" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-map-marked-alt"></i> County</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2" id="county">
                                                    <option>Select County</option>
                                                    <!-- Add options for counties here based on the selected country -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Sub-County -->
                                        <div class="form-group row">
                                            <label for="subCounty" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-map-marker-alt"></i> Sub-County</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2" id="subCounty">
                                                    <option>Select Sub-County</option>
                                                    <!-- Add options for sub-counties here based on the selected county -->
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Emergency Contacts Tab -->
                                <div id="emergencyContacts" class="tab-pane fade">
                                    <form>
                                        <!-- Emergency Contact First Name -->
                                        <div class="form-group row">
                                            <label for="emergencyContactFirstName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="emergencyContactFirstName"
                                                       placeholder="First Name">
                                            </div>
                                        </div>

                                        <!-- Emergency Contact Middle Name -->
                                        <div class="form-group row">
                                            <label for="emergencyContactMiddleName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> Middle Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="emergencyContactMiddleName"
                                                       placeholder="Middle Name">
                                            </div>
                                        </div>

                                        <!-- Emergency Contact Last Name -->
                                        <div class="form-group row">
                                            <label for="emergencyContactLastName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="emergencyContactLastName"
                                                       placeholder="Last Name">
                                            </div>
                                        </div>

                                        <!-- Emergency Contact Email -->
                                        <div class="form-group row">
                                            <label for="emergencyContactEmail" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-envelope"></i> Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="emergencyContactEmail"
                                                       placeholder="Email">
                                            </div>
                                        </div>

                                        <!-- Emergency Contact Phone Number -->
                                        <div class="form-group row">
                                            <label for="emergencyContactPhoneNumber" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-phone-alt"></i> Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" id="emergencyContactPhoneNumber"
                                                       placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <!-- Relationship -->
                                        <div class="form-group row">
                                            <label for="relationship" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user-friends"></i> Relationship</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="relationship"
                                                       placeholder="Relationship">
                                            </div>
                                        </div>

                                    </form>

                                    <!-- Emergency Contacts Form Fields -->
                                </div>
                                <!-- Insurance Details Tab -->
                                <div id="insuranceDetail" class="tab-pane fade">
                                    <form>
                                        <div class="form-group row">
                                            <label for="insuranceName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-file-medical"></i> Insurance Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="insuranceName"
                                                       placeholder="Insurance Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="insuranceDetails" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-info-circle"></i> Insurance Details</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="insuranceDetails" rows="3"
                                                          placeholder="Insurance Details"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="saveBtn" style="display: none;">Save
                                Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of complete profile modal -->

            <!-- profile image modal profile  -->
            <div class="modal modal-alert fade" id="editConfirmationModal" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to edit?</p>
                            <p>Upload Image:</p>
                            <form enctype="multipart/form-data" method="post" id="profileForm">
                                <input type="hidden" name="action" value="update_profile_pic">
                                <input type="file" id="newImage" name="profile_picture" accept="image/*">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  delete image  modal  -->
            <div class="modal modal-alert fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <i class="fas fa-delete mr-2" style="color: white;"></i>
                            <h5 class="modal-title">Are you sure you want to delete?</h5>
                            <!-- Font Awesome edit icon -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Insuarance details -->
            <div class="card mb-g">
                <div class="row row-grid no-gutters">

                    <div class="col-12">
                        <div class="p-3">
                            <h2 class="mb-0 fs-xl">
                                Insurance Details
                            </h2>
                        </div>
                    </div>

                    <?php if (!empty($insurance_details)) : ?>
                        <div class="col-12">
                            <div class="p-3">
                                <!-- Insurance Details -->
                                <div class="insurance-details mt-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0"><i class="fas fa-shield-alt"></i> Name</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary d-flex align-items-center">
                                            <div class="d-flex justify-content-end w-100">
                                                <span><?= $insurance_details['insurance_name'] ?? 'No details found' ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0"><i class="fas fa-info-circle"></i> Details</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary d-flex align-items-center">
                                            <div class="d-flex justify-content-end w-100">
                                                <span><?= $insurance_details['insurance_details'] ?? 'No details found' ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 mt-2 ml-3 mb-2">
                            <button id="editInsuranceDetailsButton" type="button" class="btn btn-primary"
                                    data-toggle="modal" data-target="#editInsuranceDetailsModal">
                                Edit Insurance Details
                            </button>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="ml-3 mt-1">No insurance details found</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="modal fade" id="editInsuranceDetailsModal" tabindex="-1" role="dialog"
                 aria-labelledby="editInsuranceDetailsModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editInsuranceDetailsModalLabel">Edit Insurance Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tab navigation -->
                            <ul class="nav nav-tabs" id="editTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal"
                                       role="tab" aria-controls="personal" aria-selected="true">Insuarance Details</a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content mt-3" id="editTabContent">
                                <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                     aria-labelledby="personal-tab">
                                    <!-- insuarance details  tab content -->
                                    <form method="post" id="insuranceDetailsForm">
                                        <input type="hidden" name="action" value="update_insurance_details">
                                        <!-- Insurance Name -->
                                        <div class="form-group row">
                                            <label for="insuranceName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-shield-alt"></i> &nbsp;Insurance Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="insuranceName"
                                                       name="insurance_name"
                                                       value="<?= isset($insurance_details['insurance_name']) ? $insurance_details['insurance_name'] : '' ?>"
                                                       placeholder="Insurance Name">
                                            </div>
                                        </div>
                                        <!-- Insurance Details -->
                                        <div class="form-group row">
                                            <label for="insuranceDetails" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-info-circle"></i>&nbsp;Insurance Details</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" required name="insurance_details"
                                                          id="insuranceDetails"><?= isset($insurance_details['insurance_details']) ? $insurance_details['insurance_details'] : '' ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" id="saveBtn">Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 col-xl-3 order-lg-2 order-xl-3">
            <!-- emergency contact information -->
            <div class="card mb-g rounded-top">
                <div class="row no-gutters row-grid">
                    <div class="col-12">
                        <div class="p-3">
                            <h2 class="mb-0 fs-xl">
                                Personal Details

                            </h2>
                            <!-- Contact Information -->
                            <?php if (isset($user)) : ?>
                                <div class="row mt-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $user['first_name'] ?> <?= $user['last_name'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $user['primary_email_address'] ?? 'NULL' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $user['primary_phone_number'] ?? 'NULL' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Secondary Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $user['secondary_phone_number'] ?? 'NULL' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#viewDetailsModal">
                                            View all
                                        </button>

                                        <button id="editpersonaldetailsButton" 
                                                data-toggle="modal" data-target="#editpersonaldetailModal">
                                            Edit Profile
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- view details modal  -->
            <div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog"
                 aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewDetailsModalLabel">View User Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php if (isset($user)) : ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-user"></i> Full Name:</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span><?= $user['first_name'] ?> <?= $user['last_name'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-envelope"></i> Primary Email:</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span><?= $user['primary_email_address'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-calendar"></i> Date of Birth:</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span><?= $user['dob'] ?? 'NULL' ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-id-card"></i> National ID/Passport::</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span><?= $user['national_id_passport'] ?? 'NULL' ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-phone-alt"></i> Phone Number::</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span><?= $user['primary_phone_number'] ?? 'NULL' ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-globe-americas"></i> Country of Residence:
                                        </h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span>
                                                <?php
                                                $countryId = $user['country_of_residence_id'];
                                                $countryName = 'NULL';
                                                foreach ($countries as $country) {
                                                    if ($country['id'] == $countryId) {
                                                        $countryName = $country['country_name'];
                                                        break;
                                                    }
                                                }
                                                echo $countryName;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-globe-americas"></i> County of Residence:</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span>
                                                <?php
                                                $countyId = $user['county_of_residence_id'];
                                                $countyName = 'NULL';
                                                foreach ($counties as $county) {
                                                    if ($county['id'] == $countyId) {
                                                        $countyName = $county['county_name'];
                                                        break;
                                                    }
                                                }
                                                echo $countyName;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i> Sub County of Residence:
                                        </h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary d-flex align-items-center">
                                        <div class="d-flex justify-content-end w-100">
                                            <span>
                                                <?php
                                                $sub_county_id = $user['sub_county_of_residence_id'];
                                                $sub_county_name = 'NULL';
                                                foreach ($sub_counties as $sub_county) {
                                                    if ($sub_county['id'] == $sub_county_id) {
                                                        $sub_county_name = $sub_county['sub_county_name'];
                                                        break;
                                                    }
                                                }
                                                echo $sub_county_name;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php endif; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- edit personal profile  -->

            <div class="modal fade" id="editpersonaldetailModal" tabindex="-1" role="dialog"
                 aria-labelledby="#editpersonaldetailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit personal details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tab navigation -->
                            <ul class="nav nav-tabs" id="editTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal"
                                       role="tab" aria-controls="personal" aria-selected="true">Personal</a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content mt-3" id="editTabContent">
                                <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                     aria-labelledby="personal-tab">
                                    <!-- Personal tab content -->
                                    <form method="post" id="profileDetails">
                                        <input type="hidden" name="action" value="update_profile_details">

                                        <!-- First Name -->
                                        <div class="form-group row">
                                            <label for="firstName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> &nbsp;First Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="firstName"
                                                       name="first_name"
                                                       value="<?= isset($user['first_name']) ? $user['first_name'] : '' ?>"
                                                       placeholder="First Name">
                                            </div>
                                        </div>
                                        <!-- Middle Name -->
                                        <div class="form-group row">
                                            <label for="middleName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> &nbsp;Middle Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="middleName"
                                                       name="middle_name"
                                                       value="<?= isset($user['middle_name']) ? $user['middle_name'] : '' ?>"
                                                       placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="form-group row">
                                            <label for="lastName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> &nbsp;Last Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="lastName"
                                                       name="last_name"
                                                       value="<?= isset($user['last_name']) ? $user['last_name'] : '' ?>"
                                                       placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!--Primary Email -->
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-envelope"></i> &nbsp;Primary Email:</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="email"
                                                       name="primary_email_address"
                                                       value="<?= isset($user['primary_email_address']) ? $user['primary_email_address'] : '' ?>"
                                                       placeholder="Primary Email">
                                            </div>
                                        </div>
                                        <!--Secondary Email -->
                                        <div class="form-group row">
                                            <label for="secondaryEmail" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-envelope"></i> &nbsp;Secondary Email:</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="secondaryEmail"
                                                       name="secondary_email_address"
                                                       value="<?= isset($user['secondary_email_address']) ? $user['secondary_email_address'] : '' ?>"
                                                       placeholder="Secondary Email">
                                            </div>
                                        </div>
                                        <!-- Date of Birth -->
                                        <div class="form-group row">
                                            <label for="dob" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-calendar"></i> &nbsp;Date of Birth:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="dob" id="dob"
                                                       value="<?= isset($user['dob']) ? $user['dob'] : '' ?>"
                                                       max="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                        <!-- National ID/Passport -->
                                        <div class="form-group row">
                                            <label for="nationalId" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-id-card"></i>&nbsp; National ID/Passport:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nationalId"
                                                       name="national_id_passport"
                                                       value="<?= isset($user['national_id_passport']) ? $user['national_id_passport'] : '' ?>"
                                                       placeholder="National ID/Passport">
                                            </div>
                                        </div>

                                        <!-- Primary Phone Number -->
                                        <div class="form-group row">
                                            <label for="primaryPhoneNumber" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-phone"></i>&nbsp; Primary Phone Number:</label>
                                            <div class="col-sm-9">
                                                <input type="tel" required class="form-control" id="primaryPhoneNumber"
                                                       name="primary_phone_number"
                                                       value="<?= isset($user['primary_phone_number']) ? $user['primary_phone_number'] : '' ?>"
                                                       placeholder="Primary Phone Number">
                                            </div>
                                        </div>
                                        <!-- Secondary Phone Number -->
                                        <div class="form-group row">
                                            <label for="secondaryPhoneNumber" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-phone"></i>&nbsp; Secondary Phone:</label>
                                            <div class="col-sm-9">
                                                <input type="tel" required class="form-control"
                                                       id="secondaryPhoneNumber" name="secondary_phone_number"
                                                       value="<?= isset($user['secondary_phone_number']) ? $user['secondary_phone_number'] : '' ?>"
                                                       placeholder="Secondary Phone Number">
                                            </div>
                                        </div>
                                        <!-- Country of Residence -->
                                        <div class="form-group row">
                                            <label for="country3" class="col-sm-3 col-form-label"> <i
                                                        class="fas fa-globe-americas"></i> &nbsp; Country of Residence:</label>
                                            <div class="col-sm-9">
                                                <select class="select2 form-control" id="country3"
                                                        name="country_of_residence_id">
                                                    <option value="">Select Country</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="country3" name="country_of_residence_id" value="<?= $user['country_of_residence_id'] ?? '' ?>" placeholder="Country of Residence"> -->
                                            </div>
                                        </div>
                                        <!-- County of Residence -->
                                        <div class="form-group row">
                                            <label for="county3" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-globe-americas"></i> &nbsp; County of
                                                Residence:</label>
                                            <div class="col-sm-9">
                                                <select class="select2 form-control" id="county3"
                                                        name="county_of_residence_id">
                                                    <option value="">Select County</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="county3" name="county_of_residence_id" value="<?= $user['county_of_residence_id'] ?? '' ?>" placeholder="County of Residence"> -->
                                            </div>
                                        </div>
                                        <!-- Sub-County of Residence -->
                                        <div class="form-group row">
                                            <label for="subCounty3" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-map-marker-alt"></i>&nbsp; Sub-County of
                                                Residence:</label>
                                            <div class="col-sm-9">
                                                <select class="select2 form-control" id="subCounty3"
                                                        name="sub_county_of_residence_id">
                                                    <option value="">Select Sub County</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="subCounty3" name="sub_county_of_residence_id" value="<?= $user['sub_county_of_residence_id'] ?? '' ?>" placeholder="Sub-County of Residence"> -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>

                                            <button type="submit"id="saveBtn">Save Changes
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Emergency contact details -->
            <div class="card mb-g">
                <div class="row row-grid no-gutters">

                    <div class="col-12">
                        <div class="p-3">
                            <h2 class="mb-0 fs-xl">
                                Emergency Contact Details
                            </h2>
                        </div>
                    </div>

                    <?php if (!empty($emergency_contact_details)) : ?>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="row mt-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"><i class="fas fa-user"></i> Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $emergency_contact_details['emergency_contact_first_name'] ?? 'Null' ?>
                                        <?= !empty($emergency_contact_details['emergency_contact_middle_name']) ? ' ' . $emergency_contact_details['emergency_contact_middle_name'] : '' ?>
                                        <?= !empty($emergency_contact_details['emergency_contact_last_name']) ? ' ' . $emergency_contact_details['emergency_contact_last_name'] : '' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"><i class="fas fa-envelope"></i> Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $emergency_contact_details['emergency_contact_email'] ?? 'Null' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"><i class="fas fa-phone"></i> Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $emergency_contact_details['emergency_contact_phone_number'] ?? 'Null' ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"><i class="fas fa-user-friends"></i> Relationship</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $emergency_contact_details['relationship'] ?? 'Null' ?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2 ml-3">
                            <button id="editEmergencydetailsButton" type="button" class="btn btn-primary"
                                    data-toggle="modal" data-target="#editEmergencydetailsModal">
                                Edit Emergency Contact details
                            </button>
                        </div>

                    <?php else : ?>
                        <p class="ml-3 mt-1">No emergency contact details found.</p>
                    <?php endif; ?>

                </div>
            </div>
            <div class="modal fade" id="editEmergencydetailsModal" tabindex="-1" role="dialog"
                 aria-labelledby="editEmergencydetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editEmergencydetailsModalLabel">Edit emergency contact
                                details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tab navigation -->
                            <ul class="nav nav-tabs" id="editTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="emergency-tab" data-toggle="tab" href="#emergency"
                                       role="tab" aria-controls="emergency" aria-selected="true">Emergency Details</a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content mt-3" id="editTabContent">
                                <div class="tab-pane fade show active" id="emergency" role="tabpanel"
                                     aria-labelledby="emergency-tab">
                                    <!-- emergency contact tab content -->
                                    <form method="post" id="emergencyContactForm">
                                        <input type="hidden" name="action" value="update_emergency_contact">
                                        <!-- First Name -->
                                        <div class="form-group row">
                                            <label for="firstName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i> &nbsp;First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="firstName"
                                                       name="emergency_contact_first_name"
                                                       value="<?= $emergency_contact_details['emergency_contact_first_name'] ?? '' ?>"
                                                       placeholder="First Name">
                                            </div>
                                        </div>
                                        <!-- Middle Name -->
                                        <div class="form-group row">
                                            <label for="middleName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i>&nbsp;Middle Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="middleName"
                                                       name="emergency_contact_middle_name"
                                                       value="<?= $emergency_contact_details['emergency_contact_middle_name'] ?? '' ?>"
                                                       placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="form-group row">
                                            <label for="lastName" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user"></i>&nbsp;Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="lastName"
                                                       name="emergency_contact_last_name"
                                                       value="<?= $emergency_contact_details['emergency_contact_last_name'] ?? '' ?>"
                                                       placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-envelope"></i>&nbsp;Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" required class="form-control" id="email"
                                                       name="emergency_contact_email"
                                                       value="<?= $emergency_contact_details['emergency_contact_email'] ?? '' ?>"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- Phone Number -->
                                        <div class="form-group row">
                                            <label for="phoneNumber" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-phone"></i>&nbsp;Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="tel" required class="form-control" id="phoneNumber"
                                                       name="emergency_contact_phone_number"
                                                       value="<?= $emergency_contact_details['emergency_contact_phone_number'] ?? '' ?>"
                                                       placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <!-- Relationship -->
                                        <div class="form-group row">
                                            <label for="relationship" class="col-sm-3 col-form-label"><i
                                                        class="fas fa-user-friends"></i>&nbsp;Relationship </label>
                                            <div class="col-sm-9">
                                                <input required type="text" class="form-control" id="relationship"
                                                       name="relationship"
                                                       value="<?= $emergency_contact_details['relationship'] ?? '' ?>"
                                                       placeholder="Relationship">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit"id="saveBtn">Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->

<!-- BEGIN Shortcuts -->
<div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog"
     aria-labelledby="modal-shortcut" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="app-list w-auto h-auto p-0 text-left">
                    <li>
                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">
                                Home
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
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
</nav>
<!-- END Quick Menu -->


