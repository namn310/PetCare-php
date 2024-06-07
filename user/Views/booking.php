<?php
$this->layoutPath=("LayoutTrangChu.php");
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
      <img src="images/login-img/load.gif" class="w-100">

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



<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
  <div class="row pt-5">
    <div class="col-lg-4 col-md-12 mb-5">
      <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Care</h1>
      <p class="m-0"></p>
    </div>
    <div class="col-lg-8 col-md-12">
      <div class="row">
        <div class="col-md-4 mb-5">
          <h5 class="text-primary mb-4">Get In Touch</h5>
          <p><i class="fa fa-map-marker-alt mr-2"></i>Hà Nội</p>
          <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
          <p><i class="fa fa-envelope mr-2"></i>Nhom1@example.com</p>
          <div class="d-flex justify-content-start mt-4">

          </div>
        </div>
        <div class="col-md-4 mb-5">
          <h5 class="text-primary mb-4">Popular Links</h5>

        </div>
        <div class="col-md-4 mb-5">
          <h5 class="text-primary mb-4">Newsletter</h5>
          <form action="">
            <div class="form-group mb-3">
              <input type="text" class="form-control border-0" placeholder="Your Name" />
            </div>
            <div class="form-group mb-3">
              <input type="email" class="form-control border-0" placeholder="Your Email" />
            </div>
            <div>
              <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer End -->
<script src="js/script.js"></script>