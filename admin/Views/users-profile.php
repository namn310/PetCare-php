<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin-Petcare</title>
  <link rel="stylesheet" href="\admin/Boostrap/css/bootstrap.css">
  <script href="\admin/Boostrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Latest compiled JavaScript -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/../Project-petcare-php/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="\admin/Boostrap/css/bootstrap.css">
  <script href="\admin/Boostrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="/../Project-petcare-php/admin/assets/css/style.css" rel="stylesheet">
  <link href="/../Project-petcare-php/admin/assets/css/style.css" rel="stylesheet">

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="/../Project-petcare-php/admin/assets/img/PetCARE.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Bạn có 4 thông báo mới
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Xem tất cả</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Quản lí</h4>
                <p>Tấn chôm tiền đi bắn bi-a</p>
                <p>30 phút trước</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Cảnh báo</h4>
                <p>Có 4 nhân viên đến muộn hôm nay</p>
                <p>1 giờ trước</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Thông báo</h4>
                <p>Quyết định sa thải đồng chí Tấn</p>
                <p>2 giờ trước</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Thông báo</h4>
                <p>Tấn dẫn các bác sĩ đi trộm chó</p>
                <p>4 giờ trước</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Xem tất cả thông báo</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Bạn có 3 thông báo
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Xem tất cả</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../Project-petcare-php/admin/assets/img/avt.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Tấn</h4>
                  <p>Nay xin nghỉ nhé</p>
                  <p>4 giờ trước</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../Project-petcare-php/admin/assets/img/avt2.png" alt="" class="rounded-circle">
                <div>
                  <h4>Nam</h4>
                  <p>Tấn xin cho tôi nghỉ rồi nhé</p>
                  <p>6 giờ trước</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/../Project-petcare-php/admin/assets/img/avt.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Khang</h4>
                  <p>Đơn sa thải đồng chí Tấn đến đâu rồi</p>
                  <p>8 giờ trước</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Hiển thị tất cả tin nhắn</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/../Project-petcare-php/admin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Bùi An Khang</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Bùi An Khang</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Trang cá nhân</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Cài đặt tài khoản</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>



             <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
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
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="fa-solid fa-house-user"></i>
          <span>Trang chủ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Quanlykhachhang.php">
          <i class="fa-solid fa-person"></i></i><span>Quản lý khách hàng</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Quanlynhanvien.php">
          <i class="fa-solid fa-users-gear"></i><span>Quản lý nhân viên</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Quanlysanpham.php">
          <i class="fa-brands fa-product-hunt"></i><span>Quản lý sản phẩm</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Quanlydichvu.php">
          <i class="fa-brands fa-servicestack"></i><span>Quản lý dịch vụ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Quanlydonhang.php">
          <i class="fa-solid fa-cart-shopping"></i><span>Quản lý đơn hàng</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Bangluong.php">
          <i class="fa-solid fa-coins"></i><span>Bảng kê lương</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="QuanLyDoanhThu.php">
          <i class="fa-solid fa-chart-line"></i><span>Báo cáo doanh thu</span>
        </a>
      </li>
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Trang cá nhân</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="/../Project-petcare-php/admin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Bùi An Khang</h2>
              <h3>Admin</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Cài đặt</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Đổi mật
                    khẩu</button>
                </li>

              </ul>
              <div class="tab-content pt-2">





                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Thông báo Email</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Thay đổi tài khoản
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Thông báo về sản phẩm và dịch vụ mới
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Các chiến lược marketing
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Thông báo hệ thống
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mật khẩu hiện tại</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Mật khẩu mới</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Nhập lại mật khẩu mới</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/../Project-petcare-php/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/quill/quill.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/../Project-petcare-php/admin/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="/../Project-petcare-php/admin/js/main.js"></script>

</body>

</html>