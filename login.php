<?php
$page_title = "Login";
include("./includes/header.php");
?>

<!-- Login Page -->
<div class="container-fluid d-flex flex-column vh-100 p-0">
    <section class="flex-fill d-flex bg-img-login">
        <!-- Card Login -->
        <div class="col-12 col-lg-4 d-inline-block align-content-center justify-content-center">
            <div class="card rounded-5 p-3 mx-4 bg-light bg-opacity-75">
                <div class="card-title text-center pt-3">
                    <img src="./assets/images/web/pcu_logo.png" style="height: 100px;" class="mt-1">
                    <h1 class="fw-bold text-black">ETEEAP</h1>
                    <p class="p-0 text-muted">Sign in to start your session</p>
                </div>
                <form id="signInForm">
                    <div class="mb-2">
                        <label for="userName" class="form-label fw-bold">Username</label>
                        <input type="email" class="form-control bg-light" id="userName" name="userName" placeholder="Enter your username.">
                    </div>
                    <div class="mb-2">
                        <label for="userPassword" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control bg-light" id="userPassword" name="userPassword" placeholder="Enter your password.">
                        <div class="text-end">
                            <a href="" class="text-primary text-decoration-none" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal"><small>Forgot Password?</small></a>
                        </div>
                    </div>
                    <a href="./student.php">
                        <button type="button" class="btn btn-primary form-control rounded-pill fw-bold">Sign In</button>
                    </a>
                </form>
                <div class="card-text text-center pb-3">
                    By using this service, you understood and agree to the PCU Online Services Terms of Use and Privacy Statement <br>
                    <small>
                        Don't have an account? <a href="./register.php" class="text-primary fw-bold text-decoration-none">Sign up</a><br>
                        <a href="./index.php" class="text-decoration-none">Back to Homepage</a>
                    </small>
                </div>
            </div>
        </div>
        <!-- Title -->
        <div class="col-lg-8 d-none d-lg-block align-content-center text-end text-white px-5">
            <h1 class="display-4 fw-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cumque?
            </h1>
            <h5>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quis.
            </h5>
        </div>
    </section>
</div>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title w-100 text-center fs-5">
                    Forgot Password?
                </h1>
            </div>
            <div class="modal-body">
                <p class="text-muted">
                    Please provide your email address where we can send the link to change your password.
                </p>
                <!-- Form Alert Message -->
                <div id="formAlertForgotPassword" class="toast w-100 my-2">
                    <div class="d-flex">
                        <div id="formAlertMessageForgotPassword" class="toast-body"></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
                <form id="forgotPasswordForm">
                    <div class="mb-2">
                        <label for="userEmailForgotPassword" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control bg-light" id="userEmailForgotPassword" name="userEmailForgotPassword" placeholder="Enter your email.">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="submit" class="btn btn-primary fw-bold">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("./includes/footer.php");
?>