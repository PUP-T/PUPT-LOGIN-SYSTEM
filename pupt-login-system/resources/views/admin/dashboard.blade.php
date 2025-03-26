<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../assets/images/PUPLogo.png" type="image/x-icon" />
    <title>Dashboard</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="../../assets/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/admin/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/admin/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="../../assets/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="../../assets/admin/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <div class="d-flex align-items-center">
            <a href="index.html">
              <img src="../../assets/images/PUPLogo.png" alt="logo" style="width: 50px; height: auto;"/>
            </a>
            <h6 class="ms-2 fw-bold mb-0" style="color:#7e0e09;">PUP-T Systems Authentication</h6>
          </div>

      </div>
      <nav class="sidebar-nav">
        <ul>
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="text">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="" >
                  <span class="icon">
                    <i class="fas fa-history"></i>
                  </span>
                  <span class="text">Audit Trail</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" >
                  <span class="icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <span class="text">user Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" >
                  <span class="icon">
                    <i class="fas fa-user-shield"></i>
                  </span>
                  <span class="text">Access Control</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" >
                  <span class="icon">
                    <i class="fas fa-cog"></i>
                  </span>
                  <span class="text">Settings</span>
                </a>
            </li>
            <span class="divider"><hr /></span>
            <li class="nav-item">
                <a href="" >
                  <span class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                  </span>
                  <span class="text">Sign Out</span>
                </a>
            </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->
