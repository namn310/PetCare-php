<?php
//load file layout.php
$this->layoutPath = "Layout.php";
?>

<div class="pagetitle">
    <h1>Quản lý sản phẩm</h1>
    <!-- End Page Title -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="button-function d-flex justify-content-between mt-3 mb-4" style="width:70%">

                        <button id="uploadfile" class="btn btn-success btn-sm nhap-tu-file" type="button" title="Nhập"><a style="color:white" href="index.php?controller=product&action=create"><i class="fas fa-plus"></i>>
                                Tạo mới sản phẩm</a></button>
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
                        <input class="form-control" type="text" id="searchProduct">
                    </div>

                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr class="table-primary">
                                <th width="10"></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody id="table-product">
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>Sữa pha Precaten</td>
                                <td><img src="" alt="" width="100px;"></td>
                                <td>40</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Thực phẩm chức năng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>61304005</td>
                                <td>PetLac Vitamin cho mèo</td>
                                <td><img src="" alt="" width="100px;"></td>
                                <td>70</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>200.000 đ</td>
                                <td>Thực phẩm chức năng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>62304003</td>
                                <td>Vitamin dạng lỏng cho chó mèo</td>
                                <td><img src="" alt="" width="100px;"></td>
                                <td>40</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>299.000 đ</td>
                                <td>Thực phẩm chức năng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>72638003</td>
                                <td>Viên uống men vi sinh</td>
                                <td><img src="" alt="" width="100px;"></td>
                                <td>50</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>150.000 đ</td>
                                <td>Thực phẩm chức năng</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>72109004</td>
                                <td>Vòng cổ</td>
                                <td><img src="/img-sanpham/zuno.jpg" alt="" width="100px;"></td>
                                <td>50</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Phụ kiện</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>82716001</td>
                                <td>Balo mèo</td>
                                <td><img src="/img-sanpham/vita.jpg" alt="" width="100px;"></td>
                                <td>55</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>299.000 đ</td>
                                <td>Phụ kiện</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>72109001</td>
                                <td>Snappy Tom</td>
                                <td><img src="/img-sanpham/lucy.jpg" alt="" width="100px;"></td>
                                <td>38</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>150.000 đ</td>
                                <td>Ghế gỗ</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71304041</td>
                                <td>Cats rang</td>
                                <td><img src="/img-sanpham/vegas.jpg" alt="" width="100px;"></td>
                                <td>80</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Thức ăn hạt</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71304037</td>
                                <td>Royal Cannin</td>
                                <td><img src="/img-sanpham/banan.jpg" alt="" width="100px;"></td>
                                <td>80</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>299.000 đ</td>
                                <td>Thức ăn hạt</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71304032</td>
                                <td>Đồ chơi hình quả bóng cao su</td>
                                <td><img src="/img-sanpham/cera.jpg" alt="" width="100px;"></td>
                                <td>46</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Đồ chơi</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71338008</td>
                                <td>Monge</td>
                                <td><img src="/img-sanpham/dolas.jpg" alt="" width="100px;"></td>
                                <td>66</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>280.000 đ</td>
                                <td>Pate</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>83826226</td>
                                <td>Reflex</td>
                                <td><img src="/img-sanpham/tu.jpg" alt="" width="100px;"></td>
                                <td>0</td>
                                <td><span class="badge bg-danger">Hết hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Pate</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>83252001</td>
                                <td>Nutri Plan</td>
                                <td><img src="/img-sanpham/thomas.jpg" alt="" width="100px;"></td>
                                <td>73</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Pate</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>83252002</td>
                                <td>Meatts</td>
                                <td><img src="/img-sanpham/jimmy.jpg" alt="" width="100px;"></td>
                                <td>60</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Pate</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>83216008</td>
                                <td>CatHome</td>
                                <td><img src="/img-sanpham/tare.jpg" alt="" width="100px;"></td>
                                <td>65</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Thức ăn hạt</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>83216006</td>
                                <td>Nabirang</td>
                                <td><img src="/img-sanpham/kara.jpg" alt="" width="100px;"></td>
                                <td>60</td>
                                <td><span class="badge bg-success">Còn hàng</span></td>
                                <td>250.000 đ</td>
                                <td>Thức ăn hạt</td>
                                <td class="table-td-center">
                                    <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#Modalproduct">
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
<div class="modal fade" id="Modalproduct" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="font-weight:bolder">Chỉnh sửa sản phẩm</h4>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label" style="font-weight: bold;">Mã sản phẩm </label>
                        <input class="form-control" type="number" value="71309005">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" style="font-weight: bold;">Tên sản phẩm</label>
                        <input class="form-control" type="text" required value="Sữa pha Pretacen">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label" style="font-weight: bold;">Số lượng</label>
                        <input class="form-control" type="number" required value="20">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label" style="font-weight: bold;">Ảnh</label>
                        <input class="form-control" type="file" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label" style="font-weight: bold;">Tình trạng sản
                            phẩm</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>Còn hàng</option>
                            <option>Hết hàng</option>
                            <option>Đang nhập hàng</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" style="font-weight: bold;">Giá bán</label>
                        <input class="form-control" type="text" value="5.600.000">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleSelect1" class="control-label" style="font-weight: bold;">Danh
                            mục</label>
                        <select class="form-select" id="exampleSelect1">
                            <option>Pate</option>
                            <option>Thức ăn hạt</option>
                            <option>Đồ chơi</option>
                            <option>Thực phẩm chức năng</option>
                            <option>Dụng cụ</option>
                            <option>Phụ kiện</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-bs-dismiss="modal">Lưu lại</button>
                <a class="btn btn-danger" data-bs-dismiss="modal">Hủy bỏ</a>
            </div>
        </div>
    </div>
</div>
<!--
MODAL
-->
<!-- Modal xóa -->
<div class="modal fade" id="delete-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có muốn xóa không ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><a href="">Đồng ý</a></button>

            </div>
        </div>
    </div>
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
        $("#searchProduct").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table-product tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>