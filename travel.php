<?php
include("./components/data.php");
$driver = $data["driver"][0];
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
  <link rel="stylesheet" href="assets/vendor/leaflet/css/leaflet.css" />
  <link rel="stylesheet" href="assets/vendor/leaflet/css/leaflet-routing-machine.css" />
  <link rel="stylesheet" href="assets/vendor/leaflet/css/Control.Geocoder.css" />
  <link rel="stylesheet" href="assets/vendor/leaflet/css/Control.FullScreen.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    #map {
      height: 85vh;
    }

    .leaflet-right {
      z-index: 500;
    }
  </style>
</head>

<body>
  <?php include("./components/driver-nav.php"); ?>


  <main id="main" class="main">
    <div id="map"></div>


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
  <script src="assets/vendor/leaflet/js/leaflet.js"></script>
  <script src="assets/vendor/leaflet/js/leaflet-routing-machine.js"></script>
  <script src="assets/vendor/leaflet/js/Control.Geocoder.js"></script>
  <script src="assets/vendor/leaflet/js/Control.FullScreen.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    let tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: false
    });

    let map = L.map('map', {
        fullscreenControl: true,
        fullscreenControlOptions: {
          position: 'topleft'
        },
        zoomControl: true,
        layers: [tileLayer],
      })
      .setView([10.7099534, 122.5555109], 12);

    L.Routing.control({
      waypoints: [
        L.latLng(10.711854745006116, 122.53776047562604),
        L.latLng(10.689433263229493, 122.55802591226234)
      ],
      routeWhileDragging: true,
      geocoder: L.Control.Geocoder.nominatim()
    }).addTo(map);

    map.on("click", function(event) {
      console.log(event.latlng)
    });

    map.invalidateSize();
  </script>
</body>

</html>