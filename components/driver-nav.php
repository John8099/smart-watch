  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= $driver["avatar"] ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $driver["name"] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="z-index: 501;">
            <li class="dropdown-header">
              <h6><?= $driver["name"] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <?php
      $self = explode("/", $_SERVER['PHP_SELF']);
      $self = $self[count($self) - 1];
      include("links.php");
      foreach ($links["driver"] as $val) :
      ?>
        <li class="nav-item ">
          <a class="nav-link collapsed" href="<?= $val["url"] ?>" style="background: <?= $val["url"] == $self ? "#f6f9ff" : "none"  ?>;">
            <i class="<?= $val["icon"] ?>"></i>
            <span><?= $val["title"] ?></span>
          </a>
        </li>
      <?php
      endforeach;
      ?>
    </ul>

  </aside><!-- End Sidebar-->