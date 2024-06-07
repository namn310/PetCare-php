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
                            <tr class="table-primary text-center">
                                <th width="10"></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Giá vốn</th>
                                <th>Danh mục</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody id="table-product">
                            <?php
                            foreach ($data as $row) {
                            ?>
                                <tr class="text-center">
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td><?php echo $row->idPro ?></td>
                                    <td><?php echo $row->namePro ?></td>
                                    <td class="text-center"><img src="../assets/img-add-pro/<?php echo $row->hinhanh; ?>" style="width:100px;height:100px"></td>
                                    <td><?php echo $row->soluong ?></td>
                                    <td><span class="badge bg-success"><?php echo $row->tinhtrang ?></span></td>
                                    <td><?php echo $row->giaban ?></td>
                                    <td><?php echo $row->giavon ?></td>
                                    <td><?php echo $row->danhmuc ?></td>
                                    <td class="table-td-center">
                                        <button class="btn btn-danger btn-sm trash" data-bs-toggle="modal" data-bs-target="#delete-product" type="button" title="Xóa">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button class="btn btn-success btn-sm edit" type="button" title="Sửa" id="show-emp">
                                            <a style="text-decoration:none;color:white" href="index.php?controller=product&action=change&id=<?php echo $row->idPro ?>"><i class="fas fa-edit"></i> </a>
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
                        <?php for ($i = 1; $i <= $numPage; $i++) { ?>
                            <li class="page-item"><a href="index.php?controller=product&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ul>
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
                        <select class="form-select" id="exampleSelect2">
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
                <button type="submit" class="btn btn-primary"><a style="text-decoration:none;color:white" href="index.php?controller=product&action=delete&id=<?php echo $row->idPro ?>">Đồng ý</a></button>

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
<script src="../assets/js/main.js"></script>
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