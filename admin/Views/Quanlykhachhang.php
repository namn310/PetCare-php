<?php
//load file layout.php
$this->layoutPath = "Layout.php";
?>

<div class="pagetitle">
    <h1>Quản lý khách hàng</h1>
    <!-- End Page Title -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <!--
                            <div class="button-function d-flex justify-content-between mt-3 mb-4" style="width:70%">


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

                            </div>
                            -->
                    <div class="search mt-4 mb-4 input-group" style="width:50%">
                        <button class="input-group-text btn btn-success"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control" type="text" id="searchCustomer">
                    </div>

                    <table class="table table-hover table-bordered text-center" cellpadding="0" cellspacing="0" border="1" id="sampleTable">
                        <thead>
                            <tr class="table-primary">
                                <th width="10"></th>
                                <th>ID khách hàng</th>
                                <th width="150">Họ và tên</th>
                                <th width="300">Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Gmail</th>
                            </tr>
                        </thead>
                        <tbody id="table-customer">
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>ngandd1234@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check2" value="2"></td>
                                <td>#SX22837</td>
                                <td>Trần Khả Ái</td>
                                <td>6 Nguyễn Lương Bằng, Tân Phú, Quận 7, Hồ Chí Minh</td>
                                <td>22/12/1999</td>
                                <td>Nữ</td>
                                <td>0931342432</td>
                                <td>ainthh1@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check3" value="3"></td>
                                <td>#LO2871</td>
                                <td>Phạm Thu Cúc</td>
                                <td>Số 3 Hòa Bình, Phường 3, Quận 11, Hồ Chí Minh </td>
                                <td>02/06/1998</td>
                                <td>Nữ</td>
                                <td>0931491997</td>
                                <td>cucyjg123@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox"></td>
                                <td>#SR28746</td>
                                <td>Trần Anh Khoa</td>
                                <td>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh </td>
                                <td>18/02/1995</td>
                                <td>Nam</td>
                                <td>0916706633</td>
                                <td>khoa343@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox"></td>
                                <td>#KJS276</td>
                                <td>Nguyễn Thành Nhân</td>
                                <td>Số 13, Tân Thuận Đông, Quận 7, Hồ Chí Minh </td>
                                <td>10/03/1996</td>
                                <td>Nam</td>
                                <td>0971038066</td>
                                <td>nhanasfd1@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox"></td>
                                <td>#BS76228</td>
                                <td>Nguyễn Đặng Trọng Nhân</td>
                                <td>59C Nguyễn Đình Chiểu, Quận 3, Hồ Chí Minh </td>
                                <td>23/07/1996</td>
                                <td>Nam</td>
                                <td>0846881155</td>
                                <td>nhanaal12@gmail.com</td>

                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox"></td>
                                <td>#YUI21376</td>
                                <td>Nguyễn Thị Mai</td>
                                <td>Đường Số 3, Tân Tạo A, Bình Tân, Hồ Chí Minh</td>
                                <td>09/12/2000</td>
                                <td>Nữ </td>
                                <td>0836333037</td>
                                <td>mai1234@gmail.com</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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
        $("#searchCustomer").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table-customer tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>