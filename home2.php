<?php 

include('authentication.php');

$page_title = "Home Page";
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-header">
                    <h4 style="text-align: center;">Dash Board</h4>
                    </div>

                    <div class="card-body">
                        <form action="">
                            <h4>Access when you are Logged in</h4>
                            <h5>with email varification</h5>
                            <hr>
                            <h5>Username:<?= $_SESSION['auth_user']['username'];?></h5>
                            <h5>Email Id:<?= $_SESSION['auth_user']['email'];?></h5>
                            <h5>Phone Number:<?= $_SESSION['auth_user']['phone'];?></h5>
                            <h5>Address:<?= $_SESSION['auth_user']['address'];?></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>