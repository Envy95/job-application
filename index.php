<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Application</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<nav class="navbar navbar-expand navbar-dark navbar-dark">
                      <!-- Left navbar links -->
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="index.php" class="nav-link disabled"><b><h5>Job Application</h5></b></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="jobopenings.php" class="nav-link">Job Openings</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="login.php" class="nav-link">Login</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="register.php" class="nav-link">Register</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="#" class="nav-link">About Us</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="contactus.php" class="nav-link">Contact Us</a>
                        </li>
                      </ul>

                      <!-- Right navbar links -->
                      <ul class="navbar-nav ml-auto">
                        <!-- Navbar Search -->
                        <li class="nav-item">
                          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
<section class="content">
      <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-info">
          <h3 class="card-title">Welcome to Job App!</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          We have jobs for you!
        </div>
        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="assets/dist/img/job1.jpg" height="500" width="700" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="assets/dist/img/job2.jpg" height="500" width="700" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="assets/dist/img/job3.jpg" height="500" width="700" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="assets/dist/img/job4.jpg" height="500" width="700" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="assets/dist/img/job5.png" height="500" width="700" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
        </div>
        <!-- /.card-body -->
       
      </div>
      <!-- /.card -->

    </section>
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
