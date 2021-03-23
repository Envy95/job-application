<?php
include_once("../connection/connection.php");
$conn = connection();
$id = $_GET['ID'];
$sql = "SELECT * FROM job_posts WHERE job_id ='$id'";
$jobposts = $conn->query($sql) or die($conn->error);
$row = $jobposts->fetch_assoc();
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['file']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $apply = $_POST['applyas'];
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO applicants (first_name, last_name, email, contact_num, name, size, apply_as) VALUES ('$fname','$lname','$email','$contact','$filename', '$size','$apply')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
                header('Location: jobpostsuser.php');
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Application</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/plugins/dropzone/min/dropzone.min.css">
</head>
<nav class="navbar navbar-expand navbar-dark navbar-dark">
                      <!-- Left navbar links -->
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="useraccount.php" class="nav-link"><b><h5>Account</h5></b></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="userindex.php" class="nav-link">Home</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="#" class="nav-link">About Us</a>
                        </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="usercontactus.php" class="nav-link">Contact Us</a>
                        </li>
                         </li>
                         <li class="nav-item d-none d-sm-inline-block">
                          <a href="logoutuser.php" class="nav-link">Log out</a>
                        </li>
                      </ul>

                      <!-- Right navbar links -->
                      <ul class="navbar-nav ml-auto">
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title">Apply</h3>

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
          <section class="content-header">
        <div class="row mb-2">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Application form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="" name="fname">
                  </div>
                   <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="" name="lname">
                  </div>
                   <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="" name="email">
                  </div>
                   <div class="form-group">
                    <label>Contact Number</label>
                    <input class="form-control" type="" name="contact">
                  </div>
                   <div class="form-group">
                    
                    <input class="form-control" type="hidden" name="applyas" value="<?php echo $row['job_title']; ?>">
                  </div>
                   <label>Upload your Resume</label>
                   <div>
                     <input type="file" name="file">
                   </div>
                    <br>
                   <div class="card-footer">
              <a href=""><button type="submit" name="submit" class="btn btn-success">Submit</button></a>
              <a class="btn btn-warning" href="jobpostsuser.php" role="button">Cancel</a>
                </div>
                    </div>

                  </div>
                </div>
              </form>
               
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.container-fluid -->
    </section>
        </div>
        <!-- /.card-body -->
       
      </div>
      <!-- /.card -->

    </section>
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<script src="../assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>

</body>
</html>
