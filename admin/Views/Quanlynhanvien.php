<?php
//load file layout.php
$this->layoutPath = "Layout.php";
?>

<div class="pagetitle">
    <h1>Quản lý nhân viên</h1>
    <!-- End Page Title -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="button-function d-flex justify-content-between mt-3 mb-4" style="width:70%">

                        <button id="uploadfile" class="btn btn-success" type="button" title="Nhập" onclick="myFunction(this)"><a id="addnhanvien" href="index.php?controller=nhanvien&action=create"><i class="fas fa-plus"></i>>
                                Tạo mới nhân viên</a></button>
                        <!--
                                <button id="uploadfile" class="btn btn-secondary btn-sm nhap-tu-file" type="button"
                                    title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i>>
                                    Tải từ file</button>



                                <a class="btn btn-primary btn-sm print-file" type="button" title="In"
                                    onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>


                                <a class="btn btn-warning btn-sm print-file js-textareacopybtn" type="button"
                                    title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>



                                <a class="btn btn-success btn-sm" href="" title="In"><i class="fas fa-file-excel"></i>
                                    Xuất Excel</a>


                                <a class="btn btn-danger btn-sm pdf-file" type="button" title="In"
                                    onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
 -->
                    </div>
                    <div class="search mt-4 mb-4 input-group" style="width:50%">
                        <button class="input-group-text btn btn-success"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control" type="text" id="searchNV">
                    </div>



                    <table class="table table-hover table-bordered text-center" cellpadding="0" cellspacing="0" border="0" id="sampleTable">
                        <thead>
                            <tr class="table-primary">
                                <th width="10">

                                </th>
                                <th>
                                    ID nhân viên
                                </th>
                                <th width="150">
                                    Họ và tên
                                </th>
                                <th width="20">
                                    Ảnh thẻ
                                </th>
                                <th width="300">
                                    Địa chỉ
                                </th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                                <th width="100">
                                    Tính năng
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-nv">
                            <tr>
                                <td width="10">
                                    <input type="checkbox" name="check1" value="1" />
                                </td>
                                <td>#CD12837</td>
                                <td>
                                    Hồ Thị Thanh
                                    Ngân
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/1.jpg" alt="" />
                                </td>
                                <td>
                                    155-157 Trần
                                    Quốc Thảo,
                                    Quận 3, Hồ Chí
                                    Minh
                                </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>Bán hàng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" name="check2" value="2" />
                                </td>
                                <td>#SX22837</td>
                                <td>Trần Khả Ái</td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/2.jpg" alt="" />
                                </td>
                                <td>
                                    6 Nguyễn Lương
                                    Bằng, Tân Phú,
                                    Quận 7, Hồ Chí
                                    Minh
                                </td>
                                <td>22/12/1999</td>
                                <td>Nữ</td>
                                <td>0931342432</td>
                                <td>Bán hàng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" name="check3" value="3" />
                                </td>
                                <td>#LO2871</td>
                                <td>
                                    Phạm Thu Cúc
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/3.jpg" alt="" />
                                </td>
                                <td>
                                    Số 3 Hòa Bình,
                                    Phường 3, Quận
                                    11, Hồ Chí
                                    Minh
                                </td>
                                <td>02/06/1998</td>
                                <td>Nữ</td>
                                <td>0931491997</td>
                                <td>
                                    Spa-Grooming
                                </td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" />
                                </td>
                                <td>#SR28746</td>
                                <td>
                                    Trần Anh Khoa
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/4.jpg" alt="" />
                                </td>
                                <td>
                                    19 Đường
                                    Nguyễn Hữu
                                    Thọ, Tân Hưng,
                                    Quận 7, Hồ Chí
                                    Minh
                                </td>
                                <td>18/02/1995</td>
                                <td>Nam</td>
                                <td>0916706633</td>
                                <td>
                                    Chăm sóc thú
                                    cưng
                                </td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" />
                                </td>
                                <td>#KJS276</td>
                                <td>
                                    Nguyễn Thành
                                    Nhân
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/2.jpg" alt="" />
                                </td>
                                <td>
                                    Số 13, Tân
                                    Thuận Đông,
                                    Quận 7, Hồ Chí
                                    Minh
                                </td>
                                <td>10/03/1996</td>
                                <td>Nam</td>
                                <td>0971038066</td>
                                <td>
                                    Spa-Grooming
                                </td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" />
                                </td>
                                <td>#BS76228</td>
                                <td>
                                    Nguyễn Đặng
                                    Trọng Nhân
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/6.jpg" alt="" />
                                </td>
                                <td>
                                    59C Nguyễn
                                    Đình Chiểu,
                                    Quận 3, Hồ Chí
                                    Minh
                                </td>
                                <td>23/07/1996</td>
                                <td>Nam</td>
                                <td>0846881155</td>
                                <td>
                                    Chăm sóc thú
                                    cưng
                                </td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10">
                                    <input type="checkbox" />
                                </td>
                                <td>#YUI21376</td>
                                <td>
                                    Nguyễn Thị Mai
                                </td>
                                <td>
                                    <img class="img-card-person" src="/Views/img-anhthe/7.jpg" alt="" />
                                </td>
                                <td>
                                    Đường Số 3,
                                    Tân Tạo A,
                                    Bình Tân, Hồ
                                    Chí Minh
                                </td>
                                <td>09/12/2000</td>
                                <td>Nữ</td>
                                <td>0836333037</td>
                                <td>Tư vấn</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-target="#delete" data-bs-toggle="modal" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>
                    Chỉnh sửa thông tin
                    nhân viên
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">ID nhân viên</label>
                        <input class="form-control" type="text" required value="#CD2187" disabled />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Họ và tên</label>
                        <input class="form-control" type="text" required value="Hồ Thị Thanh Ngân" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Số điện thoại</label>
                        <input class="form-control" type="number" required value="09267312388" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Địa chỉ email</label>
                        <input class="form-control" type="text" required value="namnnrr@gmail.com" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Ngày sinh</label>
                        <input class="form-control" type="date" value="15/03/2000" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleSelect1" class="control-label">Chức vụ</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>Bán hàng</option>
                            <option>Tư vấn</option>
                            <option>Dịch vụ</option>
                            <option>Bác sĩ thú y</option>
                            <option>Spa-Grooming</option>
                        </select>
                    </div>
                </div>
                <br />


            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-bs-dismiss="modal" type="button">
                    Lưu lại
                </button>
                <button class="btn btn-danger" data-bs-dismiss="modal" href="#">Hủy bỏ</button>
            </div>

        </div>
    </div>
</div>
<!--
  MODAL
-->

<!-- Modal xóa -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Xóa thành công
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/../Project-petcare-php/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/../Project-petcare-php/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/../Project-petcare-php/assets/vendor/chart.js/chart.umd.js"></script>
<script src="/../Project-petcare-php/assets/vendor/echarts/echarts.min.js"></script>
<script src="/../Project-petcare-php/assets/vendor/quill/quill.js"></script>
<script src="/../Project-petcare-php/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/../Project-petcare-php/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/../Project-petcare-php/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/../Project-petcare-php/admin/js/main.js"></script>
<script src="/../Project-petcare-php/admin/js/chart.js"></script>
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
    $(document).ready(function() {
        $("#searchNV").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table-nv tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>