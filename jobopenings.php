
<?php
include_once("connection/connection.php");
$conn = connection();
$sql = "SELECT * FROM job_posts ORDER BY job_id DESC";
$jobposts = $conn->query($sql) or die($conn->error);
$row = $jobposts->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Vacancy List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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
                          <a href="index.php" class="nav-link">Home</a>
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
                         </li>
                    
                    </nav>
 
            <div class="card">
        <div class="card-header bg-danger">
          <h3 class="card-title">You must log in to apply!</h3>
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
</div>
         <div class="card-body">
        <div class="row">
        <?php do{ ?>
  <div class="col-sm-6 pl-6" style="max-width: 25rem;">
    <div class="card" >
      <div class="card-body">
         <div class="card-header bg-primary" ><b><?php echo $row['job_title']; ?></b>
        <p class="card-text"><?php echo $row['job_location']; ?></p></div><br>
        <ul>
        <li><p class="card-text"><?php echo $row['job_qualifications']; ?></p></li>
        <li><p class="card-text"><?php echo $row['job_req_qualif']; ?></p></li>
        <p class="card-text"><footer class="blockquote-footer">uploaded at<?php echo '  '.$row['created_at']; ?></p>
      </footer>
      </ul>
      </div>
    </div>
  </div>
<?php }while($row = $jobposts->fetch_assoc()) ?>
</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
