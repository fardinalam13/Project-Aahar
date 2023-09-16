<?php 
session_start();

$page_title = "Vendor's LogIn Form";
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-6">
                
                <?php
                if(isset($_SESSION['status']))
                {
                    ?>
                    <div class="alert alert-success">
                        <h5><?= $_SESSION['status']; ?></h5>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                } 
                ?>

                <div class="card shadow">
                    <div class="card-header">

                    <h4 style="text-align: center;">Log In Form for Vendors</h4>
                    <h5 style="text-align: center;">with email varification</h5>

                    </div>
                    <div class="card-body">

                        <form action="vendor_logIncode.php" method="POST">

                        <div class="form-group mb-3">
                         <label for="">Email Id</label>  
                         <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                         <label for="">Password</label>  
                         <input type="text" name="password" class="form-control">
                        </div>

                        <button type="submit" name="vendor_login_now_btn" class="btn btn-success">LogIn Now</button>

                        <a href="vendor_password-reset.php" class="float-end">Forget Your Password</a>
                        </form>

                        <hr>
                        <h5>
                            Didn't recieve your varification Email?
                            <button class="btn btn-primary"><a href="vendor_resend-email.php" style="color: beige;">Resend</a></button>
                        </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>