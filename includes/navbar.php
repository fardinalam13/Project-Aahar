
<div class="bg-dark">
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Aahar Varification</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <span style="padding-right: 10px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Index</a>
        </li>
        </span>

        <?php if(!isset($_SESSION['authenticated'])) : ?>
        <span style="padding-right: 10px;"> 
        <li class="nav-item">
          <a class="nav-link" href="register.php">Customer<br>Registration</a>
        </li>
        </span>

        <span style="padding-right: 10px;"> 
        <li class="nav-item">
          <a class="nav-link" href="vendor_register.php">Vendor<br>Registration</a>
        </li>
        </span>

        <span style="padding-right: 10px;">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log in AS<br>Customer</a>
        </li>
        </span>

        <span style="padding-right: 10px;">
        <li class="nav-item">
          <a class="nav-link" href="vendor_login.php">Log in AS<br>Vendor</a>
        </li>
        </span>
        <?php endif ?>

        <span style="padding-right: 10px;">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        </span>

        <?php if(isset($_SESSION['authenticated'])) : ?>
        <span style="padding-right: 10px;">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        </span>
        <?php endif ?>

      </ul>

    </div>
  </div>
</nav>

    </div>
  </div>
</div>
</div>