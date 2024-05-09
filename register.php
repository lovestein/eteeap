<?php
$page_title = "Login";
include("./includes/header.php");
?>

<!-- Register Page -->
<div class="container-fluid d-flex flex-column vh-100 p-0">
    <section class="flex-fill d-flex bg-img-login justify-content-center">
        <!-- Card Login -->
        <div class="col-12 col-lg-8 align-content-center">
            <div class="card rounded-5 p-3 m-4 bg-light bg-opacity-75">
                <form id="signInForm" class="row g-2">
                    <div class="col-12">
                        <div class="row">
                            <!-- Profile Picture -->
                            <div class="col-lg-4 col-md-12 align-items-center d-flex justify-content-center">
                                <div class="text-center">
                                    <img src="./assets/images/profile_pictures/default_profile_image.jpg" id="previewCreateUserImage" class="img-fluid mw-100 mh-100 rounded-circle border border-3 border-primary" style="height: 150px; width: 150px;">
                                    <label for="createUserImage" class="form-label fw-bold d-block" type="button">
                                        <span class="icon-image me-2 text-primary"></span>Profile Picture
                                    </label>
                                    <input type="file" name="createUserImage" id="createUserImage" class="d-none">
                                </div>
                            </div>
                            <!-- Complete Name -->
                            <div class="col-lg-8 col-md-12">
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-12">
                                        <label for="createUserFirstName" class="form-label fw-bold">First Name</label>
                                        <input id="createUserFirstName" type="text" class="form-control bg-light" name="createUserFirstName" placeholder="Enter your first name.">
                                    </div>
                                    <!-- Middle Name -->
                                    <div class="col-12">
                                        <label for="createUserMiddleName" class="form-label fw-bold">Middle Name</label>
                                        <input id="createUserMiddleName" type="text" class="form-control bg-light" name="createUserMiddleName" placeholder="Enter your middle name.">
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-12">
                                        <label for="createUserLastName" class="form-label fw-bold">Last Name</label>
                                        <input id="createUserLastName" type="text" class="form-control bg-light" name="createUserLastName" placeholder="Enter your last name.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="col-lg-6 col-md-12">
                        <label for="createUserPhoneNumber" class="form-label fw-bold">Phone Number</label>
                        <input id="createUserPhoneNumber" type="text" class="form-control bg-light" name="createUserPhoneNumber" placeholder="Enter your phone number.">
                    </div>
                    <!-- Birthdate -->
                    <div class="col-lg-6 col-sm-12">
                        <label for="createUserBirthdate" class="form-label fw-bold">Birth Date</label>
                        <input id="createUserBirthdate" type="date" class="form-control bg-light" name="createUserBirthdate">
                    </div>
                    <!-- Username -->
                    <div class="col-lg-6 col-md-12">
                        <label for="createUserName" class="form-label fw-bold">Username</label>
                        <input id="createUserName" type="text" class="form-control bg-light" name="createUserName" placeholder="Enter your username.">
                    </div>
                    <!-- Email -->
                    <div class="col-lg-6 col-md-12">
                        <label for="createUserEmail" class="form-label fw-bold">Email</label>
                        <input id="createUserEmail" type="email" class="form-control bg-light" name="createUserEmail" placeholder="Enter your email.">
                    </div>
                    <!-- Password -->
                    <div class="col-lg-6 col-md-12">
                        <label for="createUserPassword" class="form-label fw-bold">Password</label>
                        <span><small id="passwwordErrorMessage" class="text-danger"></small></span>
                        <span><small id="passwwordSuccessMessage" class="text-success"></small></span>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control bg-light border-end-0" id="createUserPassword" name="createUserPassword" placeholder="Enter your password">
                            <span class="input-group-text bg-transparent border-start-0" id="viewCreatePassword"><span class="icon-eye" style="cursor: pointer;"></span></span>
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <div class="col-lg-6 col-md-12">
                        <label for="createUserConfirmPassword" class="form-label fw-bold">*Confirm Password</label>
                        <span><small id="confirmPasswwordErrorMessage" class="text-danger"></small></span>
                        <span><small id="confirmPasswwordSuccessMessage" class="text-success"></small></span>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control bg-light border-end-0" id="createUserConfirmPassword" name="createUserConfirmPassword" placeholder="Confirm password">
                            <span class="input-group-text bg-transparent border-start-0" id="viewCreateConfirmPassword"><span class="icon-eye" style="cursor: pointer;"></span></span>
                        </div>
                    </div>
                    <!-- User Type -->
                    <input type="hidden" id="createUserType" name="createUserType" value="student">

                    <button type="button" class="btn btn-primary form-control rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#verifyAccountModal">Register</button>
                </form>
                <div class="card-text text-center pb-3">
                    By using this service, you understood and agree to the PCU Online Services Terms of Use and Privacy Statement <br>
                    <small>
                        Already have an account? <a href="./login.php" class="text-primary fw-bold text-decoration-none">Sign in</a><br>
                        <a href="./index.php" class="text-decoration-none">Back to Homepage</a>
                    </small>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Verify Account Modal -->
<div class="modal fade" id="verifyAccountModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title w-100 text-center fs-5">
                    Verify Account
                </h1>
            </div>
            <div class="modal-body text-center">
                <h4 class="fw-bold">
                    You're almost set! Provide the verification code we've sent to your email to verify your account.
                </h4>
                <!-- Form Alert Message -->
                <div id="formAlertVerify" class="toast w-100 my-2">
                    <div class="d-flex">
                        <div id="formAlertMessageVerify" class="toast-body"></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
                <form id="verifyUserForm">
                    <input id="userEmailVerify" type="hidden" required>
                    <input type="text" id="userVerificationCode" placeholder="Enter Verification Code" class="form-control text-center mb-2" style="height: 80px; font-size: 30px;">
                    <button id="verifyButton" type="button" class="btn btn-sm btn-primary form-control rounded-pill fw-bold mb-2" data-bs-toggle="modal" data-bs-target="#successfulVerificationModal">
                        <h4>Verify Account</h4>
                    </button>
                    <button id="resendCodeButton" type="submit" class="btn btn-sm btn-info form-control rounded-pill fw-bold mb-2">
                        <h4>Resend Code</h4>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Successful Verification Modal -->
<div class="modal fade" id="successfulVerificationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-2">
            <div class="modal-body">
                <img src="./assets/images/web/verification_successful.png" alt="Verification Success" style="height: 200px;">
                <h3 class="fw-bold">Verification successful! You may now proceed to login to your account.</h3>
            </div>
            <div class="modal-footer">
                <div class="col text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("./includes/footer.php");
?>