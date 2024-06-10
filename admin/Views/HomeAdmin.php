<?php
$this->layoutPath = "Layout.php";
include "Model/DonhangModel.php";
?>


<div class="pagetitle">
  <h1>Trang chủ</h1>
  <!-- End Page Title -->
  <div class="main-content mt-4 d-flex">
    <div class="main-content-left d-flex flex-wrap">
      <div class="d-flex flex-wrap justify-content-between">
        <div class="widget d-flex" style="min-width:200px;min-height:50px;background-color: #FFFFFF;padding:10px;border-radius:10px;box-shadow: 2px 2px 2px blue">
          <div class="widget-icon me-2" style="width:50px">
            <i class="fa-solid fa-clipboard-user fa-2xl"></i>
          </div>
          <div class="widget-status">
            <h4 class="text-danger">Tổng khách hàng</h4>
            <p><b>56 khách hàng</b></p>
            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
          </div>
        </div>
        <div class="widget d-flex" style="width:250px;height:150px;background-color: #FFFFFF;padding:10px;border-radius:10px;box-shadow: 2px 2px 2px blue">
          <div class="widget-icon me-2" style="width:50px">
            <i class="fa-brands fa-product-hunt fa-2xl" style="color: #c1e65b;"></i>
          </div>
          <div class="widget-status">
            <h4 class="text-danger">Tổng sản phẩm</h4>
            <p><b><?php echo $this->modelTotal() ?> sản phẩm</b></p>
            <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
          </div>
        </div>
        <div class="widget d-flex" style="width:250px;height:150px;background-color: #FFFFFF;padding:10px;border-radius:10px;box-shadow: 2px 2px 2px blue;margin-top:20px">
          <div class="widget-icon me-2" style="width:50px">
            <i class="fa-solid fa-basket-shopping fa-2xl" style="color: #df3826;"></i>
          </div>
          <div class="widget-status">
            <h4 class="text-danger">Tổng đơn hàng</h4>
            <p><b><?php
                  $conn = Connection::getInstance();
                  $result = $conn->query("select id from orders");
                  echo $result->rowCount();
                  ?> đơn hàng</b></p>
            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
          </div>
        </div>
        <div class="widget d-flex" style="width:250px;height:150px;background-color: #FFFFFF;padding:10px;border-radius:10px;box-shadow: 2px 2px 2px blue;margin-top:20px">
          <div class="widget-icon me-2" style="width:50px">
            <i class="fa-solid fa-house-crack fa-2xl" style="color: #f31616;"></i>
          </div>
          <div class="widget-status">
            <h4 class="text-danger">Sắp hết hàng</h4>
            <p><b><?php
                  $result = $conn->query("select idPro from product where soluong < 0");
                  echo $result->rowCount();


                  ?> Sản phẩm</b></p>
            <p class="info-tong">Số sản phẩm cần nhập thêm.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="main-content-right" style="margin-left:20px">
      <img class="img-fluid" src="/../Project-petcare-php/assets/img/bieudo.png">
      <img class="img-fluid mt-5" src="/../Project-petcare-php/assets/img/bieudo2.png">
    </div>
  </div>
</div>

