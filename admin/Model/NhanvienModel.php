<?php
trait NhanvienModel
{
    //Thêm nhân viên
    public function modelCreate()
    {
        $conn = Connection::getInstance();
        $name = $_POST['nameNV'];
        $email = $_POST['emailNV'];
        $local = $_POST['localNV'];
        $phone = $_POST['phoneNV'];
        $dateNV = $_POST['dateNV'];
        $CMND = $_POST['CMND'];
        $sex = $_POST['sex'];
        $chucvu = $_POST['chucvuNV'];
        //xulyhinhanh
        $hinhanh = $_FILES['imgNV']['name'];
        $hinhanh_tmp = $_FILES['imgNV']['tmp_name'];
        $hinhanh = time() . '_' . $hinhanh;
        $dateAdd = date("d-m-y");
        //$addproduct = "insert into nhanvien set tenNC=:_name,soluong=:_soluong,giaban=:_giaban,giavon=:_giavon,danhmuc=:_danhmuc,tinhtrang=:_tinhtrang,hinhanh=:_hinhanh,timeadd=:_timeadd ";
        $conn = Connection::getInstance();
        //$query = $conn->prepare($addproduct);
        $conn->exec('INSERT INTO nhanvien(tenNV, anhNV, diachi, birth, sex, phone, chucvu, email,cmnd,dateadd) VALUES ("' . $name . '","' . $hinhanh . '","' . $local . '","' . $dateNV . '","' . $sex . '","' . $phone . '","' . $chucvu . '","' . $email . '","' . $CMND . '","' . $dateAdd . '")');
        move_uploaded_file($hinhanh_tmp, "../assets/img-nhanvien/" . $hinhanh);
    }
}
