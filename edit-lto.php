<?php
include("./components/data.php");
$lto = $data["lto"][0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart watch guidance ang notification</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <?php include("./components/lto-nav.php"); ?>


  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
          Edit LTO
        </h5>
        <?php $ltoDetails = $data["lto"][$_GET['i']] ?>
        <form class="p-4">
          <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-8 col-lg-9">
              <img src="<?= $ltoDetails["avatar"] ?>" style="width: 120px" alt="Profile">
              <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
              </div>
            </div>
          </div>

          <div class="col-12 mb-3">
            <label for="yourName" class="form-label"> Name</label>
            <input type="text" class="form-control" value="<?= $ltoDetails["name"] ?>" required>
          </div>

          <div class="col-12 mb-3">
            <label for="yourName" class="form-label">Contact number </label>
            <input type="text" class="form-control" value="<?= $ltoDetails["contact"] ?>" required>
          </div>

          <div class="col-12 mb-3">
            <label for="yourUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" class="form-control" value="<?= $ltoDetails["email"] ?>" required>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary m-1">Save Changes</button>
            <button type="button" class="btn btn-danger m-1" onclick="return window.history.back()">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!-- End #main -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>