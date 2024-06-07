<?php
$this->layoutPath = ("LayoutTrangChu.php");
?>


<!DOCTYPE html>
<html lang="en">


<!-- contact form -->
<div class=" container contact-form d-flex justify-content-between mt-4 pdt">
  <div class="contact-link">
    <img class="img-fluid" style="width:80%;height:90%" src="../images/other-img/letters-1459347_1280.webp">
  </div>
  <div class="form-contact" style="border-radius:20px;box-shadow:5px 10px 20px blue">
    <h1 class="p-3 text-center">Contact Form</h1>
    <form style="padding:20px" id="contact_form" name="contact_form">
      <div class="mb-5 row">
        <div class="col">
          <label>Họ và tên</label>
          <input onclick="checkCustomerDetailName()" onkeydown="checkCustomerDetailName()" type="text" required maxlength="50" class="form-control" id="name" name="name">
        </div>
      </div>
      <div class="mb-5 row">
        <div class="col">
          <label for="email">Email </label>
          <input onclick="checkCustomerDetailEmail()" onkeyup="checkCustomerDetailEmail()" type="email" required maxlength="50" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="col">
          <label for="phonenumber">Số điện thoại</label>
          <input onclick="checkCustomerDetailPhone()" onkeyup="checkCustomerDetailPhone()" type="text" class="form-control" id="phonenumber" name="Phone" placeholder="Phone">
        </div>
      </div>
      <div class="mb-5">
        <label for="message">Nội dung</label>
        <textarea onclick="checkMessage()" onkeyup="checkMessage()" class="form-control" id="message" name="message" rows="5" style="resize:none"></textarea>
        <p id="error_message" class="text-danger" style="display:none">Vui lòng nhập nội dung</p>
      </div>
      <button onclick="sendContactForm()" type="submit" class="btn btn-primary px-4 btn-lg">Gửi</button>
    </form>
  </div>
</div>
<!-- contact-form end-->
<!--footer-->
<div class="container-fluid d-flex justify-content-around mt-5 bg-dark">
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