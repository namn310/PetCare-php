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
        <div class="widget d-flex" style="width:250px;height:180px;background-color: #FFFFFF;padding:10px;border-radius:10px;box-shadow: 2px 2px 2px blue">
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
      <!--
      <div class="donhang mt-5 p-3 bg-white" style="border-radius:10px">
        <h4>Tình trạng đơn hàng</h4>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID đơn hàng</th>
              <th>Tên khách hàng</th>
              <th>Tổng tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>AL3947</td>
              <td>Phạm Thị Ngọc</td>
              <td>
                1.770.000 đ
              </td>
              <td><span class="badge bg-info">Chờ xử lý</span></td>
            </tr>
            <tr>
              <td>ER3835</td>
              <td>Nguyễn Thị Mỹ Yến</td>
              <td>
                770.000 đ
              </td>
              <td><span class="badge bg-warning">Đang vận chuyển</span></td>
            </tr>
            <tr>
              <td>MD0837</td>
              <td>Triệu Thanh Phú</td>
              <td>
                3.400.000 đ
              </td>
              <td><span class="badge bg-success">Đã hoàn thành</span></td>
            </tr>
            <tr>
              <td>MT9835</td>
              <td>Đặng Hoàng Phúc </td>
              <td>
                2.650.000 đ
              </td>
              <td><span class="badge bg-danger">Đã hủy </span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="newCustomer mt-5 bg-white p-4" style="border-radius:10px">
        <h4>Khách hàng mới</h4>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên khách hàng</th>
              <th>Ngày sinh</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#183</td>
              <td>Bùi An Khang</td>
              <td>21/7/1992</td>
              <td><span class="tag tag-success">0921387221</span></td>
            </tr>
            <tr>
              <td>#219</td>
              <td>Hoàng Kim Tấn</td>
              <td>30/4/1975</td>
              <td><span class="tag tag-warning">0912376352</span></td>
            </tr>
            <tr>
              <td>#627</td>
              <td>Nguyễn Phương Nam</td>
              <td>12/3/1999</td>
              <td><span class="tag tag-primary">0128732665</span></td>
            </tr>
            <tr>
              <td>#175</td>
              <td>Nguyễn Ngọc Như</td>
              <td>4/12/20000</td>
              <td><span class="tag tag-danger">0912376763</span></td>
            </tr>
          </tbody>
        </table>
      </div>
-->
    </div>
    <div class="main-content-right" style="margin-left:20px">
      <img class="img-fluid" src="/../Project-petcare-php/assets/img/bieudo.png">
      <img class="img-fluid mt-5" src="/../Project-petcare-php/assets/img/bieudo2.png">
    </div>
  </div>
</div>