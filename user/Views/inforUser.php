<?php
$this->layoutPath = "LayoutTrangChu.php";
?>
<!-- user infor -->
<div class="row g-3 align-items-center mx-auto pdt">
  <div class="col-3">
    <div class="card border-0 ">
      <img src="../images/login-img/3.jpg" class="card-img-top rounded-circle w-50 mx-auto" alt="">
      <div class="card-body text-center">
        <h5 class="card-title"></h5>
        <p class="card-text">Tandz@gmail.com</p>
        <a href="#" class="btn btn-outline-danger">Xác thực</a>
      </div>
    </div>
  </div>
  <div class="col-6">
    <form>
      <h1 class="text-center mt-3">Thông tin cá nhân</h1>
      <div class="row g-3 align-items-center border-start border-end border-secondary  border-secondary-subtle">
        <div class="col">
          <p class="ms-2">Họ tên</p>
          <input type="text" class="form-control" placeholder="Họ tên">
        </div>
        <div class="col-12">
          <p class="ms-2">Số điện thoại</p>
          <input type="text" class="form-control" placeholder="0123-456-789">
        </div>
        <div class="col-12">
          <p class="ms-2">Địa chỉ</p>
          <input type="text" class="form-control" placeholder="Bắc Từ Liêm - Hà Nội">
        </div>
        <div class="col">
          <p class="ms-2">Giới tính</p>
          <select class="form-control">
            <option selected>Chọn</option>
            <option>Nam</option>
            <option>Nữ</option>
          </select>
        </div>
        <div class="col">
          <p class="ms-2">Ngày sinh</p>
          <input type="date" class="form-control">
        </div>
        <div class="col-12">
          <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-outline-danger ">Lưu thông tin</button>
          </div>

        </div>
      </div>
    </form>
  </div>

</div>
<!--footer-->
<div class="container-fluid d-flex justify-content-around bg-dark mt-5">
  <div class="footer1 d-flex align-items-center flex-column p-3">
    <h1 class="mb-3 mt-4  text-capitalize" style="color:#F7A98F">PetCare</h1>
    <p class="text-white">Giờ hoạt động: 8AM-10PM</p>
  </div>
  <div class="footer2 mt-3 text-white d-flex flex-column justify-content-between p-3">
    <h3>Get in touch</h3>
    <span>
      <h6><i class="fa-solid fa-envelope-circle-check fa-lg me-3" style="color: #ffffff;"></i>petcare@gmail.com</h6>
    </span>
    <span>
      <h6><i class="fa-solid fa-phone fa-lg me-4" style="color: #ffffff;"></i>0912345678</h6>
    </span>
    <span>
      <h6><i class="fa-solid fa-location-dot fa-lg me-4" style="color: #ffffff;"></i>Láng Thượng, Đống Đa, Hà Nội</h6>
    </span>
  </div>
  <div class="footer3 d-flex text-white flex-column mt-3 justify-content-between p-3 text-center">
    <h3>Popular links</h3>
    <a href="#"><i class="fa-brands fa-facebook fa-lg me-3" style="color: #ffffff;"></i></a>
    <a href="#"><i class="fa-brands fa-instagram fa-lg me-3" style="color: #ffffff;"></i></a>
    <a href="#"><i class="fa-brands fa-youtube fa-lg me-3" style="color: #ffffff;"></i></a>
  </div>

</div>

<!--footer end-->