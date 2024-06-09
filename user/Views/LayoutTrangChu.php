<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care</title>
    <link rel="shortcut icon" type="image/png" href="../images/logo/PetCARE.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/user-responsive.css">
    <link rel="stylesheet" href="../css/user1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Header -->
    <div class="header container-fluid mb-3 fixed-top">
        <div class="row bg-dark  py-2 px-lg-5 ">
            <div class="col-lg-6 text-left  mb-2 mb-lg-0 d-inline-flex">
                <a class="text-white px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="col-lg-6 text-right d-inline-flex align-items-right justify-content-end px-0">
                <div class="d-inline-flex align-items-center ">
                    <a class="text-white px-3" href=""><i class="fa-solid fa-phone mx-1"></i>0123456789</a>
                </div>
            </div>
        </div>
        <div class="row navbar navbar-expand-sm navbar-dark bg-white shadow">
            <nav class="navbar navbar-expand-sm ">
                <div class="container-fluid">
                    <div class="nav-brand ps-5" style="width: 200px;">
                        <img class="img cursor: pointer; w-25" src="../images/logo/PetCARE.png">
                        <a class="navbar-brand mx-0" href="index.php" style="color: #F7A98F;">PetCare</a>
                    </div>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PetCare</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " aria-current="page" href="index.php">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " href="index.php?controller=about">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " href="index.php?controller=service">Dịch vụ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " href="index.php?controller=product&action=danhmuc&idDM=4">Sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " href="index.php?controller=book">Đặt lịch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 " href="index.php?controller=contact">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="index.php?controller=cart">Giỏ hàng</a>
                                </li>
                        </div>
                    </div>
                    <button class="btn text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <?php
                    if (isset($_SESSION['customer_email']) == false) {
                    ?>

                        <a style="text-decoration:none;color:black" class="me-2 ms-2" href="index.php?controller=account">Đăng Nhập</a><span>/</span>
                        <a style="text-decoration:none;color:black" class="me-2 ms-2" href="index.php?controller=account&action=logOut">Đăng Xuất</a>
                    <?php
                    } else {

                    ?>


                        <a class="nav-item dropdown " href="#">
                            <a class=" login-button dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" style="left: 1280px;top: 55px;">
                                <li><a class="dropdown-item" href="index.php?controller=user"><i class="fa-regular fa-user text-primary pe-2"></i>Thông tin cá nhân</a></li>


                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?controller=account&action=logOut">Đăng Xuất<i class="fa-solid fa-right-from-bracket text-secondary ps-2"></i></a></li>
                            </ul>
                        </a>
                    <?php
                    }
                    ?>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

        </div>


    </div>
    <!-- 
<div class="menu-phone" >
    <div><a href="index1.html">Trang chủ </a></div>
    <div><a href="about.html">Giới thiệu  </a></div>
    <div><a href="service.html">Dịch vụ </a></div>
    <div><a href="product.html">Sản phẩm </a></div>
    <div><a href="booking.html">Đặt lịch </a></div>
    <div><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a></div>
</div>-->
    <!--header end-->
    <?php
    echo $this->view;
    ?>

</body>
<script href="../js/script.js"></script>

</html>