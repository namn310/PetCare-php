<?php
//load file layout.php
$this->layoutPath = "Layout.php";
?>

  <div class="pagetitle">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="font-size: 22px;">
        <li class="breadcrumb-item"><a href="Quanlynhanvien.php">Quản lý nhân viên</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thêm nhân viên</li>
      </ol>
    </nav>

    <!-- End Page Title -->
    <form id="AddForm" class="AddForm row mt-4" style="background-color: white;padding:20px;border-radius:20px;box-shadow: 2px 2px 2px #FFCC99;">
      <div class="form-group col-md-4">
        <label style="font-weight: bolder;" class="control-label">ID nhân viên</label>
        <input class="form-control" id="idNV" onchange="checkID()" type="text">
      </div>
      <div class="form-group col-md-4">
        <label style="font-weight: bolder;" class="control-label">Họ và tên</label>
        <input class="form-control" id="nameNV" onclick="checkName()" onchange="checkName()" type="text">
      </div>
      <div class="form-group col-md-4">
        <label style="font-weight: bolder;" class="control-label">Địa chỉ email</label>
        <input class="form-control" id="emailNV" onclick="checkEmail()" onchange="checkEmail()" type="text">
      </div>
      <div class="form-group col-md-4">
        <label style="font-weight: bolder;" class="control-label mt-3">Địa chỉ thường trú</label>
        <input class="form-control" id="localNV" onclick="checkLocalNV()" onchange="checkLocalNV()" type="text">
      </div>
      <div class="form-group  col-md-4">
        <label style="font-weight: bolder;" class="control-label mt-3">Số điện thoại</label>
        <input class="form-control" id="phoneNV" onclick="checkPhone()" onchange="checkPhone()" type="text">
      </div>
      <div class="form-group col-md-4">
        <label style="font-weight: bolder;" class="control-label mt-3">Ngày sinh</label>
        <input class="form-control" id="dateNV" onclick="checkDateNV()" onchange="checkDateNV()" type="date">
      </div>
      <div class="form-group  col-md-3">
        <label style="font-weight: bolder;" style="font-weight: bolder;" class="control-label mt-3">Nơi sinh</label>
        <input class="form-control" id="noisinhNV" onclick="checkNoiSinhNV()" onchange="checkNoiSinhNV()" type="text">
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Số CMND/CCCD</label>
        <input class="form-control" onclick="checkCMND()" onchange="checkCMND()" id="CMND" type="text">
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Ngày cấp</label>
        <input class="form-control" id="date_cmnd" onclick="checkDateCMND()" onchange="checkDateCMND()" type="date">
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Nơi cấp</label>
        <input class="form-control" id="local_cmnd" onclick="checkLocalCMND" onchange="checkLocalCMND()" type="text">
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Giới tính</label>
        <select class="form-control" id="sex" onclick="checkSex()" onchange="checkSex()" id="exampleSelect2">
          <option>Chọn giới tính</option>
          <option>Nam</option>
          <option>Nữ</option>
          <option>Khác</option>
        </select>
      </div>

      <div class="form-group  col-md-3">
        <label style="font-weight: bolder;" for="exampleSelect1" class="control-label mt-3">Chức vụ</label>
        <select class="form-control" onclick="checkChucVuNV()" onchange="checkChucVuNV()" id="chucvuNV">
          <option>Chọn chức vụ</option>
          <option>Bán hàng</option>
          <option>Tư vấn</option>
          <option>Dịch vụ</option>
          <option>Bác sĩ thú y</option>
          <option>Spa-Grooming</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Bằng cấp</label>
        <select class="form-control" onclick="checkBangCapNV()" onchange="checkBangCapNV()" id="bangcapNV">
          <option>Chọn bằng cấp</option>
          <option>Tốt nghiệp Đại Học</option>
          <option>Tốt nghiệp Cao Đẳng</option>
          <option>Tốt nghiệp Phổ Thông</option>
          <option>Chưa tốt nghiệp</option>
          <option>Không bằng cấp</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label style="font-weight: bolder;" class="control-label mt-3">Tình trạng hôn nhân</label>
        <select class="form-control" onclick="checkHonNhanNV()" onchange="checkHonNhanNV()" id="honnhanNV">
          <option>Chọn tình trạng hôn nhân</option>
          <option>Độc thân</option>
          <option>Đã kết hôn</option>
          <option>Góa</option>
          <option>Khác</option>
        </select>
      </div>

      <div class="form-group col-md-12">
        <label style="font-weight: bolder;" class="control-label mt-3">Ảnh 3x4 nhân viên</label>
        <input class="form-control" style="width:50%" type="file" onchange="checkImgNV()" onclick="checkImgNV()" id="uploadImgNV" name="ImageUpload">



      </div>
      <input class="btn btn-success mt-4" type="button" href="" id="addbutton" onclick="checkFormAddNV()" style="width:10%" value="Thêm">
    </form>
  </div>



<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
<script src="/../Project-petcare-php/admin/assets/js/main.js"></script>
<script src="/../Project-petcare-php/admin/assets/js/chart.js"></script>
<script type="text/javascript">
  const toastTrigger = document.getElementById('liveToastBtn')
  const toastLiveExample = document.getElementById('liveToast')

  if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
      toastBootstrap.show()
    })
  }
  var data = {
    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
    datasets: [{
        label: "Dữ liệu đầu tiên",
        fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
        strokeColor: "rgb(255, 212, 59)",
        pointColor: "rgb(255, 212, 59)",
        pointStrokeColor: "rgb(255, 212, 59)",
        pointHighlightFill: "rgb(255, 212, 59)",
        pointHighlightStroke: "rgb(255, 212, 59)",
        data: [20, 59, 90, 51, 56, 100]
      },
      {
        label: "Dữ liệu kế tiếp",
        fillColor: "rgba(9, 109, 239, 0.651)  ",
        pointColor: "rgb(9, 109, 239)",
        strokeColor: "rgb(9, 109, 239)",
        pointStrokeColor: "rgb(9, 109, 239)",
        pointHighlightFill: "rgb(9, 109, 239)",
        pointHighlightStroke: "rgb(9, 109, 239)",
        data: [48, 48, 49, 39, 86, 10]
      }
    ]
  };
  var ctxl = $("#lineChartDemo").get(0).getContext("2d");
  var lineChart = new Chart(ctxl).Line(data);

  var ctxb = $("#barChartDemo").get(0).getContext("2d");
  var barChart = new Chart(ctxb).Bar(data);
</script>
<script>
  function checkName() {
    var name_correct =
      /^[A-Za-z\sAÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZaàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+$/;
    var name = document.getElementById("nameNV");
    var name_val = document.getElementById("nameNV").value;
    if (name_val == "" || name_correct.test(name_val) == false) {
      name.classList.add("is-invalid");
      return false;
    } else {
      name.classList.remove("is-invalid");
      name.classList.add("is-valid");
      return true;
    }
  }

  function checkID() {
    var id = document.getElementById("idNV");
    var id_val = id.value;
    if (id_val == "") {
      id.classList.add("is-invalid");
      return false;
    } else {
      id.classList.remove("is-invalid");
      id.classList.add("is-valid");
      return true;
    }
  }

  function checkPhone() {
    var correct_phone =
      /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
    var phone = document.getElementById("phoneNV");
    var phone_val = parseInt(phone.value);
    if (phone_val == "" || correct_phone.test(phone_val) == false) {
      phone.classList.add("is-invalid");
      return false;
    } else {
      phone.classList.remove("is-invalid");
      phone.classList.add("is-valid");
      return true;
    }
  }

  function checkEmail() {
    var correct_email =
      /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var email = document.getElementById("emailNV");
    var email_val = email.value;
    if (email_val == "" || correct_email.test(email_val) == false) {
      email.classList.add("is-invalid");
      return false;
    } else {
      email.classList.remove("is-invalid");
      email.classList.add("is-valid");
      return true;
    }
  }

  function checkLocalNV() {
    var locate_cus = document.getElementById("localNV");
    var locate_val = locate_cus.value;
    if (locate_val == "") {
      locate_cus.classList.add("is-invalid");
      return false;
    } else {
      locate_cus.classList.remove("is-invalid");
      locate_cus.classList.add("is-valid");
      return true;
    }
  }

  function checkNoiSinhNV() {
    var locate_cus = document.getElementById("noisinhNV");
    var locate_val = locate_cus.value;
    if (locate_val == "") {
      locate_cus.classList.add("is-invalid");
      return false;
    } else {
      locate_cus.classList.remove("is-invalid");
      locate_cus.classList.add("is-valid");
      return true;
    }
  }

  function checkDateNV() {
    var a = $("#dateNV").val();
    var b = new Date(a);
    if (!b.getTime()) {
      $("#dateNV").addClass("is-invalid")
      return false;
    } else {
      $("#dateNV").removeClass("is-invalid");
      $("#dateNV").addClass("is-valid");
      return true;
    }

  }

  function checkDateCMND() {
    var a = $("#date_cmnd").val();
    var b = new Date(a);
    if (!b.getTime()) {
      $("#date_cmnd").addClass("is-invalid")
      return false;
    } else {
      $("#date_cmnd").removeClass("is-invalid");
      $("#date_cmnd").addClass("is-valid");
      return true;
    }

  }

  function checkLocalCMND() {
    var locate_cus = document.getElementById("local_cmnd");
    var locate_val = locate_cus.value;
    if (locate_val == "") {
      locate_cus.classList.add("is-invalid");
      return false;
    } else {
      locate_cus.classList.remove("is-invalid");
      locate_cus.classList.add("is-valid");
      return true;
    }
  }

  function checkSex() {
    var city = document.getElementById("sex");
    var city_val = city.value;
    if (city_val === "Chọn giới tính") {
      city.classList.add("is-invalid");
      return false;
    } else {
      city.classList.remove("is-invalid");
      city.classList.add("is-valid");
      return true;
    }
  }

  function checkChucVuNV() {
    var city = document.getElementById("chucvuNV");
    var city_val = city.value;
    if (city_val === "Chọn chức vụ") {
      city.classList.add("is-invalid");
      return false;
    } else {
      city.classList.remove("is-invalid");
      city.classList.add("is-valid");
      return true;
    }
  }

  function checkBangCapNV() {
    var city = document.getElementById("bangcapNV");
    var city_val = city.value;
    if (city_val === "Chọn bằng cấp") {
      city.classList.add("is-invalid");
      return false;
    } else {
      city.classList.remove("is-invalid");
      city.classList.add("is-valid");
      return true;
    }
  }

  function checkHonNhanNV() {
    var city = document.getElementById("honnhanNV");
    var city_val = city.value;
    if (city_val === "Chọn tình trạng hôn nhân") {
      city.classList.add("is-invalid");
      return false;
    } else {
      city.classList.remove("is-invalid");
      city.classList.add("is-valid");
      return true;
    }
  }

  function checkImgNV() {
    var a = $("#uploadImgNV").val();
    if (a.length <= 0) {
      $("#uploadImgNV").addClass("is-invalid");
    } else {
      $("#uploadImgNV").removeClass("is-invalid");
      $("#uploadImgNV").addClass("is-valid");
    }
  }

  function checkCMND() {
    var locate_cus = document.getElementById("CMND");
    var locate_val = locate_cus.value;
    if (locate_val.length <= 8 || locate_val.length > 11 || locate_val.length == 10 || !parseInt(locate_val)) {
      locate_cus.classList.add("is-invalid");
      return false;
    } else {
      locate_cus.classList.remove("is-invalid");
      locate_cus.classList.add("is-valid");
      return true;
    }
  }

  function checkFormAddNV() {
    if (checkBangCapNV() == false || checkCMND() == false || checkChucVuNV() == false || checkDateCMND() == false || checkDateNV() == false || checkEmail() == false || checkHonNhanNV() == false || checkID() == false || checkImgNV() == false || checkLocalCMND() == false || checkLocalNV() == false || checkName() == false || checkNoiSinhNV() == false || checkPhone() == false || checkSex() == false) {
      alert("Vui lòng kiểm tra lại thông tin");
    } else {
      alert("Đã thêm thành công");
      document.getElementById("AddForm").reset();
      location.reload();
    }
  }
</script>