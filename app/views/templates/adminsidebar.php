<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Primary Meta Tags -->
  <title>Enyokitchen | <?= $data['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="title" content="Volt - Free Bootstrap 5 Dashboard" />
  <meta name="author" content="Themesberg" />
  <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
  <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
  <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="<?= BASEURL; ?>/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= BASEURL; ?>/img/favicon/favicon.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>/img/favicon/favicon.png" />
  <link rel="manifest" href="<?= BASEURL; ?>/img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="<?= BASEURL; ?>/img/favicon/safari-pinned-tab.svg" color="#ffffff" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Sweet Alert -->
  <link type="text/css" href="<?= BASEURL; ?>/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />

  <!-- Notyf -->
  <link type="text/css" href="<?= BASEURL; ?>/vendor/notyf/notyf.min.css" rel="stylesheet" />

  <!-- Volt CSS -->
  <link type="text/css" href="<?= BASEURL; ?>/css/volt.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Mobile -->
  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="<?= BASEURL; ?>">
      <img class="navbar-brand-dark" src="<?= BASEURL; ?>/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="<?= BASEURL; ?>/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- / Navbar Mobile -->

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px;">
      <div class="simplebar-height-auto-observer-wrapper">
        <div class="simplebar-height-auto-observer"></div>
      </div>
      <div class="simplebar-mask">
        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
          <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
            <div class="simplebar-content" style="padding: 0px;">
              <div class="sidebar-inner px-4 pt-3">
                <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4"><img src="<?= BASEURL; ?>/img/team/pp.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                    <div class="d-block">
                      <h2 class="h5 mb-3">Hi, Rangrang</h2><a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center"><svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg> Sign Out</a>
                    </div>
                  </div>
                  <div class="collapse-close d-md-none"><a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation" class=""><svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg></a></div>
                </div>
                <ul class="nav flex-column pt-3 pt-md-0">
                  <li class="nav-item <?= $data['title'] == "Dashboard" ? 'active' : ''; ?>">
                    <a href="<?= BASEURL; ?>/admin" class="nav-link">
                      <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2 mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                          <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                      </span>
                      <span class="sidebar-text">Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item <?= $data['title'] == "Menu" ? 'active' : ''; ?>">
                    <a href="<?= BASEURL; ?>/menu" class="nav-link">
                      <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                      </span>
                      <span class="sidebar-text">Menu</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="simplebar-placeholder" style="width: auto; height: 621px;"></div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
    </div>
  </nav>

  <main class="content">