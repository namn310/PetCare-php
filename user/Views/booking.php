<?php
$this->layoutPath = ("LayoutTrangChu.php");
?>

<!-- main images -->
<div class="main_img mt-2">

</div>
<!-- Booking -->
<div class="container mt-4 border pdt">
  <h3 class="service text-capitalize">ĐẶT LỊCH NGAY</h3>
  <hr>
  <div class="row">
    <div class="col-4">
      <img src="../images/login-img/load.gif" class="w-100">

    </div>
    <div class="col-8 align-items-left d-flex justify-content-left ps-5">
      <form style="width:50%" class="align-items-center" name="booking_form">
        <div class="form-group">
          <h6 class="text-center">Thông tin của Boss</h6>
          <label for="Bossname">Tên của Boss</label>
          <input onclick="checknameBookingForm()" onkeyup="checknameBookingForm()" type="text" class="form-control bossname" id="Bossname" name="Bossname" placeholder="Nhập tên của boss">

        </div>
        <div class="form-group">
          <label for="Bosstype">Boss là: </label>
          <input onclick="checktypeBookingForm()" onkeyup="checktypeBookingForm()" type="text" class="form-control" id="Bosstype" placeholder="Chó, mèo hoặc khác">

        </div>
        <div class="form-group">
          <label for="Bossweight">Cân nặng(kg): </label>
          <input onclick="checkweightBookingForm()" onkeyup="checkweightBookingForm()" type="text" class="form-control" id="Bossweight" placeholder="Điền cân nặng của Boss">
        </div>
        <div class="Date">
          <p>Chọn lịch</p>
          <input required type="datetime-local">
        </div>
      </form>
    </div>
    <!-- Button trigger modal -->
    <div class="align-items-center d-flex justify-content-center">
      <button onclick="completeBooking()" type="submit" class="btn btn-danger mt-3 submit_booking mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Đặt lịch
      </button>
    </div>

    <!-- Modal 
              <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <p>Đặt lịch thành công !</p> 
                      Bạn có thể xem lại thông tin lịch hẹn ở trong giỏ hàng
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Đồng ý</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
      -->

  </div>
</div>



<!--footer-->
<div class="container-fluid d-flex justify-content-around bg-dark mt-3">
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
<script src="js/script.js"></script>