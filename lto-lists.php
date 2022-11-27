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
          LTO Lists
          <button type="button" class="btn btn-primary" style="float: right;" onclick="return window.location.href ='./add-lto.php'">Add LTO</button>
        </h5>
        <table class="table table-striped">
          <thead>
            <th>Avatar</th>
            <th>Name</th>
            <th>Contact </th>
            <th>Email</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
            foreach ($data["lto"] as $index => $lto) :
            ?>
              <tr>
                <td><img src="<?= $lto["avatar"] ?>" style="width: 70px" alt="Profile"></td>
                <td><?= $lto["name"] ?></td>
                <td><?= $lto["contact"] ?></td>
                <td><?= $lto["email"] ?></td>
                <td>
                  <button type="button" class="btn btn-warning m-1" onclick="return window.location.href='./edit-lto.php?i=<?= $index ?>'">Edit</button>
                  <button type="button" class="btn btn-danger m-1">Delete</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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