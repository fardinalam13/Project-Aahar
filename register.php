<?php 
session_start();

$page_title = "Registration Form";
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
                        <div class ="alert alert-success">
                            <h5><?= $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    
                </div>
                <div class="card shadow">
                    <div class="card-header">

                    <h4 style="text-align: center;">Registration Form for Customers</h4>
                    <h5 style="text-align: center;">with email varification</h5>

                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                        <div class="form-group mb-3">
                         <label for="">Name</label>  
                         <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                         <label for="">Email Id</label>  
                         <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                         <label for="">Phone Number</label>  
                         <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                         <label for="">Address</label>  
                         <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                         <label for="">Password</label>  
                         <input type="text" name="password" class="form-control">
                        </div>

                        <button type="submit" name="register_btn" class="btn btn-success">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php');?>